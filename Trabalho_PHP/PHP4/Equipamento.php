<?php

	namespace Equipamento;

	class Equipamento{
	
		public $ligado;
	
		function liga() {
		 $this->ligado = true;
		}

		function desliga() {
		 $this->ligado = false;
		}
	}


?>
