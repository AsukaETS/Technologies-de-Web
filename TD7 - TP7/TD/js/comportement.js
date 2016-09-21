$(document).ready(init) ;

function init() {
    exo1_1() ;
    exo1_2() ;
    exo2_1() ;
    exo2_2() ;
    exo2_3() ;
    exo2_4() ;
    exo3_1() ;
    exo3_2() ;
    exo3_3() ;
}

function exo1_1() {
    $("#select1 span").addClass("relief") ;
}

function exo1_2() {
   $("#select2 span.option").fadeOut(2000) ; 
}

function exo2_1() {
    $("#ex1_1").click(function(e){
    $(this).find(":first").hide() ;    
    } ) ;
    $("#Reaff1").click(function(e){
        $("#ex1_1 li").show();
    } ) ;
}

function exo2_2() {
    $("#ex1_2 li").click(function(e){
        $(this).hide();
    } ) ;
    $("#Reaff2").click(function(e){
        $("#ex1_2 li").show();
    } ) ;
}

function exo2_3() {
    $("#ex1_3 li").click(function(e){
        var maClasse = $(this).attr("class");
        console.log(maClasse);
        $("#ex1_3 li."+maClasse).hide();
    });
    $("#Reaff3").click(function(e){
        $("#ex1_3 li").show();
    });
}

function exo2_4() {
    $("#ex1_4 li").click(function(e){
        var maClasse = $(this).attr("class");
        console.log(maClasse);
        $("#ex1_4 li."+maClasse).addClass("relief");
    });
    $("#Reaff4").click(function(e){
        $("#ex1_4 li").removeClass("relief");
    });
}

function exo3_1() {
    $("#ulEx1").click(function(e){
        $(this).find(":first").insertAfter('#ulEx1 li:eq(3)');
    })
}

function exo3_2() {
    $("#ulEx2 li").click(function(e){
        $(this).insertAfter('#ulEx2 li:eq(3)');
    })
}

function exo3_3() {
    $("#olEx3 li").click(function(e){
        var ind = $(this).index();
        $(this).insertBefore('#olEx3 li:eq('+(ind-1)+')');
    });
}