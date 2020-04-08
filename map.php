
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width:100%;
        height: 500px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map">
<script>
              var map=null;
              function initMap() {
                //map options
                var options={
                  zoom:7,
                  center: {lat: 24.1403226, lng: 44.9511262}
                }
                // new map
                map = new
                google.maps.Map(document.getElementById('map'),options);
                /**
                // add marker
                var marker = new google.maps.Marker({
                  position:{lat: 24.1403226, lng: 44.9511262},
                  map:map
                });
                //infoWindo
                var infoWindow = new google.maps.InfoWindow({
                  content:'<h1>Lynn MA</h1>'
                });

                //listener
                marker.addListener('click',function(){
                  infoWindow.open(map,marker);
                });
                */
                // event that gets coord from click on map
                var i=0;
                var mks=null;
                 geolocate(map);
                google.maps.event.addListener(map,'click',
                  function(event){
                    //addMarker
                    var coords={coords:event.latLng , map:map}
                    if(mks != null){
                      mks.position=coords.coords;
                    mks.setMap(map);
                    }
                    else{
                      mks=addMarker(coords);
                    }
                    document.getElementById('choosenLocation').value=coords.coords;



                });

              }
              // add marker
              function addMarker(props){
                 marker = new google.maps.Marker({
                  position:props.coords,
                  map:props.map,
                });
                if(props.iconImage){
                  marker.setIcon(props.iconImage);
                }
                return marker;
              }
// get location
function geolocate(map) {
  infoWindow = new google.maps.InfoWindow;
  if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function(position) {
           var pos = {
             lat: position.coords.latitude,
             lng: position.coords.longitude
           };
           document.getElementById('GPSlocation').value='('+position.coords.latitude +','+ position.coords.longitude+')';
           infoWindow.setPosition(pos);
           infoWindow.setContent('Location found.');
           infoWindow.open(map);
           map.setCenter(pos);
         }, function() {
           handleLocationError(true, infoWindow, map.getCenter());
         });
       } else {
         // Browser doesn't support Geolocation
         handleLocationError(false, infoWindow, map.getCenter());
       }
     }

     function handleLocationError(browserHasGeolocation, infoWindow, pos) {
       infoWindow.setPosition(pos);
       infoWindow.setContent(browserHasGeolocation ?
                             'Error: The Geolocation service failed.' :
                             'Error: Your browser doesn\'t support geolocation.');
       infoWindow.open(map);
     }




</script>


    </div>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3pioBmMwftE7PZ0gh6nF9LsJFFkNSr78&libraries=places&callback=initMap">
    </script>
