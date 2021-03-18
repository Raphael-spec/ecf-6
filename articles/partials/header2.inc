<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>  
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="../assets/js/script1.js" async ></script>
 <link rel="stylesheet" href="style.css">

</head>
<body style="background: linear-gradient(#e66465, #9198e5);">
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="index.php"><img src="assets/images/news.png" alt="" width="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" 
    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-dark " aria-current="page" href="index.php"><i class="fas fa-home"></i>ACCUEIL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="apropos.php"><i class="fas fa-bullhorn"></i>A PROPOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark " href="contact.php"><i class="fas fa-id-card-alt"></i>CONTACT</a>
        </li>

      </ul>
    </div>
          <div class="nav-item dropdown border border-light mr-5" style='margin-right:200px'>
          <?php if(isset($_SESSION['auth'])){ ?>

            <a class="nav-link dropdown-toggle text-primary " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
<?= $_SESSION['auth']['login'] ?>
            <?php } ?>

            </a>
            <ul class="dropdown-menu mr-5" aria-labelledby="navbarDropdownMenuLink" >
          <?php if(isset($_SESSION['auth']) && $_SESSION['auth']['role']==1){ ?>
              <li><a class="dropdown-item" href="inscription.php">Inscription</a></li>
          <!--<li><a class="dropdown-item" href="index.php">Connexion</a></li>-->
            <?php } ?>
              <li><a class="dropdown-item" href="logout.php">Déconnexion</a></li>
            </ul>
        </div>
  </div>
</nav>
</header