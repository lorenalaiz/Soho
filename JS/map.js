var map;
var idInfoBoxAberto;
var infoBox = [];
var markers = [];

function initialize() { 
    var latlng = new google.maps.LatLng(-34.044046,151.133857 );
    
    var options = {
        zoom: 14,
        center: latlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    map = new google.maps.Map(document.getElementById("map"), options);
	
	carregarPontos();
	
}

initialize();

function abrirInfoBox(id, marker) {
    if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
        infoBox[idInfoBoxAberto].close();
    }

    infoBox[id].open(map, marker);
    idInfoBoxAberto = id;
}

function carregarPontos() {
    
	var locations = [
		[
			"Teste 1",
			-34.0439084,
			151.1291238,
			1,
			"Teste Name 1",
			"",
			"Teste Desc 1",
			"Teste Desc 1.1"
		],
		[
			"Teste 2",
			-34.035057,
			151.100356,
			2,
			"Teste Name 2",
			"Teste Name 2.1",
			"Teste Desc 2",
			"Teste Desc 2.1"
		],
		[
			"Teste 3",
			-34.0504425,
			151.1644733,
			3,
			"Teste Name 3",
			"Teste Name 3.1",
			"Teste Desc 3",
			"Teste Desc 3.1"
		]
	]
    
	var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0], locations[i][6]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

	
    /*$.getJSON('pontos.json', function(pontos) {
        
        var latlngbounds = new google.maps.LatLngBounds();
        
        $.each(pontos, function(index, ponto) {
            
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
				map:map,
                title: "Meu ponto personalizado! :-D",
                icon: 'pictures/marcador.png'
            });
            
            var myOptions = {
                content: "<p>" + ponto.Descricao + "</p>",
                pixelOffset: new google.maps.Size(-150, 0)
            };

            infoBox[ponto.Id] = new InfoBox(myOptions);
            infoBox[ponto.Id].marker = marker;
            
            infoBox[ponto.Id].listener = google.maps.event.addListener(marker, 'click', function (e) {
                abrirInfoBox(ponto.Id, marker);
            });
            
            markers.push(marker);
            
            latlngbounds.extend(marker.position);
            
        });
        
        var markerCluster = new MarkerClusterer(map, markers);
        
        map.fitBounds(latlngbounds);
        
    });*/
    
}

//carregarPontos();
    