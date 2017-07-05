

<!----import header ---->
<?php include 'header.php';?>


<!-- map main container--->
<div class="container-fluid" id="mapContainer">

    <!-- map header---->

    <h3>Our location:</h3>



    <!-- print map here-->

    <div id="map" class="col-sm-12"></div>





</div>

<!--   map script ----->
<script>

    function initMap() {
        //           latitude and longitude
        var uluru = {lat: 31.8935, lng: 35.873129};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom:14,
            center: uluru

        });

        var marker = new google.maps.Marker({
            position: uluru,
            map: map
        });
    }

</script>




<script async defer  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBmdpbAtpLJU6jBY-js38MUpTECqG5PBIQ&callback=initMap"></script>

<!--- import footer --->

<?php include 'footer.php';?>
