(function ($) {
    $.fn.menu = function (options) {
        var param = {
            "vitesseSlideUp": "slow",
            "vitesseSlideDown": "fast",
            "nameSousListe": "sousListe",
            "colorFond": "#FD6C9E",
            "colorText": "#000000",
            "callback": null
        };

        return this.each(function () {

            //cache toutes les sousListes
            $("." + param.nameSousListe).hide();
            //on survol d'un a
            $(this).find("a").mouseover(function () {
                $(this).parent().siblings().find('.' + param.nameSousListe + ':visible')
                    .slideUp(param.vitesseSlideUp);
                $(this).parent().find('ul').slideDown(param.vitesseSlideDown);
            });

            if (param.callback) {
                console.log("fonction de callback" + param.callback(data));
            }

        });
    }
})(jQuery);