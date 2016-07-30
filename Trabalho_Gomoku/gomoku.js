var vez = 1;
var termino = 0;
var vezjog = document.getElementById(jogvez);

var matriz = 
[
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],
    [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]

];

function play(coord,linha,coluna){


	var linha2 = linha-1;
	var coluna2 = coluna-1;

	var lugar = document.getElementById(coord);	
		

	if(matriz[linha2][coluna2] == 0 && termino == 0){
	


		if(vez == 1){
			lugar.src = "1.gif";
			matriz[linha2][coluna2] = 1;
			checar(vez,linha2,coluna2);
			vez = 2;
			jogvez.src = "2.gif";
		}else{
			lugar.src = "2.gif";
			matriz[linha2][coluna2] = 2;
			checar(vez,linha2,coluna2);
			vez = 1;
			jogvez.src = "1.gif";
		 }
	}
			
}




function checar(jogador,linha,coluna){

var cont = 0;
var i = 0;

	//checar horizontal

	cont = 0;	
	for(i=0;i<15;i++){
	 if(matriz[linha][i] == jogador)
	  cont++;
	 else
	  cont = 0;
	 if(cont == 5){
	  termino = 1;
	  alert("O jogador "+ jogador +" venceu!!"); 
	  return;
	 }
	}
	
	//checar vertical

	cont = 0;
	for(i=0;i<15;i++){
	 if(matriz[i][coluna] == jogador)
	  cont++;
	 else
	  cont = 0;
	 if(cont == 5){
	  termino = 1;
	  alert("O jogador "+ jogador +" venceu!!"); 
	  return; 
	 }
	}

	//checar diagonal principal

	cont = 0;
	i = linha;
	j = coluna;

	while(i!=0 && j!=0){
	 i--;
	 j--;
	}

	while(i!=15 && j!=15){
	 if(matriz[i][j] == jogador)
	   cont++;
	  else
	   cont = 0;
	  if(cont == 5){
	   termino = 1;
	   alert("O jogador "+ jogador +" venceu!!"); 
	   return; 
	  }
	 i++;
	 j++;
	}


	//checar diagonal secundaria

	cont = 0;
	i = linha;
	j = coluna;

	while(i!=0 && j!=14){
	 i--;
	 j++;
	}

	while(i!=15 && j!=-1){
	 if(matriz[i][j] == jogador)
	   cont++;
	  else
	   cont = 0;
	  if(cont == 5){
	   termino = 1;
	   alert("O jogador "+ jogador +" venceu!!"); 
	   return; 
	  }
	 i++;
	 j--;
	}

}



