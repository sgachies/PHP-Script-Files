<html>
<head>
<title>Map!</title>

<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?sensor=false">

//<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>
</script>
<!--

    ROADMAP (normal, default 2D map)
    SATELLITE (photographic map)
    HYBRID (photographic map + roads and city names)
    TERRAIN (map with mountains, rivers, etc.)


-->
<script type="text/javascript">
function initialize(){
	var myOption ={
	 center:new google.maps.latLng(-34.397,150.644),
	 zoom:8,
	 myTypeId: google.mapsTypedId.ROADMAP
	}:
	
var map=new google.maps.Map(documen.getElementById("map"),myOption);
}
</script>
<style type="text/css">

#map{background:#F8F8F8;height:500px;width;}
</style>

</head>


<body onload="initialize()">
<div id="map"></div>

		
</body>
</html>