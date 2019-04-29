
// //SAJOUTER UN UTILISATEUR
$('#sendAjoutUser').click(function(){
    var PSEUDO = $('#PSEUDO').val();
    var EMAIL = $('#EMAIL').val();
    var MOTDEPASSE = $('#MOTDEPASSE').val();
//    var sesouvenir = $('#sesouvenir').val();
   // alert('Email : ' + email + 'Mot de passe ' + password);

    if(EMAIL == '' || MOTDEPASSE == '' || PSEUDO == ''){
        alert('Veuillez remplir tous les champs, slvp!');
    }else{
        // alert('Merci, tous les champs sont remplis!');
        $.post('ajax/postUser.php',{PSEUDO:PSEUDO,EMAIL:EMAIL,MOTDEPASSE:MOTDEPASSE},function(){
            $('#PSEUDO').val('');
            $('#EMAIL').val('');
            $('#MOTDEPASSE').val('');
        });
    }
});

