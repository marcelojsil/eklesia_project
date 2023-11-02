<?php
include("../../config.php");
?>

<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $title ?></title>
</head>
<body>

<!--BOOTSTRAP NAVBAR-->
<nav class="">
<div class="">
  <a class="" href="#">CADASTRO</a>
  <button class="" type="button">
    <span class=""></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Index</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Novo Usuario</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=lista">Listar Usuarios</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>


<!--ÁREA DE ABERTURA DAS PAGES-->
<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
                include_once("config.php");
                switch(@$_REQUEST["page"]){
                    case "novo";
                        include("novo-usuario.php");
                        break;
                    case "lista";
                        include("lista-usuario.php");
                        break;
                    case "salvar";
                        include("salvar-usuario.php");
                        break;
                    case "editar";
                        include("editar-usuario.php");
                        break;
                    default:
                        print "<h1>BEM VINDOS!</h1>";
                }
            ?>
        </div>
    </div>
</div>

  <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>