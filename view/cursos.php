<?php   
    require_once("../model/dbConfig.php");
    require_once("./navbar.php");
?>
<div class="container">
    <h3 class="page-title">Classificação de Cursos</h3>
    <table class="table table-bordered table-s">
        <th>Nome do Curso</th>
        <th>Número de Alunos Matrículados</th>
    <?php
        $cont ="SELECT curso, COUNT(*) FROM Alunos GROUP BY curso";
        $ret = $db->query($cont);
        while($row = $ret->fetchArray(SQLITE3_ASSOC)){
    ?>
        <tr>
            <td><?=$row["curso"];?></td>
            <td><?=$row["COUNT(*)"];?></td>
        </tr>
    <?php
        }
    ?>
</table>
</div>

