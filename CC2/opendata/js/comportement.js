$(document).ready(init);

function init() {

    url = 'http://opendata.paris.fr/api/records/1.0/search?dataset=stations-velib-disponibilites-en-temps-reel&facet=banking&facet=bonus&facet=status&facet=contract_name'
    envoiAjax(url, 'liste').done(traitement);

}

function envoiAjax(url, param) {
    //requête ajax pour récupérer les données
    return $.ajax({
            url: url,
            type: 'GET',
            dataType: "jsonp",
            beforeSend: showLoadingImgFn(param)
        })
        .always(function () {
            $("." + param).find("img").remove();
        })
    //traîtement en cas d'erreur
        .fail(function () {
            alert("Erreur");
        });
}

function traitement(data) {

    console.log(data);
    $.each(data.records, function (i, item) {
        var popup = L.popup()
            .openOn(map);;

    });

}

function showLoadingImgFn(param) {
    $("." + param).append("<img src='img/ajax-loader.gif' alt='Loading' />");
}

//De toute façon ça ne marche pas