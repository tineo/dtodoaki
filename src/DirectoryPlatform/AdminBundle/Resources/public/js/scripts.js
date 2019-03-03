$(document).ready(function() {
    /**
     * Custom radio & checkbox
     */
    $('input[type=checkbox]').wrap('<div class="checkbox-wrapper"/>');
    $('.checkbox-wrapper').append('<span class="indicator"></span>');

    $('input[type=radio]').wrap('<div class="radio-wrapper"/>');
    $('.radio-wrapper').append('<span class="indicator"></span>');

    /**
     * WYSIWYG
     */
    $('textarea.wysiwyg').summernote({
        popover: {},
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'link', 'picture']],
            ['para', ['ul', 'ol']]
        ]
    });
    
    /**
     * Geolocation
     */
    if ($('#listing_geolocation').length !== 0) {
        $('#listing_geolocation #listing_geolocation').prepend('<div class="google-map-search">Google Map</div>');
        initializeMap($('#listing_geolocation .google-map-search'));
    }

    function initializeMap(el) {
        var map = {};
        var id = el.attr('id');
        var searchInput = $('#listing_geolocation_search');
        var mapCanvas = el;
        var latitude = $('#listing_geolocation_latitude');
        var longitude = $('#listing_geolocation_longitude');
        var latLng = new google.maps.LatLng(54.800685, -4.130859);
        var zoom = 5;
        console.log("admin bundle");
        // If we have saved values, let's set the position and zoom level
        if (latitude.val().length > 0 && longitude.val().length > 0) {
            latLng = new google.maps.LatLng(latitude.val(), longitude.val());
            zoom = 8;
        }

        // Map
        var mapOptions = {
            center: latLng,
            zoom: zoom
        };

        map = new google.maps.Map(mapCanvas[0], mapOptions);

        // Marker
        var markerOptions = {
            map: map,
            draggable: true,
            title: 'Drag to set the exact location'
        };
        var marker = new google.maps.Marker(markerOptions);

        if (latitude.val().length > 0 && longitude.val().length > 0) {
            marker.setPosition(latLng);
        }

        // Search
        var autocomplete = new google.maps.places.Autocomplete(searchInput[0]);
        autocomplete.bindTo('bounds', map);

        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                return;
            }

            if (place.geometry.viewport) {
                map.fitBounds(place.geometry.viewport);
            } else {
                map.setCenter(place.geometry.location);
                map.setZoom(8);
            }

            marker.setPosition(place.geometry.location);

            latitude.val(place.geometry.location.lat());
            longitude.val(place.geometry.location.lng());
        });

        $(searchInput).keypress(function (event) {
            if (13 === event.keyCode) {
                event.preventDefault();
            }
        });

        // Allow marker to be repositioned
        google.maps.event.addListener(marker, 'drag', function () {
            latitude.val(marker.getPosition().lat());
            longitude.val(marker.getPosition().lng());
        });
    }

    /**
     * Collections
     */
    var collection = $('.collection');

    if (collection.length) {
        collection.collection({
            'add_at_the_end': true,
            'fade_in': false,
            'fade_out': false,
            'allow_down': false,
            'allow_up': false,
            'allow_remove': true
        });
    }
});