function redirect() {
    let searchValue = document.querySelector('#searchInput');
    location.href = "../view/displaySearch.php?searchInput="+searchValue.value;
    // clear content of JSON file upon another search query 
}
