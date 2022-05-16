fetch('../database/account.db')
    .then((response) => {
        return response.json();
    })
    .then((data) => {
        callback(data);
    })

let result = [];
let input = document.getElementsByClassName('searchInput').toString().toLowerCase();
data.forEach((user) => {
    let email = user.email.toLowerCase0;
    let firstName = user.firstName.toLowerCase();
    let LastName = user.LastName.toLowerCase();
    let name = firstName + " " + lastName;
    if (
        email.includes(searchValue) ||
        firstName.includes(searchValue) ||
        lastName.includes(searchValue) ||
        name.includes(searchValue)
    ) {
        result.push(user);
        console.log(result);
    }
}

)
