<?php

	$usuario = "root";
	$senha = "my123";

	$nome   = $_GET['nome'];	
	$sexo   = $_GET['sexo'];	
	$coment = $_GET['coments'];	


	try{
	 $conn = new PDO("mysql:host=localhost;dbname=gomoku", $usuario, $senha);
	 print("Conexao OK!");
	 $conn->exec("set names utf8");

	 $stmt = $conn->prepare('insert into comentario (nome,sexo,comentarios) values (:nome,:sexo,:coments)');

	 $stmt->bindValue(':nome',$nome);
	 $stmt->bindValue(':sexo',$sexo);
	 $stmt->bindValue(':coments',$coment);

	 $stmt->execute();

	}
	catch(PDOException $e){
 	 echo $e->getMessage();	
	}


?>
