function resetPass() {
    let uID = document.querySelector('.account-name');
    location.href = "../view/resetPass.php?uID="+uID.value;
}
