<!DOCTYPE html>
<html>
<head>
        <title>Mbuga</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.css" />
        <link rel="stylesheet" href="../css/map.css" />

        <meta name="layout" content="mobile"/>
    <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
    
     <script type="text/javascript" src="../javascript/map.js"></script>

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
    </head>

    <body>
        <div id="details" data-role="page" class="details-page">
            <div data-role="header" class="header_color"><a href="" data-icon="refresh" class="ui-btn-left" data-transition="fade" data-iconpos="notext" data-theme="a"></a>
                <h3>Mbuga</h3>
                <a href="/mbuga" data-icon="home" data-iconpos="notext" data-direction="reverse" class="ui-btn-right jqm-home" data-ajax="false">Home</a>
            </div>

            <div data-role="content" id="map_content" data-theme="a">
                <div id="map_content">
                    <div id="map_canvas"></div>
                </div>
            </div>
            
            <div data-role="footer">
            	
            </div> <!-- Footer closing tag -->
        </div>

       
        <script type="text/javascript">
            function initialize() {
                setupMap(-1.316699,36.78393, 11, true);				
                var quakeEventLatlng = new google.maps.LatLng(-1.316699,36.78393);
                var marker = createQuakeEventMarker(quakeEventLatlng)
                marker.setAnimation(google.maps.Animation.DROP)
            }
	
			//$("#map_canvas").gmap({'zoom':7})
            // Initialize the map when the jQuery Mobile pageshow event is triggered
            $('.details-page').live("pageshow", function() {
                if (map == null) {
                    initialize();
                    
                }
            });
	
        </script>

    </body>
</html>
