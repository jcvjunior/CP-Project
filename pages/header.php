<?php require 'config.php' ?>
<html>
<head>
  <title>CyberPunk RPG Project</title>
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
  <script type="text/javascript" src="assets/js/jQueryMask/dist/jquery.mask.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
  <script type="text/javascript" src="assets/js/additional-methods.js"></script>
  <script type="text/javascript" src="assets/js/localization/messages_pt_BR"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php if(isset($_SESSION['uLogin']) && !empty($_SESSION['uLogin'])) : ?>
                <li class="nav-item">
                <a href="jogos.php" class="btn btn-primary">Jogos</a>
                </li>

                <?php else : ?>
                <li class="nav-item">
                <a href="cadastrar.php" class="btn btn-primary">Cadastrar</a>
                </li>
                <li class="nav-item">
                <a href="login.php" class="btn btn-primary">Login</a>
                </li>
            <?php endif; ?>
            </ul>
      </form>
    </div>
  </div>
</nav>
    
</body>
</html>