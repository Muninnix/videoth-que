<main class="bg-info">
  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4"><img src="" class="logo-width"></span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="dashboard.php" class="nav-link text-white" aria-current="page">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="create.php" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#createrecord"></use></svg>
           Nouveau Film
        </a>
      </li>
	  
	  <br>
	  
      <li>
        <a href="/" class="nav-link text-white">
          <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Voir le Site
        </a>
      </li>
    </ul>
    <hr>
  </div>

  <!-- CONTENT DASHBOARD ADMIN -->
  <?php include("../includes/delete-adm-content.php"); ?>
</main>