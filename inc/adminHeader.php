<div >
    <ul class="sign-btn">
        <a href="../view/login.php">
            <li class="btn-item">
                <button class="transparent-btn">Log In</button>
            </li>
        </a>
        <a href="../view/signup.php">
            <li class="btn-item">
                <button class="transparent-btn">Sign Up</button>
            </li>
        </a>
    </ul>
</div>
<div class="search-bar" method="GET">
            <input type="text" placeholder="Search InstaKilogram..." class="searchInput">
            <button id="search-btn" type="submit"><i class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
</div>

<script>
let button = document.querySelector("#search-btn");
let searchValue = document.getElementbyID('#searchInput');
  button.addEventListener("click", function() {
    let selected_value = searchValue.value;
    location.href = "displaySearch.php?searchInput="+selected_value;
  });

  </script>