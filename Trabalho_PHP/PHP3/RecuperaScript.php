<?php
$nome = $_GET['nome'];
$sexo =$_GET['sexo'];
$comentarios =$_GET['coments'];	
$usuario='root';
$senha='';
	try{
		$conn= new PDO("mysql:host=localhost;dbname=gomoku",$usuario,$senha);
		$conn->exec("set names utf8");
                //print "Conexao realizada com sucesso!!";
   		$sql= $conn->prepare('INSERT INTO comentario(nome,sexo,comentarios) VALUES(:nome,:sexo,:coments)');
		$sql->bindValue(':nome',$nome);
		$sql->bindValue(':sexo',$sexo);
		$sql->bindValue(':coments',$comentarios);
		$sql->execute();
  		echo "Dados inseridos com sucesso"; 
		//header("Location: outrapag.php");
		
	
	}catch(PDOException $e){
    		echo $e->getMessage();
	}
	
?>