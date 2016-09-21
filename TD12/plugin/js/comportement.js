$(document).ready(init);

function init() {
    var color = ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1"];
    var highlight = ["#FF5A5E", "#5AD3D1", "#FDB45C", "#949FB1"];
    var donnees = Array();

    $("table tr").each(function (i) {
        donnees[donnees.length] = {
            value: parseInt($(this).children().last().text()),
            color: color[i],
            highlight: highlight[i],
            label: $(this).children().first().text()
        }
    });

    var ctx = document.getElementById("myChart").getContext("2d");
    var myPieChart = new Chart(ctx).Pie(donnees);
}