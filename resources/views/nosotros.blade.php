<x-app-layout>
<div id="map" style="height: 400px; width: 800px"></div>
@push('js')
    

  <script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHWwKFlrFhIWDCivDdnGyXaapFflJaa0g&callback=initMap&libraries=&v=weekly"
  async
></script>
<script>
let map;

function initMap() {
map = new google.maps.Map(document.getElementById("map"), {
center: { lat: -38.59855149059936, lng: -72.84204634939104 },
zoom: 18,
});
}
</script>

@endpush

</x-app-layout>