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
      <div class="search-bar">
                  <input type="text" placeholder="Search InstaKilogram..." id="searchInput">
                  <button onclick="redirect()">Click me</button>
      </div>
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
  </nav>
</header>
