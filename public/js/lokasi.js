var searchButton = document.querySelector('#button-addon2');
var inputKeyword = document.querySelector('.input-keyword');
var inputKeyword2 = document.querySelector('.input-keyword2');

//API Cuaca
searchButton.addEventListener('click', function () {

    fetch("https://cuaca-gempa-rest-api.vercel.app/weather/" + inputKeyword.value + "/" + inputKeyword2.value)
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('.result')

            result.innerHTML = `<table>
                                <tr><td>Temperature &nbsp</td><td>:</td><td>&nbsp${response.data.params[5].times[0].celcius}</td></tr>
                                <tr><td>Kecepatan Angin &nbsp</td><td>:</td><td>&nbsp${response.data.params[8].times[0].kph} km/jam</td></tr>
                                <tr><td> Kelembapan &nbsp</td><td>:</td><td>&nbsp${response.data.params[0].times[0].value}</td></tr></table>`
            let result2 = document.querySelector('.result2')
            let result8 = document.querySelector('.result8')
            var cuaca = response.data.params[6].times[0].code;

            if (cuaca == 3) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-cloudy"></i> Berawan </h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/clouds.png"/>
                                    <h4>Berawan</h4></div>`
            } else if (cuaca == 0) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-sunny"></i> Cerah </h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/smiling-sun.png"/>
                                    <h4>Cerah Berawan</h4></div>`
            } else if (cuaca == 1) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-cloudy"></i> Cerah Berawan</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/sun.png"/>
                                    <h4>Cerah Berawan</h4></div>`
            } else if (cuaca == 2) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-cloudy"></i> Cerah Berawan</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/sun.png"/>
                                    <h4>Cerah Berawan</h4></div>`
            } else if (cuaca == 4) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-sunny-overcast"></i> Berawan Tebal</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/clouds.png"/>
                                    <h4>Berawan Tebal</h4></div>`
            } else if (cuaca == 5) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-haze"></i> Udara Kabur</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/windsock.png"/>
                                    <h4>Udara Kabur</h4></div>`
            } else if (cuaca == 10) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-fog"></i> Asap </h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/external-rabit-jes-outline-color-rabit-jes/250/undefined/external-fog-weather-rabit-jes-outline-color-rabit-jes.png"/>
                                    <h4>Berasap</h4></div>`
            } else if (cuaca == 45) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-fog"></i> Kabut</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/external-rabit-jes-outline-color-rabit-jes/250/undefined/external-fog-weather-rabit-jes-outline-color-rabit-jes.png"/>
                                    <h4>Berkabut</h4></div>`
            } else if (cuaca == 60) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-showers"></i> Hujan Ringan</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/rain.png"/>
                                    <h4>Hujan Ringan</h4></div>`
            } else if (cuaca == 61) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-rain"></i> Hujan Sedang</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/rain.png"/>
                                    <h4>Hujan Sedang</h4></div>`
            } else if (cuaca == 63) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-sleet-storm"></i> Hujan Lebat</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/rain.png"/>
                                    <h4>Hujan Lebat</h4></div>`
            } else if (cuaca == 80) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-showers"></i> Hujan Lokal </h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/rain.png"/>
                                    <h4>Hujan Lokal</h4></div>`
            } else if (cuaca == 95) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-snow-thunderstorm"></i> Hujan Petir</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/storm.png"/>
                                    <h4>Hujan Petir</h4></div>`
            } else if (cuaca == 97) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-snow-thunderstorm"></i> Hujan Petir</h5>`
                result8.innerHTML = `<div class=" text-center"><img src="https://img.icons8.com/clouds/250/undefined/storm.png"/>
                                    <h4>Hujan Petir</h4></div>`
            }
            let result7 = document.querySelector('.result7')
            result7.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>`
            let result6 = document.querySelector('.result6')
            result6.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>`
            let result3 = document.querySelector('.result3')

            result3.innerHTML = `<table> 
                                <h3 style="margin-bottom: 15px;">Prediksi Lusa </h3>
                                <tr><td>Temperature &nbsp</td><td>:</td><td>&nbsp${response.data.params[5].times[4].celcius}</td></tr>
                                <tr><td>Kecepatan Angin &nbsp</td><td>:</td><td>&nbsp${response.data.params[8].times[4].kph}km/jam</td></tr>
                                <tr><td>Prediksi Cuaca &nbsp</td><td>:</td><td>&nbsp${response.data.params[6].times[4].name}</td></tr></table>`

            let result4 = document.querySelector('.result4')

            result4.innerHTML = `<table> 
                                <h3 style="margin-bottom: 15px;">Prediksi Lusa </h3>
                                <tr><td>Temperature &nbsp</td><td>:</td><td>&nbsp${response.data.params[5].times[8].celcius}</td></tr>
                                <tr><td>Kecepatan Angin &nbsp</td><td>:</td><td>&nbsp${response.data.params[8].times[8].kph} km/jam</td></tr>
                                <tr><td>Prediksi Cuaca &nbsp</td><td>:</td><td>&nbsp${response.data.params[6].times[8].name}</td></tr></table>`

            var badai = response.data.params[5].times[0].celcius;

            if (badai > 28) {
                let badai = document.querySelector('.result5')
                badai.innerHTML = `<h5> Potensi Badai :  Waspada </h5>`
            } else {
                let badai = document.querySelector('.result5')
                badai.innerHTML = `<h5> Potensi Badai : Tidak Ada </h5>`
            }

        })
    // inputKeyword.value = id;
    // inputKeyword2.value = null;
})


