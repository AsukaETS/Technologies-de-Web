(function ($) {
    $.fn.gestionImage = function (options) {
        var defauts = {
            "nb": 4,
            "backgroundColor": "#000",
            "width": 100,
            "height": 100,
            "padding": 10,
            "zoomWidth": 400,
            "zoomHeight": 400
        };
        var param = $.extend(defauts, options);


        return this.each(function () {
            
            $(this).after("<div id=\"poubelle\"></div>");
            $(this).find("li img").css({
                "padding": 8,
            });
            $(this).css({
                "height": 500,
                "width": 500,
                "padding": 10,
                "background-color": "black",
            });
            $(this).after("<div id=\"zoom\"></div>");
            $("#zoom").css({
                "height": 400,
                "width": 400,
            });
            $(this).find("img").draggable({
                revert: true
            });
            $(this).find("img").droppable({
                drop: function (event, ui) {
                    console.log(ui.draggable.attr("src"));
                    console.log($(this).attr("src"));
                    var u = ui.draggable.attr("src");
                    var U = $(this).attr("src");
                    $(this).attr("src", u);
                    ui.draggable.attr("src", U);
                }
            });
            $("#poubelle").droppable({
                drop: function (event, ui) {
                    ui.draggable.remove();
                }
            });
            $("#zoom").droppable({
                drop : function (event,ui){ 
                    var u=ui.draggable.attr("src");
                    var U=u.replace("100/100",param.zoomWidth+"/"+param.zoomHeight);
                    $("#zoom").css({"background-image":"url("+U+")"});
                }
            });
        })
    }
})(jQuery);