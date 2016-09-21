$(document).ready(init) ;

function init() {
    /*ecMouseEnter() ;
    ecMouseLeave() ;*/
    ecVideo() ;
}

/*function ecMouseEnter() {
    $("li a.premiereImage").mouseenter(function(e){
        $(this).hide();
    } ) ;
}

function ecMouseLeave() {
    $("li a.premiereImage").mouseleave(function(e){
        $(this).show();
    } ) ;
}*/

function ecVideo() {
    $(".over-video").each(function (e){
        $(this).mouseenter(function(){
            $(this).find("img").hide();
            $(this).addClass("affiche");
        });
        $(this).mouseleave(function(){
            $(this).find("img").show();
            $(this).removeClass("affiche");
        });
    }) ;
}