$(document).ready(init);

function init() {
    bestbd();
}

function envoiAjax(url, param) {
    return $.ajax({
            url: url,
            type: 'get',
            dataType: 'jsonp',
            beforeSend: showLoadingImgFn(param)
        })
        .always(function () {
            $(param).find('img').remove();
        })
        .fail(function () {
            alert("erreur");
        });
}

function showLoadingImgFn(param) {
    $(param).append("<img src='img/ajax-loader.gif' alt='gif_loader' />");
}

function bestbd() {
    var url = 'http://opendata.paris.fr/api/records/1.0/search?dataset=les-titres-les-plus-pretes&sort=nombre_de_prets&facet=support&facet=auteur&rows=5&refine.support=Bande+dessin%C3%A9e+adulte';
    envoiAjax(url, "section#bestBd").done(function (data) {
        console.log(data);
        $.each(data.records, function (k, v) {
            $("section#bestBd ul").append("<li data-auteur='" + v.fields.auteur + "'>" + v.fields.titre + ' ' + v.fields.auteur + ' ' + v.fields.nombre_de_prets + "</li>");
        });
    });
}

function formulaire() {
    var auteur = document.nomauteur.nom.value;
    $("section#listeBd h2 span").remove();
    $("section#listeBd ul li").remove();
    $("section#listeBd h2").append('<span> ' + auteur + '</span>');
    listebd(auteur);
}

function listebd(auteur) {
    url = 'http://opendata.paris.fr/api/records/1.0/search?dataset=les-titres-les-plus-pretes&sort=nombre_de_prets';
    var newurl = url + '&q=' + auteur;
    envoiAjax(newurl, "#listeBd").done(function (data) {
        $.each(data.records, function (k, v) {
            $("section#listeBd ul").append("<li data-auteur='" + v.fields.auteur + "'>" + v.fields.titre + ' ' + v.fields.auteur + ' ' + v.fields.nombre_de_prets + "</li>");
        });
    });
}