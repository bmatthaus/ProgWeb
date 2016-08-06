<?php

	$usuario = "root";
	$senha = "";
	$nome   = $_GET['nome'];	
	$sexo   = $_GET['sexo'];	
	$coments = $_GET['coments'];	

	try{

	 $conn = new PDO("mysql:host=localhost;dbname=gomoku", $usuario, $senha);
	 print("Conexao OK!");

	 $conn->exec("set names utf8");
	 $stmt = $conn->prepare('INSERT INTO comentario (nome,sexo,comentarios) VALUES (:nome,:sexo,:coments)');

	 $stmt->bindValue(':nome',$nome);
	 $stmt->bindValue(':sexo',$sexo);
	 $stmt->bindValue(':coments',$coments);

	 $stmt->execute();

	}

	catch(PDOException $e){
 	 echo $e->getMessage();	

	}

?>
