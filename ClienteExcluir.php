<?php
$idexcluir = $_GET['idexcluir'];
 
include "conexao.php";
 
$sql = "delete from login where id=$idexcluir";
$resultado = mysqli_query($conexao, $sql);
 
 
header('Location:ClienteListar.php');
?>