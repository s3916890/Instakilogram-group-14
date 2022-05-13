<div class="search-bar" method="GET">
            <input type="text" placeholder="Search InstaKilogram..." class="searchInput">
            <button id="search-btn" type="submit"><i class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
</div>

<script>
let button = document.querySelector("#search-btn");
let searchValue = document.querySelector('#searchInput')
  button.addEventListener("click", function() {
    let selected_value = searchValue.value;
    location.href = "adminSearch.php?searchInput=" + selected_value;
  });

  </script>