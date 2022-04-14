// declare component
const cookieTitle = "I Use cookies";
const cookieDesc =
    "My website uses cookies necessary for its basic functioning. By contiuning browsing, you consent to my use of cookies and other technologies."; // Description
const cookieButton1 = 'I understand';
const cookieButton2 = "Learn more";

// fade in function
function fadeIn(elem, display) {
    let el = document.getElementById(elem);
    el.style.opacity = 0;
    el.style.display = display || "block";

    (function fade() {
        let val = parseFloat(el.style.opacity);
        if (!((val += 0.02) > 1)) {
            el.style.opacity = val;
            requestAnimationFrame(fade);
        }
    })();
}

// fade out function
function FadeOut(elem) {
    let el = document.getElementById(elem);
    el.style.opacity = 1;

    (function fade() {
        if ((el.style.opacity -= 0.02) < 0) {
            el.style.display = "none";
        } else {
            requestAnimationFrame(fade);
        }
    })();
}

// set cookie
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        let date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

// get cookie
function getCookie(name) {
    let nameEQ = name + "=";
    let ca = document.cookie.split(";");
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == " ") c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// cookie consent
function cookieConsent() {
    if (!getCookie("cookieDismiss")) {
        document.body.innerHTML +=
            '<div id="main-loader"><div class="cookie-container" id="cookie"><h1 class="cookie-title">' +
            cookieTitle +
            '</h1><div class="cookie-desc"><p>' +
            cookieDesc +
            '</p></div><div class="cookies-btn"><a onClick="cookieDismiss();"><button class="cookie-btn" id="btn1">' +
            cookieButton1 +
            '</button></a><a><button class="cookie-btn" id="btn2">' +
            cookieButton2 +
            '</button></a></div></div></div>';
        fadeIn("cookie");
    }
}

// cookie dismiss
function cookieDismiss() {
    setCookie("cookieDismiss", "1", 30); // cookie will expire after 30days
    FadeOut("cookie");
    window.location.reload();
}

window.onload = function () {
    cookieConsent();
};
