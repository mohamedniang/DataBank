
	function getInfo(){
		$.post('ajax/getInfo.php',function(data){
			$('.info-box').html(data);
		});
	}
	setInterval(getInfo,2000);


	function verifBoutonsRadio(){ 
    for(i=0; i<document.formListe.check.length; i++){
        if(document.formListe.check[i].checked){ 
            return true; // Si on a trouvé une valeur, inutile de continuer
        }
    }
    // Si on arrive ici, c'est qu'aucune case n'est cochée
    alert('Veuillez choisir une ligne!');
    return false;
}



function met(btn,champ1,champ2,champ3) 
{ 
 if (btn.checked) 
   { 
    document.getElementById(champ1).style.display="inline"; 
    document.getElementById(champ2).style.display="none"; 
    document.getElementById(champ3).style.display="none"; 
   } 
 else if (btn.checked) { 
    document.getElementById(champ1).style.display="none"; 
    document.getElementById(champ2).style.display="display"; 
    document.getElementById(champ3).style.display="none"; 
 }else { 
    document.getElementById(champ1).style.display="none"; 
    document.getElementById(champ2).style.display="none"; 
    document.getElementById(champ3).style.display="display"; 
   }  
} 

function btmeet(){
    if (btn.checked) 
   { 
    document.getElementById(champ1).style.display="inline"; 
    document.getElementById(champ2).style.display="none"; 
    document.getElementById(champ3).style.display="none"; 
   }
} 

function btmeet(){
    if (btn.checked) 
   { 
    document.getElementById(champ1).style.display="inline"; 
    document.getElementById(champ2).style.display="none"; 
    document.getElementById(champ3).style.display="none"; 
   }
}