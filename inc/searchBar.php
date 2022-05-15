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
      <div class="search-bar">
            <form method="GET" action="../view/displaySearch.php">
                <input type="text" placeholder="Search InstaKilogram..." id="searchInput" name ="searchInput">
                <button type="submit" name="search-submit" value="Search">Search Button</button>
            </form>

      </div>
  </nav>
</header>

