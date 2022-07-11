<?php 

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

var_dump($results);




/*CREATE TABLE tb_usuarios (
idusuario INT NOT NULL IDENTITY PRIMARY KEY,
deslogin VARCHAR (64) NOT NULL,
dessenha VARCHAR (256) NOT NULL,
dtcadastro DATETIME NOT NULL DEFAULT GETDATE()
);

SELECT * FROM tb_usuarios;

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES ('user', '!@#$');*/


 ?>