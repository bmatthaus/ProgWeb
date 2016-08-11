<?php

	namespace Equipamento_Sonoro;

	final class EquipamentoSonoro extends \Equipamento\Equipamento{

		public $volume;
		public $stereo;
		

		function mono(){
		 $this->stereo = false;
		}
		
		function stereo(){
		 $this->stereo = true;
		}
		
		function setVolume($vol){
		 if($vol >= 0 || $vol<=10)
		  $this->volume = $vol;
		}

		function liga(){
		 parent::liga();
		 $this->volume = 5;
		}		
		
	}

	


?>
