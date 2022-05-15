<script src="../script/searchFunction.js"></script>

<header id="header-section">
  <nav>
      <div>
      <div class="header-logo">
                  <?php $logoLink = 'adminPage.php' ?>
                  <a href=" <?php echo $logoLink ?>">
                      <h1>InstaKilogram</h1>
                  </a>
              </div>
      </div>
      <div class="search-bar" method="GET">
                  <input type="text" placeholder="Search InstaKilogram..." id="searchInput">
                  <button onclick="redirect()" id="search-btn" type="submit"><i class="icon-style fa-lg fa-solid fa-magnifying-glass"></i></button>
      </div>
  </nav>
</header>
