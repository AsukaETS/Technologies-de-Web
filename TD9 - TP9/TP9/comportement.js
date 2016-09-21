$(document).ready(init);

function init() {
    $('#changer').click(function(){
       //$.get('num.php', traiterAjax);
        $.getJSON('TrouverUnTelephone.php', traitement) ;
    });
}



function traiterAjax(data) {
    var numero = data;
    $.get('nom.php', {n:numero}, AffichageNom);
    $.get('commentaire.php', {n:numero}, AffichageCom);
    $.get('photo.php', {n:numero}, AffichagePhoto);
    
}

function AffichageNom(data) {
    $('#modele').html(data) ;
}

function AffichageCom(data) {
    $('#article').html(data) ;
}

function AffichagePhoto(data) {
$('#imgPhone').attr('src', 'Photos/'+data);
}

function traitement(tel) {
    $('#article').html(tel.Commentaire) ;
    $('#modele').html(tel.Nom) ;
    $('#imgPhone').attr('src', 'Photos/'+tel.Photo) ;
    
}

