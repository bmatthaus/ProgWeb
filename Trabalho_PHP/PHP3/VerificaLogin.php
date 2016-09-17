<?php

$login = $_GET['login'];
$senha =$_GET['senha'] ;

if(!empty($login) && !empty($senha)){
	if(($login === "demo") && ($senha ==="demo")){
		session_start();	
		$_SESSION['login']= $login;
		$_SESSION['senha']=$senha;
		header("Location: Script.php");
	
	}else{
		session_destroy();
		
    	unset ($_SESSION['login']);
    	unset ($_SESSION['senha']);	
		echo "<script type='text/javascript'>
			alert('Login ou senha inválidos!Tente novamente');";
		echo  "javascript:window.location='login.php';</script>";      
	}
}else{
	echo "<script type='text/javascript'>
			alert('Preencha os campos!');";
	echo  "javascript:window.location='login.php';</script>";    
}

?>
