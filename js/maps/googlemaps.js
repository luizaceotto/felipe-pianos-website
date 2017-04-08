var myCenter=new google.maps.LatLng(-20.3405418, -40.2892459);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:18,
  scrollwheel: false,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  });

marker.setMap(map);

var infowindow = new google.maps.InfoWindow({
  content:"<b>Felipe Pianos</b><br/>Avenida Doutor Olivio Lira nº 450<br/>Vila Velha - ES - Brasil<br/>CEP: 29100-296<br/>Tel.: 27 3229-0078"
  });

infowindow.open(map,marker);
marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);