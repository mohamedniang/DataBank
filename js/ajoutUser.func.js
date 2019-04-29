
	function getUtilisateur(){
		$.post('ajax/getUtilisateur.php',function(data){
			$('.user-box').html(data);
		});
	}
	setInterval(getUtilisateur,1000);
