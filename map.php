		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script>
			var map;
			function initialize() {
			
				var mapOptions = {
					mapTypeId: google.maps.MapTypeId.ROADMAP,
					mapTypeControl: false,
					zoom: 17,
					zoomControl: true,
					zoomControlOptions: {
						style: google.maps.ZoomControlStyle.LARGE,
						position: google.maps.ControlPosition.RIGHT_TOP
					},
					panControl: true,
					panControlOptions: {
						position: google.maps.ControlPosition.TOP_LEFT
					},
					streetViewControl: false,
					scrollwheel: false,
					scaleControl: true,
					overviewMapControl: false,
					center: new google.maps.LatLng(48.353961835270816, 24.420703301574687)
				};
				
				map = new google.maps.Map(document.getElementById('map-canvas'),
					mapOptions);
				
				var mapStyles = <?include('map_design.php');?>;
				
				map.setOptions({styles: mapStyles});
				
				var transitLayer = new google.maps.TransitLayer();
				transitLayer.setMap(map);
				
				var icon = {
					path: 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
					anchor: new google.maps.Point(16.5, 51),
					fillColor: '#FF0000',
					fillOpacity: 0.7,
					strokeWeight: 0,
					scale: 1.33
				};
				
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(48.353256, 24.422377),
					map: map,
					icon: icon,
					title: 'marker'
				});
			}
			
			google.maps.event.addDomListener(window, 'load', initialize);
			
			function checkResize(){
			
				var center = map.getCenter();
				google.maps.event.trigger(map, 'resize');
				map.setCenter(center);
			}
			
			window.onresize = checkResize;			
		</script>

<section class="mapsect">
	<div id="map-canvas"></div>
</section>