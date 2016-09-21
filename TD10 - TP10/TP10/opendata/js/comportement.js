$(document).ready(init);

function init() {
    
    url='http://opendata.paris.fr/api/records/1.0/search?dataset=liste-des-cafes-a-un-euro&rows=185&facet=arrondissement'
    envoiAjax(url,'liste').done(traitement);
    
}

function envoiAjax(url,param) {
    return $.ajax({
        url : url,
        type : 'GET',
        dataType : "jsonp",
        beforeSend : showLoadingImgFn(param)
    })
        .always(function() {
        $("."+param).find("img").remove();
    })
        .fail(function() {
        alert("Erreur");
    });
}

function traitement(data){
  
   console.log(data);
   $.each(data.records, function(i, item){
        $('ul.nomcafe').append("<li id='"+data.records[i].fields.arrondissement+"'>'"+data.records[i].fields.nom_du_cafe+"'</li>");
      
    });
        
}

function showLoadingImgFn(param) {
     $("."+param).append("<img src='img/ajax-loader.gif' alt='Loading' />");
}