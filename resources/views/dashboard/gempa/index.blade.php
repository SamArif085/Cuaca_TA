@extends('dashboard.layout.main')
@section('container1')

    <body>
        <div class=" text-center" id="map"></div>
        <div class=" text-center" id="text"></div>
    </body>

    </html>
@endsection


@section('scripts')
    <script>
        $(document).ready(function() {
            fetch("https://cuaca-gempa-rest-api.vercel.app/quake/")
                .then(response => response.json())
                .then(response => {
                    let result = document.querySelector('#map')
                    result.innerHTML = `<img src="${response.data.shakemap}"></h2>`
                    let text = document.querySelector('#text')
                    text.innerHTML =
                        `<h5><span> Tanggal : ${response.data.tanggal}</span></h5>
                        <h5><span> Waktu : ${response.data.jam}</span></h5> 
                        <h5><span> Kedalaman : ${response.data.kedalaman}</span></h5> 
                        <h5><span> Wilayah : ${response.data.wilayah}</span></h5> 
                        <h5><span> Potensi : ${response.data.potensi}</span></h5> 
                        <h5><span> Dirasakan : ${response.data.dirasakan}</span></h5> `
                })
        });
    </script>
@endsection
