<?php
    header("url=../view/studentsView");
    require_once("../model/dbConfig.php");
    require_once("../view/navbar.php");
?>
<div class="container">
    <h3 class="page-title">Editar Aluno
        <a href="../view/studentsView.php" class="btn btn-success float-right">
            Lista de Alunos
        </a>
    </h3>
        <?php
            $roll = $_GET["roll"];
            $sql ="Select * from Alunos where id=$roll";
            $ret = $db->query($sql);
            $row = $ret->fetchArray(SQLITE3_ASSOC);
        ?>
    <form action="../model/updateAluno.php" method="post">
        <input type="hidden" name="roll" value="<?="{$row["id"]}"?>">
        <div class="form-group">
            <label>Matrícula do Aluno</label>
            <input type="text" class="form-control" name="matricula" value="<?=$row["matricula"]?>">
        </div>
        <div class="form-group">
            <label>Nome do Aluno</label>
            <input type="text" class="form-control" name="nome" value="<?=$row["nome"]?>">
        </div>
        <div class="form-group">
            <label>Curso do Aluno</label>
            <input type="text" class="form-control" name="curso" value="<?=$row["curso"]?>">
        </div>
        <div class="form-group">
            <label>Endereço do Aluno</label>
            <input type="text" class="form-control" name="endereco" value="<?=$row["endereco"]?>">
        </div>
        <button type="submit" class="btn btn-danger">Salvar</button>
    </form>
</div>
</body>
</html>