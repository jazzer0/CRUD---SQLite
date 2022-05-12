<?php
    header("url=../view/studentsView");
    require_once("../model/dbConfig.php");
    require_once("../view/navbar.php");
?>
<div class="container">
    <h3 class="page-title">Adicionar Aluno
        <a href="../view/studentsView.php" class="btn btn-success float-right">
            Lista de Alunos
        </a>
    </h3>
    <form action="../model/salvarAluno.php" method="post">
        <div class="form-group">
            <label>Matrícula do Aluno</label>
            <input type="text" class="form-control" name="matricula">
        </div>
        <div class="form-group">
            <label>Nome do Aluno</label>
            <input type="text" class="form-control" name="nome">
        </div>
        <div class="form-group">
            <label>Curso do Aluno</label>
            <input type="text" class="form-control" name="curso">
        </div>
        <div class="form-group">
            <label>Endereço do Aluno</label>
            <input type="text" class="form-control" name="endereco">
        </div>
        <button type="submit" class="btn btn-danger">Salvar</button>
    </form>
</div>
</body>
</html>