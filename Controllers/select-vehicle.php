<?php

require $root_path . '/Core/Database.php';

$form_details = $_POST;

$db = new Database();
$cars = $db->query('select * from cars');

date_default_timezone_set('Asia/Karachi');
$current_date_time = date('F d, Y, g:i A');

?>
<!--  Javascript code for calculating distance between two points -->

<script>

    let pickUpLocation = `<?= $form_details['pick-up-location'] ?>`;
    let dropUpLocation = `<?= $form_details['drop-up-location'] ?>`;
    var distance;
    var duration;

    

    function loadScript() {
            const script = document.createElement('script');
            script.src = "https://maps.googleapis.com/maps/api/js?key=AIzaSyDDqTr8-dih2bgYaG8mRfS4GmXQ6NXwMKs&libraries=places&callback=initMap";
            script.defer = true;
            document.body.appendChild(script);
        }

    window.onload = loadScript;

    function initMap() {

        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [pickUpLocation],
            destinations: [dropUpLocation],
            travelMode: 'DRIVING',
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
        }, function(response, status) {
            if (status === 'OK') {
                distance = response.rows[0].elements[0].distance.text;
                duration = response.rows[0].elements[0].duration.text;

                console.log(distance);
                console.log(duration);
                document.cookie = `distance = ${distance}`;
                document.cookie = `duration = ${duration}`;

                var hiddenInput = document.createElement('input');
                // hiddenInput.type = 'hidden';
                hiddenInput.name = 'hiddenDistance';
                hiddenInput.type = 'hidden';
                hiddenInput.value = distance;

                var container = document.getElementById('container');
                container.appendChild(hiddenInput);

                
            } else {
                console.log('Distance matrix request failed. Status:', status);
            }
        });
    }


</script>

<?php


if(isset($_COOKIE['distance']) && isset($_COOKIE['duration'])){
    $distance_in_string = $_COOKIE['distance'];
    $duration = $_COOKIE['duration'];

    $distance = intval($distance_in_string);
}


require $root_path . '/views/select-vehicle.view.php'; 

?>



