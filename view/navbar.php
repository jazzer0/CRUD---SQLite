<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Alunos</title>
        <link rel="stylesheet" href="../view/css/bootstrap.min.css">
        <link rel="stylesheet" href="../view/css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--Barra de Navegação -> https://bootswatch.com/simplex/-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD de Alunos</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="../view/index.php">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Lista de Alunos</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../view/studentsView.php?order=<?="0"?>">Ordenar por Id</a>
            <a class="dropdown-item" href="../view/studentsView.php?order=<?="1"?>">Ordenar por Nome</a>
            <a class="dropdown-item" href="../view/studentsView.php?order=<?="2"?>">Ordenar por Curso</a>
            <a class="dropdown-item" href="../view/studentsView.php?order=<?="3"?>">Ordernar por Matrícula</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../view/cursos.php">Cursos</a>
        </li>
      </ul>
      <form class="d-flex" action="../controller/search.php">
        <input class="form-control me-sm-2" type="text" placeholder="Pesquisar">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
    </div>
  </div>
</nav>
        <!--Barra de Navegação-->
    </body>
</html>