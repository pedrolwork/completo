<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 6;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK";
 ?>