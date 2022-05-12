<?php 
header('url=view-students.php');
require_once("../model/dbConfig.php");

$roll = $_GET['roll'];

$sql ="delete from Alunos where id=$roll ";
   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo $db->changes(), "Aluno deletado com Sucesso!\n";
   }
   ?>
   <a href="../view/studentsView.php" class="btn btn-link">
	   Voltar
	</a>