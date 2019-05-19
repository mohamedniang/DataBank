$(document).ready(function() {
    // POUR MODIFIER UN DOCUMENT
    var btn = $('#modifier').val();
    var code = document.getElementById('M')

    function ouvreModale(code) {
        // e.preventDefault();
        // $('#modal_info').slideDown();
        // $('#mask').css('display', 'block');
        // $(window).scrollTop(0);
        // //Ici le contenu affiché en fonction de l'ID entré en paramètre
        // if(pId == 65){
        // 	$('#modal_info').html('mon texte pour l ID 65');
        // }
        $('button').addClass('alert-warning');
    }

    // POUR DISPLAY LE CONTENU DU FORUM : REPONSES
    $(".reponse").siblings().hide();

    $(".reponse").click(function() {
        $(this).siblings().toggle();
        var titre = document.getElementById('reponse');
        titre.innerHTML = "Lire";
    });
});



function met(btn, champ1, champ2, champ3) {
    if (btn.checked) {
        document.getElementById(champ1).style.display = "grid";
        document.getElementById(champ2).style.display = "none";
        document.getElementById(champ3).style.display = "none";
    } else if (btn.checked) {
        document.getElementById(champ1).style.display = "none";
        document.getElementById(champ2).style.display = "display";
        document.getElementById(champ3).style.display = "none";
    } else {
        document.getElementById(champ1).style.display = "none";
        document.getElementById(champ2).style.display = "none";
        document.getElementById(champ3).style.display = "display";
    }
}

function mets(btn, champ1, champ2, champ3, champ4) {
    if (btn.checked) {
        document.getElementById(champ1).style.display = "grid";
        document.getElementById(champ2).style.display = "none";
        document.getElementById(champ3).style.display = "none";
        document.getElementById(champ4).style.display = "none";
    } else if (btn.checked) {
        document.getElementById(champ1).style.display = "none";
        document.getElementById(champ2).style.display = "display";
        document.getElementById(champ3).style.display = "none";
        document.getElementById(champ4).style.display = "none";
    } else if (btn.checked) {
        document.getElementById(champ1).style.display = "none";
        document.getElementById(champ2).style.display = "none";
        document.getElementById(champ3).style.display = "display";
        document.getElementById(champ4).style.display = "none";
    } else {
        document.getElementById(champ1).style.display = "none";
        document.getElementById(champ2).style.display = "none";
        document.getElementById(champ3).style.display = "none";
        document.getElementById(champ4).style.display = "display";
    }
}