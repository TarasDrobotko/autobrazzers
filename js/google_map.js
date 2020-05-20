/* google map */
var popupContent =
    '<p class="marker-content">м. Київ, вул. Сверстюка 19, 10 поверх, офіс 13</p>',
  image = "../icons/map/marker.png";
mapCenter = { lat: 50.448305, lng: 30.6059 };

// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = { lat: 50.44823, lng: 30.602853 };
  // The map, centered at Uluru
  var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 16,
    center: mapCenter,
    scrollWheel: false,
    disableDefaultUI: true,
    styles: [
      {
        featureType: "all",
        elementType: "labels.text.fill",
        stylers: [
          {
            color: "#63615f",
          },
        ],
      },
      {
        featureType: "all",
        elementType: "labels.icon",
        stylers: [
          {
            visibility: "off",
          },
        ],
      },
      {
        featureType: "landscape",
        elementType: "geometry",
        stylers: [
          {
            color: "#333333",
          },
        ],
      },
      {
        featureType: "poi",
        elementType: "geometry",
        stylers: [
          {
            visibility: "off",
          },
        ],
      },
      {
        featureType: "road",
        elementType: "labels.text.stroke",
        stylers: [
          {
            color: "#12120f",
          },
        ],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.fill",
        stylers: [
          {
            lightness: "-75",
          },
          {
            gamma: "4.48",
          },
          {
            weight: "0.75",
          },
        ],
      },
      {
        featureType: "road.highway",
        elementType: "geometry.stroke",
        stylers: [
          {
            lightness: 29,
          },
          {
            weight: 0.2,
          },
        ],
      },
      {
        featureType: "road.highway.controlled_access",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#f6b044",
          },
        ],
      },
      {
        featureType: "road.arterial",
        elementType: "geometry",
        stylers: [
          {
            color: "#4f4e49",
          },
          {
            weight: "0.5",
          },
        ],
      },
      {
        featureType: "road.arterial",
        elementType: "labels.text.fill",
        stylers: [
          {
            color: "#c4ac87",
          },
        ],
      },
      {
        featureType: "road.arterial",
        elementType: "labels.text.stroke",
        stylers: [
          {
            color: "#262307",
          },
        ],
      },
      {
        featureType: "road.local",
        elementType: "geometry",
        stylers: [
          {
            color: "#907e63",
          },
          {
            weight: "0.5",
          },
        ],
      },
      {
        featureType: "road.local",
        elementType: "labels.text.fill",
        stylers: [
          {
            color: "#756751",
          },
        ],
      },
      {
        featureType: "transit",
        elementType: "geometry",
        stylers: [
          {
            visibility: "off",
          },
        ],
      },
      {
        featureType: "water",
        elementType: "geometry.fill",
        stylers: [
          {
            color: "#555555",
          },
        ],
      },
    ],
  });
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({
    position: uluru,
    map: map,
    icon: image,
  });
  infoWindow = new google.maps.InfoWindow({
    content: popupContent,
  });

  infoWindow.open(map, marker);

  google.maps.InfoWindow.prototype.opened = false;
  // toggle info window when marker is clicked
  google.maps.event.addListener(marker, "click", function () {
    if (infoWindow.opened) {
      infoWindow.open(map, marker);
      infoWindow.opened = false;
    } else {
      infoWindow.close();
      infoWindow.opened = true;
    }
  });

  google.maps.event.addListener(map, "click", function () {
    infoWindow.close();
    infoWindow.opened = true;
  });

  google.maps.event.addListenerOnce(map, "idle", function () {
    jQuery(".gm-style-iw").prev("div").remove();
  });
}
