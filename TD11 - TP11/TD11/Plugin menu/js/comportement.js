$(document).ready(init) ;

function init() {
    $(".menu").menu({
        "callback": function(data){console.log(data);}
    });
    
}