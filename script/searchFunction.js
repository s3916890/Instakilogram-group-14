function redirect() {
    let searchValue = document.querySelector('input[name="searchInput"]');
    location.href = "../view/displaySearch.php?searchInput="+searchValue.value;
}
