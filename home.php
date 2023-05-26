<?php
    session_start();
    include_once('config.php');
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: index.php?page=login');
    }
    $logado = $_SESSION['email'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result =$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="icon" href="./favicons/favicon-16x16.png">
    <link rel="stylesheet" href="./css/style.css">

  <!-- Main JS -->
  <script defer src="./js/script.js"></script>

  <title>Pokédex</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#">Pokedex</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
    </nav>
    <main>
    <img src="#" alt="pokemon" class="pokemon__image">

    <h1 class="pokemon__data">
      <span class="pokemon__number"></span> -
      <span class="pokemon__name"></span>
    </h1>

    <form class="form">
      <input
        type="search"
        class="input__search"
        placeholder="Nome ou Numero do Pokemon"
        required
      />
    </form>

    <div class="buttons">
      <button class="button btn-prev">Anterior &lt;</button>
      <button class="button btn-next">Próximo &gt;</button>
    </div>

    <img src="./images/pokedex.png" alt="pokedex" class="pokedex">
  </main>
</body>
</html>