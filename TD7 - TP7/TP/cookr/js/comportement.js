$(document).ready(init);

function init() {
    alert("WESH ZOULETTE U WANA SOM CUKIZ ?");

//$("#image1").width("200px");
//$("img").width("200px");
//$("img").addClass("discrete");
    
    $("article p img").addClass("discrete");
    ecouteurImage();
}

/*  4a  */
/*function ecouteurImage1() {
    $("#image1").click(rendreVoyante);
}
function rendreVoyante() {
    $(this).attr("class","voyante");
}*/

/*  4b  */
/*function ecouteurImage() {
    $("img").click(rendreVoyante);
}
function rendreVoyante() {
    $(this).attr("class","voyante");
}*/

/*  4c  */
function ecouteurImage() {
    $("img").addClass("discrete");
    $("img").click(rendreVoyante);
}
function rendreVoyante() {
    var executed = false;
    $("img").addClass("discrete");
    $("img").click(function(e){
        if(!executed){ 
        $(this).attr("class","voyante");
            executed = true;
        }
    });
}