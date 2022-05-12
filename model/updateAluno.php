<?php 
header("url=view-students.php");
require_once("../model/dbConfig.php");

$nome = strval($_POST["nome"]);
$matricula = strval($_POST["matricula"]);
$curso = strval($_POST["curso"]);
$endereco = strval($_POST["endereco"]);
$roll = $_POST["roll"];

if($nome){
    $sql = "update Alunos set nome=\"$nome\" where id='{$roll}'";
    $ret = $db->exec($sql);
    if(!$ret) {
        echo $db->lastErrorMsg();
     }
}
if($matricula){
    $sql = "update Alunos set matricula=\"$matricula\" where id='{$roll}'";
    $ret = $db->exec($sql);
    if(!$ret) {
        echo $db->lastErrorMsg();
     }
}
if($curso){
    $sql = "update Alunos set curso=\"$curso\" where id='{$roll}'";
    $ret = $db->exec($sql);
    if(!$ret) {
        echo $db->lastErrorMsg();
     }
}
if($endereco){
    $sql = "update Alunos set endereco=\"$endereco\" where id='{$roll}'";
    $ret = $db->exec($sql);
    if(!$ret) {
        echo $db->lastErrorMsg();
     }
}
if(($db->changes())>0){
    echo $db->changes(), "\n Registro(s) feito(s) com sucesso!\n";
} else {
    echo "Nenhuma mudança registrada.";
}

?>
   <a href="../view/studentsView.php" class="btn btn-link">
	   Voltar
	</a>