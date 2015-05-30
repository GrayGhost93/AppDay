<style type="text/css">
    .ui-listview > li p {
        white-space: normal;
    }
</style>

<script src="http://maps.google.se/maps/api/js?sensor=false"></script>
<script>
    (function () {
        var directionsService = new google.maps.DirectionsService(),
            directionsDisplay = new google.maps.DirectionsRenderer(),
            createMap = function (start) {
                var travel = {
                        origin : (start.coords)? new google.maps.LatLng(start.lat, start.lng) : start.address,
                        destination : "<?php print $value[0]['lat'].' '.$value[0]['long']; ?>",
                        travelMode : google.maps.DirectionsTravelMode.DRIVING
                        // Exchanging DRIVING to WALKING above can prove quite amusing :-)
                    },
                    mapOptions = {
                        zoom: 10,
                        // Default view: downtown Stockholm
                        center : new google.maps.LatLng(59.3325215, 18.0643818),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };

                map = new google.maps.Map(document.getElementById("map"), mapOptions);
                directionsDisplay.setMap(map);
                directionsDisplay.setPanel(document.getElementById("map-directions"));
                directionsService.route(travel, function(result, status) {
                    if (status === google.maps.DirectionsStatus.OK) {
                        directionsDisplay.setDirections(result);
                    }
                });
            };

        // Check for geolocation support
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                    // Success!
                    createMap({
                        coords : true,
                        lat : position.coords.latitude,
                        lng : position.coords.longitude
                    });
                },
                function () {
                    // Gelocation fallback: Defaults to Stockholm, Sweden
                    alert('Bitte Standortabfrage im Browser zulassen!');
                    createMap({
                        coords : false,
                        address : "Sveavägen, Stockholm"
                    });
                }
            );
        }
        else {
            alert('Bitte Standortabfrage im Browser zulassen!');
            // No geolocation fallback: Defaults to Lisbon, Portugal
            createMap({
                coords : false,
                address : "Lisbon, Portugal"
            });
        }
    })();
</script>

<div data-role="page" data-theme='b'>


    <div data-role="header" data-position="fixed" data-tap-toggle="false" data-theme='b'>
        <a href="<?php print site_url('welcome'); ?>" data-ajax="false"><i class='fa fa-bars'></i></a>
        <h1>Wichtige Orte</h1>
    </div>

    <div data-role="content">
        <ul data-role="listview" data-inset="false" data-icon="false" data-divider-theme="b">
            <li data-role="list-divider">Name</li>
            <li>
                <h2><i class='fa fa-newspaper-o'></i><?php print $value[0]['name']; ?></h2>
            </li>
            <li data-role="list-divider">Beschreibung</li>
            <li>
                <p><i class='fa fa-newspaper-o'></i><?php print $value[0]['beschreibung']; ?></p>
            </li>
            <li data-role="list-divider">Adresse</li>
            <li>
                <p><i class='fa fa-newspaper-o'></i><?php print $value[0]['adresse']; ?></p>
            </li>
            <li data-role="list-divider">Karte</li>
        </ul>
        <div id="map" style="height: 300px;"></div>
    </div>

</div>