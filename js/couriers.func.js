
	function getCourier(){
		$.get('ajax/getCourier.php',function(data){
			$('.courier-box').html(data);
		});
	}
	setInterval(getCourier,2000);

	function getMail(){
		$.get('ajax/getMail.php',function(data){
			$('.mail-box').html(data);
		});
	}
	setInterval(getMail,2000);