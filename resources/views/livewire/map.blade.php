<div>
    <div id="map" class="h-100"></div>

    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
            integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
            crossorigin=""></script>
    <script>
        window.L = L;
        const bounds = [
            [32.0, 35.5],
            [38.0, 43.0]
        ];

        const map = L.map('map', {
            maxBounds: bounds,
            maxBoundsViscosity: 1.0,
            zoomSnap: 0.1,
            zoomDelta: 0.1,
            minZoom: 6
        }).setView([34.8021, 38.9968], 6.5);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        const customIcon = L.icon({
            iconUrl: '/images/marker-icon-2x.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [50, 150],
        });

        let marker = L.marker();


        @foreach($troops as $troop)

            marker = L.marker([{{ $troop['lat'] }}, {{ $troop['lng'] }}], {icon: customIcon}).addTo(map);
            marker.bindPopup('<img class="rounded-md object-cover" src="{{ $troop['img'] }}" /><br><b>{{ $troop['name'] }}</b><br><p class="text-center">{!! $troop['link']  !!}</p>', {
                keepInView: true,
                autoPan: true
            });

        @endforeach


    </script>
</div>
