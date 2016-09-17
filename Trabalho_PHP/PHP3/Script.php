<?php

session_start();

if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {

    session_destroy();
    
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);  
    header('location:login.php');
}

?>

<html>
<head>
<title></title>
<meta charset ="utf-8">
</head>
<body>

  <h1> "Este e um grande cabecalho </h1>
	<h3> "Este e um pequeno cabecalho </h3>
	<h5> Aqui eu coloquei um paragrafo com algum texto aleatorio, e a seguir vou inserir um formulario dentro de uma tabela. Alem disso, aqui vai um link: <a href = "http://icomp.ufam.edu.br/"> icomp.ufam.edu.br </a> </h5>

<form action="RecuperaScript.php" method="GET">

	Seu nome:
	<input type text name = "nome" size = '15'> 
	</br>

	Seu sexo:
	<select name = "sexo" id = "sexo"> 
	<option value = "masculino"> Masculino </option>
	<option value = "feminino"> Feminino </option> </select>
	</br>

	Comentario:
	</br>
	<textarea name = "coments" rows = "15" cols = "45"> </textarea>
	</br>
	<input type= "submit" name = "Enviar" value="Enviar"></input>

</form>
</body>
</html>
