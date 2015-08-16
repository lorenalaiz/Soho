var map;
 
function initialize() {
    var latlng = new google.maps.LatLng(-34.044046, 151.133857);
 
    var options = {
        zoom: 15,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };
 
    map = new google.maps.Map(document.getElementById("map"), options);
}
 
initialize();

function carregarPontos() {
 
    $.getJSON('js/points.json', function(points) {
 
        $.each(points, function(index, ponto) {
 
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
                title: "Meu ponto personalizado! :-D",
                map: map
            });
 
        });
 
    });
 
}
 
carregarPontos();