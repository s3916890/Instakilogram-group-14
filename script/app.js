// FORM VALIDATION
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function FormValidator(formSelection, options) {
    if (!options) {
        options = {};
    }
    /** @function GetParentElement:  ..... */
    function GetParentElement(element, selector) {
        while (element.parentElement) {
            if (element.parentElement.matches(selector)) {
                return element.parentElement;
            }
            // Traverse the outside or new parent.
            element = element.parentElement;
        }
    }
    /**
     * Convention create the "RULE"
     * - If there is an error message --> return "Error Message"
     * - If there is no error --> return `undefined`;
     */
    let validatorRules = {
        required: (value) => {
            return value ? undefined : 'Please fill in this field';
        },
        email: (value) => {
            let regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : 'Please enter the email';
        },
        min: (min) => {
            return (value) => {
                return value.length >= min ? undefined : `Please enter at least ${min} characters`;
            }
        },
        max: (max) => {
            return (value) => {
                return value.length <= max ? undefined : `Please enter up to ${max} characters`;
            }
        },
        regexPassword: (value) => {
            let regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
            return regex.test(value) ? undefined : 'Password must contain at least 1 lower case letter, at least 1 upper case letter, at least 1 digit' || regex.test(value) === false;
        },
        isConfirmed: (value) => {
            let prevPassword = $('input[type = password]').value
            return value === prevPassword && prevPassword ? undefined : 'Re-enter password again';
        },
        isImage: (value) => {
            return value ? undefined : 'Please fill this image';
        }
    };
    // Get element in DOM based on "formSelector"
    const formElement = $(formSelection);
    const clearBtn = $('.form-clear');
    var formRules = {};
    // Handle if there is the existence of form element in the DOM
    if (formElement) {
        // Get all inputs tag
        var inputs = formElement.querySelectorAll('input[name][rules]');
        // console.log(inputs);
        // Iterate each input tag
        for (let input of inputs) {
            let rules = input.getAttribute('rules').split('|');
            for (let rule of rules) {
                var ruleInformation;
                // If rule has the ':' character --> split ':'
                var isRuleHasValue = rule.includes(':');
                if (isRuleHasValue) {
                    ruleInformation = rule.split(':');
                    // Get the first value
                    rule = ruleInformation[0];
                }
                // IMPLEMENT THE RULE FUNCTION 
                let ruleFunction = validatorRules[rule];

                if (isRuleHasValue) {
                    ruleFunction = ruleFunction(ruleInformation[1]);
                }
                if (Array.isArray(formRules[input.name])) {
                    formRules[input.name].push(ruleFunction);
                }
                else {
                    formRules[input.name] = [ruleFunction];
                }
            }
            // When user blur the input
            input.onblur = HandleValidator;
            // When user type the value on the input, the error will be CLEARED
            input.oninput = HandleClearError;
            clearBtn.onclick = HandleResetForm;
        }

        function HandleValidator(event) {
            let rules = formRules[event.target.name];
            let errorMessage;
            rules.some((rule, index) => {
                errorMessage = rule(event.target.value);
                return errorMessage;
            })
            // If there is a message, render it on the UI (User Interface)
            if (errorMessage) {
                const formGroup = GetParentElement(event.target, '.form-group');
                if (formGroup) {
                    formGroup.classList.add('invalid');
                    const formMessage = formGroup.querySelector('.form-message');
                    if (formMessage) {
                        formMessage.innerText = errorMessage;
                    }
                }
            }
            return !errorMessage;
        }
        function HandleClearError(event) {
            const formGroup = GetParentElement(event.target, '.form-group');
            // const inputs = $$('input[name]');
            if (formGroup.classList.contains('invalid')) {
                formGroup.classList.remove('invalid');
                const formMessage = formGroup.querySelector('.form-message');
                formMessage.innerText = '';
            }
        }
        function HandleResetForm(){
            const inputs = $$('input[name]');
            inputs.forEach((input) => {
                input.value = '';
            })
        }
        // ...... FIXING
        function changeFontFamily() {
            const inputs = $$('input[name][type]');
            // Change the font-family when users input. 
            inputs.forEach((input) => {
                input.oninput = () => {
                    input.style.fontFamily = 'Poppins, sans-serif';
                }
            })
        }
    }
    // Handle the form submitting behavior
    formElement.onsubmit = (event) => {
        event.preventDefault();
        // Confirm the validation of form
        let inputs = formElement.querySelectorAll('input[name][rules]');
        let isValid = true;
        for (let input of inputs) {
            if (!HandleValidator( 
                {
                    target: input
                }
            )) {
                isValid = false;
            }
        }
        if (isValid) {
            if (typeof options.onSubmit === 'function') {
                let enableInputs = formElement.querySelectorAll('input[name]');
                let formUserDatabase = Array.from(enableInputs).reduce((values, input, index) => {
                    switch (input.type) {
                        case 'file':
                            values[input.name] = input.files;
                            break;
                        default:
                            values[input.name] = input.value;
                    }
                    return values;
                }, {});
                // Execute the second paremeter "option" of the main function Validator
                options.onSubmit(formUserDatabase);
            }
            else {
                formElement.submit();
            }
        }
    }
}
