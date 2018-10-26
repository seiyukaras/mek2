        <div class="contactus-2">
            <div id="contactUs2Map" class="map"></div>
            <div class="col-md-4">
                <div class="card card-contact card-raised">
                    <form id="contact-form2" method="post">
                        <div class="card-header card-header-rose text-center">
                            <h4 class="card-title">Contacto</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-rose">
                                            <i class="material-icons">phone</i>
                                        </div>
                                        <div class="description">
                                            <h5 class="info-title">Deje una llamada</h5>
                                            <p> M`ka
                                                <br> (+53) 22669336
                                                <br> Lunes - Domingo, 8:00-22:00
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-rose">
                                            <i class="material-icons">pin_drop</i>
                                        </div>
                                        <div class="description">
                                            <h5 class="info-title">Encuentranos</h5>
                                            <p> Calle Enramadas esq. Paseo Alameda,
                                                <br> Santiago de Cuba,
                                                <br> Cuba
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@section('script')
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCCiruypoJPCUlUoKUv_zCFM2rr-Rc9hE"></script>

    <script>
    $(document).ready(function() {
        var lat = 20.022598;
        var long = -75.834871;
        var centerLong = long;

        var myLatlng = new google.maps.LatLng(lat,long);
        var centerPosition = new google.maps.LatLng(lat, centerLong);

        var mapOptions = {
            zoom: 17,
            center: centerPosition,
            /*styles:
                [{"featureType":"water","stylers":[{"saturation":43},{"lightness":-11},{"hue":"#0088ff"}]},{"featureType":"road","elementType":"geometry.fill","stylers":[{"hue":"#ff0000"},{"saturation":-100},{"lightness":99}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#808080"},{"lightness":54}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"color":"#ece2d9"}]},{"featureType":"poi.park","elementType":"geometry.fill","stylers":[{"color":"#ccdca1"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#767676"}]},{"featureType":"road","elementType":"labels.text.stroke","stylers":[{"color":"#ffffff"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"landscape.natural","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#b8cb93"}]},{"featureType":"poi.park","stylers":[{"visibility":"on"}]},{"featureType":"poi.sports_complex","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","stylers":[{"visibility":"simplified"}]}],*/
            scrollwheel: false, //we disable de scroll over the map, it is a really annoing when you scroll through page
        };
        var map = new google.maps.Map(document.getElementById("contactUs2Map"), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!"
        });
        marker.setMap(map);
    });
    </script>

@endsection