<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./favicons/favicon-16x16.png">
    <title>Pokedex</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Pokedex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

  <div class="container">
    <div class="row">
      <div class="col mt-5">
      <?php
          include("config.php");
          switch (@$_REQUEST["page"]) {
              case 'novo':
                  include("novo-usuario.php");
                  break;
              case 'listar':
                  include("listar-usuario.php");
                  break;
              case 'salvar':
                  include("salvar-usuario.php");
                  break;
              case 'editar':
                  include("editar-usuario.php");
                  break;
              case 'test-login';
                  include("test-login.php");
                  break;                                          
              default:
                  include("login.php");
          }
      ?>
      </div>
    </div>
  </div>

    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>
