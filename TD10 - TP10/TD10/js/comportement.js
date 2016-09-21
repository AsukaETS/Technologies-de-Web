$(document).ready(init);

function init() {
envoiAjax("http://odata.bordeaux.fr/v1/databordeaux/parcjardin/?format=json", "bordeaux").done(function(data){
        console.log(data.d[0].nom_espace_entretien);
        $.each(data.d, function(i, item) 
        {
            $("ul").append("<li class='"+data.d[i].cle +"'>"+data.d[i].nom_espace_entretien +"</li>");
            map.addMarker
            ({
                lat: data.d[i].y_lat, 
    lng: data.d[i].x_long,
                title:data.d[i].nom_espace_entretien,
                mouseover: function(e)
                {
                    $("."+data.d[i].cle).toggleClass('rouge');
                },
                mouseout: function(e)
                {
                    $("."+data.d[i].cle).toggleClass('rouge');
                }
            })
        }
)});
    


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

function showLoadingImgFn(param) {
    $("."+param).append("<img src='img/ajax-loader.gif' alt='Loading' />");
}
function traitement(data)
{
 console.log(data);
}

    
map=new GMaps({
 div:'#carte',
 lat:44.8484400,
 lng:-0.5805000
});
        envoiAjax("https://api.flickr.com/services/feeds/photos_public.gne?tags= larochelle &tagmode=any&format=json&jsoncallback=?", "flickr").done(function(data) {
        console.log(data.items[0].media.m);
            
                $.each(data.items,function(k,v) {
                    $("<img>").attr("src", v.media.m).appendTo("section.image");
    });

    $("section.image").owlCarousel();
    });
}

