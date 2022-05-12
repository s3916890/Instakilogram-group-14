const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function displayList(items, wrapper, rowsPerPage, page) {
    wrapper.innerHTML = "";
    page--;

    let loopStart = rowsPerPage * page,
        loopEnd = loopStart + rowsPerPage;

    let paginationItems = items.slice(loopStart, loopEnd);

    for (let i = 0; i < paginationItems.length; i++) {
        let paginationItem = paginationItems[i];

        let itemElement = document.createElement("div");
        itemElement.classList.add("item");

        itemElement.innerText = paginationItem;
        itemElement.onclick = function() {
            ='?myaccount.php'
        }


        wrapper.appendChild(itemElement);
    }
}
function setupPagination(items, wrapper, rowsPerPage) {
    wrapper.innerHTML = "";

    let pageCount = Math.ceil(items.length / rowsPerPage);

    // Create the order of page number from 1
    for (let i = 1; i < pageCount + 1; i++) {
        let pageNumber = i;
        let paginationButton = handlePaginationButton(pageNumber);
        wrapper.appendChild(paginationButton);
    }
}

function handlePaginationButton(pageNumber) {
    let paginationButton = document.createElement("button");
    paginationButton.innerText = pageNumber;

    if (currentPage == pageNumber) {
        paginationButton.classList.add("active");
    }

    paginationButton.addEventListener("click", () => {
        currentPage = pageNumber;
        displayList(listAccounts, listElement, rows, currentPage);

        let currentBtn = $('.pageNumbers button.active');
        currentBtn.classList.remove('active');

        paginationButton.classList.add('active');
    })

    return paginationButton;
}