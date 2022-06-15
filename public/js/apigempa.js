// Api Gempa
$(document).ready(function () {
    fetch("https://cuaca-gempa-rest-api.vercel.app/quake/")
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('#map')
            result.innerHTML = `<img src="${response.data.shakemap}"></h2>`
            let text = document.querySelector('#text')
            text.innerHTML = `<table>
                <tr><td><h4>Tanggal &nbsp</h4></td><td><h4>:</h4></td><td><h4>&nbsp${response.data.tanggal}</h4></td></tr>
                <tr><td><h4>Waktu &nbsp</h4></td><td><h4>:</h4></td><td><h4>&nbsp${response.data.jam}</h4></td></tr>
                <tr><td><h4>Kedalaman &nbsp</h4></td><td><h4>:</h4></td><td><h4>&nbsp${response.data.kedalaman}</h4></td></tr>
                <tr><td><h4>Wilayah &nbsp</h4></td><td><h4>:</h4></td><td><h4>&nbsp${response.data.wilayah}</h4></td></tr>
                <tr><td><h4>Potensi &nbsp</h4></td><td><h4>:</h4></td><td><h4>&nbsp${response.data.potensi}</h4></td></tr>
                <tr><td><h4>Dirasakan &nbsp</h4></td><td><h4>:</h4></td><td><h4>&nbsp${response.data.dirasakan}</h4></td></tr></table>`
        })
});