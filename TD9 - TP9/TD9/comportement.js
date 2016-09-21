$(document).ready(init) ;


//Initialisation des fonctions que l'ont va utiliser
function init() {
   $('#exo1').click(modification1) ;
   $("#exo2").click(modification2) ;
   $("#exo3").click(modification3) ;
   $("#exo4").click(modification4) ;
   $("#exo5").click(modification5) ;
   //$("#click6").click(modification6) ;
}

function modification1() {
    $('#modify').load('exo1.html') ;
}

function modification2() {
    $.get("exo2.php", {nom: "Fruchard", prenom: "Manon"}, function(data) {
        $('#modify').html(data) ;
    }) ;
}

function modification3() {
    $.ajax({
            url: 'exo3.php',
            type: 'GET',
            data: {nom: 'Falafelle', prenom: 'Kebab'},
            timeout: 1000,
            success: function(data) {
                $('#modify').html(data);
            }
        });
}

function modification4() {
$.ajax({
        type: "GET",
        url: "playlist.xml",
        dataType: "xml",
        success: function (data) {
			alert ('fichier chargé');
            var html = "<table>";
            $(data).find('track').each(function () {
				html += "<tr>";
                var title = $(this).find('title').text();
                var creator = $(this).find('creator').text();
                var location = $(this).find('location').text();
                html += "<td>"+ creator +" </td>";
				html += "<td>"+ title +" </td>";
				html += "<td>"+ location +" </td>";
				html += "</tr>";
				
            });
			html += "</table>";
            $("#modify").html(html);
        }
    });
}

function modification5() {
  $.ajax({
        type: "GET",
        url: "contenu.php",
        dataType: "php",
        success: function (data) {
			alert ('fichier chargé');
            var html = "<table>";
            $(data).find('track').each(function () {
				html += "<ul>";
                var title = $(this).find('tnom').text();
                var creator = $(this).find('prenom').text();
                html += "<li>"+ creator +" </li>";
				html += "<li>"+ title +" </li>";
				html += "<li>"+ location +" </li>";
				html += "</ul>";
				
            });
			html += "<table>";
            $("#modify").html(html);
        }
    });
} 