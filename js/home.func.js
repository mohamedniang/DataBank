/*$(document).ready(function(){

	// PARTAGE DE NOUVEAU SUJETS DE DISCUSSION
	$('#submit').click(function(){
		var SUJET = $('#SUJET').val();
		var EMAIL = $('#EMAIL').val();
		var noti = document.getElementById('notification');

		if (SUJET != "" && EMAIL != "") {
			$.post('ajax/postHome.php',{SUJET:SUJET,EMAIL:EMAIL},function(){
				
				$('#SUJET').val("");
				// $('#EMAIL').val("");
			});

		}else{
  			noti.innerHTML = "<div class='alert alert-info' role='alert'><strong>Veuillez remplir tous les champs slvp!</strong></div>";
		}
	});


	// REPONSE AUX SUJETS DE DISCUSSION
	$('.discussion').click(function(){
		var IDSUJET = $('.IDSUJET').val();
		var MAIL = $('.MAIL').val();
		var DISCUSSION = $('.DISCUSSION').val();
		var notif = document.getElementsByClassName('notifications');

		if (MAIL != "" && DISCUSSION != "") {
			$.post('ajax/postHome.php',{IDSUJET:IDSUJET,DISCUSSION:DISCUSSION,MAIL:MAIL},function(){
				
				$('.DISCUSSION').val("");
				// $('#MAIL').val("");
			});
		}else{
			notif.innerHTML = "<div class='alert alert-info' role='alert'><strong>Veuillez remplir tous les champs slvp!</strong></div>";
		}
	});


	// FONCTION DE RECUPERATION DE DONNEES DE DISCUSSION
	function getForum(){
		$.get('ajax/getHome.php',function(data){
			$('.discussion-box').html(data);
		});
	}
	setInterval(getForum,5000);
});
*/

// change the class when it get hovered .
// $('.filliere-section .photoList .photoElt a img').click(() => {
//     console.log("initiale class = " + $(this).attr('class'));
//     if ($(this).attr('class') == "photoElt") {
//         $(this).attr('class', $(this).attr('class') + " fadeOut animated");
//     } else {
//         $(this).attr('class', "photoElt");
//     }
//     console.log($(this).attr('class'));
// });