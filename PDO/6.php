<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$conn->begintransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 5;

$stmt->execute(array($id));

//$conn->rollback():

$conn->commit();

echo "Delete OK";

 ?>