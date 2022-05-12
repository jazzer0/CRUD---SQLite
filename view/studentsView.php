<?php
    require_once("../model/dbConfig.php");
    require_once("./navbar.php");
?>
<div class="container">
    <h3 class="page-title">Lista de Alunos
      <a href="../controller/addAluno.php" class="btn btn-success float-right">
      	Adicionar Aluno
      </a>
	</h3>

    <!--Tabela-->
    <table class="table table-bordered table-s">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Matrícula</th>
            <th>Curso</th>
            <th>Endereco</th>
            <th>Opções</th>
        </tr>
        <?php
            $order = $_GET["order"];
            switch ($order) {
                case 0:
                    $sql ="SELECT * from Alunos ORDER BY id";
                    break;
                case 1:
                    $sql ="SELECT * from Alunos ORDER BY nome";
                    break;
                case 2:
                    $sql ="SELECT * from Alunos ORDER BY curso";
                    break;
                case 3:
                    $sql ="SELECT * from Alunos ORDER BY matricula";
                        break;
                default:
                    $sql ="SELECT * from Alunos ORDER BY id";
            }
            $ret = $db->query($sql);
            while($row = $ret->fetchArray(SQLITE3_ASSOC) ) 
                {
        ?>
                    <tr>
                        <td ><?=$row["id"];?></td>
                        <td><?=$row["nome"];?></td>
	   		            <td><?=$row["matricula"];?></td>
	   		            <td><?=$row["curso"];?></td>
                        <td><?=$row["endereco"];?></td>
	   		            <td>
	   			        <a href="../controller/editAluno.php?roll=<?=$row["id"];?>" class="btn btn-info">
                            Editar
	   			        </a>
	   			        <a href="../controller/deleteAluno.php?roll=<?=$row["id"];?>" class="btn btn-primary">
	   				        Excluir
	   			        </a>
	   		            </td>
	   	            </tr>
      <?php
                }
?>
    </table>
    <!--Fim da Tabela-->
</div>
</body>
</html>