<?php
require_once("../model/dbConfig.php");
$nome = strval($_POST["nome"]);
$matricula = strval($_POST["matricula"]);
$curso = strval($_POST["curso"]);
$endereco = strval($_POST["endereco"]);

if(!$matricula||!$curso||!$endereco||!$endereco){
   echo "Registro não efetuado, Dados nulos.\n";
?>

   <a href="../view/studentsView.php" class="btn btn-link">
	   Voltar
	</a>

<?php
}else {
   $sql = "Insert into Alunos(id,nome,matricula,curso,endereco)
   values(NULL,\"$nome\",\"$matricula\",\"$curso\",\"$endereco\")";

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Registro feito com sucesso!\n";
   }
?>
   <a href="../view/studentsView.php" class="btn btn-link">
	   Voltar
	</a>
<?php
}
?>
