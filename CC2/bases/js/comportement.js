$(document).ready(init);

function init() {

    //EXERCICE 1
    $("p").css("color", "#eee"); //Couleur du texte 
    $("p").css("background-color", " #e2b745"); //Background du texte

    //Fonction pour faire apparaître du texte
    $(".more").click(function (e) {
        $(this).append("<p>Début du TP.</p>")
    });


    //EXERCICE 2
    $("#ex2 li").wrap('<span></span>').addClass("un").append("  1  ");
    $("#ex2 li").wrap('<span></span>').addClass("deux").append("  2   ");
    //Selection de tous les li contenus dans ex2, wrap avec des balises span puis ajout de la classe "un" et "deux et enfin ajout du texte
    
    //EXERCICE 3
//Ne marche pas, revenir dessus plus tard
    
    //EXERCICE 4
    $.ajax({
			type: "POST",
			url: "donnees/donnees.php",
			data: retour ,
			dataType: 'script'
		});
//Ne marche pas, revenir dessus plus tard
    
    }