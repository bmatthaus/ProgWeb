<?php

	include 'Equipamento.php';
	include 'EquipamentoSonoro.php';

	$equip1 = new \Equipamento_Sonoro\EquipamentoSonoro();
	$equip1->liga();
	$equip1->mono();

	$equip2 = new \Equipamento_Sonoro\EquipamentoSonoro();
	$equip2->liga();
	$equip2->setVolume(8);	
	$equip2->stereo();

	function exibir($e){
		 
	 echo "{<br>\n";
	 if($e->ligado == 1)
	  echo 'Ligado: True' . "<br>\n";
	 else
	  echo 'Ligado: False' . "<br>\n";  
	  
	 if($e->stereo == 1)
	  echo 'Stereo: True' . "<br>\n";
	 else
	  echo 'Stereo: False' . "<br>\n";  
	 
	 echo 'Volume: ' . $e->volume . "<br>\n";
	 echo ("}") . "<br>\n<br>\n";
	}

	exibir($equip1);
	exibir($equip2);


?>
