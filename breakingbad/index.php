<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="imagens/logo.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Breaking Bad </title>
    <base href="http://localhost/breakingbad/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-targed="#navbarSupportedContent"aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="home">
          Home
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="personagens">
          Personagens
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="episodios">
        Episódios
        </a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="citacoes">
            Citações
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mortes">
            Mortes
        </a>
      </li>
    </ul>
    <form class="d-flex" role="procurar">
      <input class= "form-control me-2" type="procurar" placeholder="Procurar"aria-label="Procurar">
      <button class="btn btn-success" type="Submit">
        Procurar          
    </button>
    </form>
    </div>
</nav>
<?php 
include "config.php";
$pagina = $_GET["param"] ?? "home";

if ( isset( $_GET["param"])) {
  $param = $_GET["param"];
  $param = explode("/", $param);
  $pagina = $param[0];
  $id = $param[1] ?? NULL;
}

$pagina = "paginas/{$pagina}.php";

if ( file_exists($pagina)) {
  include $pagina;
} else {
  include "paginas/erro.php";
}
?>
 <p>
<hr>
 Desenvolvido por Ellen Dias
 <hr>
 </p>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>