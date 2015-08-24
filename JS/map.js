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
			"Highfield Terraces",
			-34.044728,
			151.130118,
			1,
            "pictures/icon-logo.png",
			"Teste Name 1",
			"",
			"Teste Desc 1",
			"Teste Desc 1.1"
		],
		[
			"Westfield Miranda",
			-34.035057,
			151.100356,
			2,
            "pictures/icon-mall.png",
			"Distance from Highfield Terraces: 4.4Km ",
			"Teste Desc 2",
			"Teste Desc 2.1"
		],
		[
			"Cronulla Beach",
			-34.051874,
			151.155778,
			3,
            "pictures/icon-beach.png",
            "Distance from Highfield Terraces: 3.4Km ",
			"Teste Name 3.1",
			"Teste Desc 3",
			"Teste Desc 3.1"
		],
        [
            "Caringbah Shopping Village",
            -34.042809,
            151.118742,
            4,
            "pictures/icon-mall.png",
            "Distance from Highfield Terraces: 2.4Km ",
            "Teste Name 3.1",
            "Teste Desc 3",
            "Teste Desc 3.1"
        ],
        [
            "Sutherland Hospital",
            -34.037300,
            151.114017,
            4,
            "pictures/icon-hospital.png",
            "Distance from Highfield Terraces: 2.2Km ",
            "Teste Name 3.1",
            "Teste Desc 3",
            "Teste Desc 3.1"
        ],
        [
            "Burraneer Bay Public School",
            -34.051575,
            151.132607,
            4,
            "pictures/icon-school.png",
            "Distance from Highfield Terraces: xxx ",
            "Teste Name 3.1",
            "Teste Desc 3",
            "Teste Desc 3.1"
        ],
        [
            "Woolooware High School",
            -34.039741,
            151.144618,
            4,
            "pictures/icon-school.png",
            "Distance from Highfield Terraces: 2.1Km ",
            "Teste Name 3.1",
            "Teste Desc 3",
            "Teste Desc 3.1"
        ],
        [
            "Caringbah North Public School",
            -34.036453,
            151.124440,
            4,
            "pictures/icon-school.png",
            "Distance from Highfield Terraces: 2Km ",
            "Teste Name 3.1",
            "Teste Desc 3",
            "Teste Desc 3.1"
        ],
        [
            "Miranda North Primary School",
            -34.031793,
            151.112467,
            4,
            "pictures/icon-school.png",
            "Distance from Highfield Terraces: 3.5Km",
            "Teste Name 3.1",
            "Teste Desc 3",
            "Teste Desc 3.1"
        ],
	]
    
	var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
        icon: locations[i][4]
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0], locations[i][8]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

var idInfoBoxAberto;
var infoBox = [];
 
function abrirInfoBox(id, marker) {
    if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
        infoBox[idInfoBoxAberto].close();
    }
 
    infoBox[id].open(map, marker);
    idInfoBoxAberto = id;
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
    