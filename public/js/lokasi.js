const searchButton = document.querySelector('#button-addon2');
const inputKeyword = document.querySelector('.input-keyword');
const inputKeyword2 = document.querySelector('.input-keyword2');

// $(function () {
//     $('#Provinsi').on('change', function () {
//         let nama_provinsi = $('#Provinsi').val();
//         $.ajax({
//             url: '{{url("/getkota")}}',
//             type: 'GET',
//             data: { nama_provinsi: nama_provinsi },
//             success: function (data) {
//                 $('#Kota').html(data);
//             }
//         })
//     })
// })


searchButton.addEventListener('click', function () {

    fetch("https://cuaca-gempa-rest-api.vercel.app/weather/" + inputKeyword.value + "/" + inputKeyword2.value)
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('.result')

            result.innerHTML = `<h5><span> Temperature : ${response.data.params[5].times[0].celcius}</span></h5>
                                 <h5><span> Kecepatan Angin : ${response.data.params[8].times[0].kph} km/jam</span></h5>
                                 <h5> Kelembapan : ${response.data.params[0].times[0].value}</h5>`
            let result2 = document.querySelector('.result2')
            let result8 = document.querySelector('.result8')
            var cuaca = response.data.params[6].times[0].code;

            if (cuaca == 3) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-cloudy"></i> Berawan </h5>`
                result8.innerHTML = `<img src="https://img.icons8.com/clouds/100/undefined/clouds.png"/>
                                    <h4>Berawan</h4>`
            } else if (cuaca == 0) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-sunny"></i> Cerah </h5>`
            } else if (cuaca == 1) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-cloudy"></i> Cerah Berawan</h5>`
                result8.innerHTML = `<img src="https://img.icons8.com/clouds/100/undefined/sun.png"/>
                                    <h4>Cerah Berawan</h4>`
            } else if (cuaca == 2) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-cloudy"></i> Cerah Berawan</h5>`
                result8.innerHTML = `<img src="https://img.icons8.com/clouds/100/undefined/sun.png"/>
                                    <h4>Cerah Berawan</h4>`
            } else if (cuaca == 4) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-sunny-overcast"></i> Berawan Tebal</h5>`
            } else if (cuaca == 5) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-haze"></i> Udara Kabur</h5>`
            } else if (cuaca == 10) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-fog"></i> Asap </h5>`
            } else if (cuaca == 45) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-fog"></i> Kabut</h5>`
            } else if (cuaca == 60) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-showers"></i> Hujan Ringan</h5>`
            } else if (cuaca == 61) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-day-rain"></i> Hujan Sedang</h5>`
            } else if (cuaca == 63) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-sleet-storm"></i> Hujan Lebat</h5>`
            } else if (cuaca == 80) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-showers"></i> Hujan Lokal </h5>`
            } else if (cuaca == 95) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-snow-thunderstorm"></i> Hujan Petir</h5>`
            } else if (cuaca == 97) {
                result2.innerHTML = `<h5> Cuaca Hari Ini :  <i class="wi wi-night-snow-thunderstorm"></i> Hujan Petir</h5>`
            }
            let result7 = document.querySelector('.result7')
            result7.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>`
            let result6 = document.querySelector('.result6')
            result6.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>`
            let result3 = document.querySelector('.result3')

            result3.innerHTML = `<h3> Prediksi Besok </h3>
                                <h5> Temperature : ${response.data.params[5].times[4].celcius}</h5>
                                <h5> Kecepatan Angin : ${response.data.params[8].times[4].kph}km/jam</h5>
                                <h5> Prediksi Cuaca : ${response.data.params[6].times[4].name}</h5>`

            let result4 = document.querySelector('.result4')

            result4.innerHTML = `<h3> Prediksi Lusa </h3>
                                <h5> Temperature : ${response.data.params[5].times[8].celcius}</h5>
                                <h5> Kecepatan Angin : ${response.data.params[8].times[8].kph} km/jam</h5>
                                <h5> Prediksi Cuaca : ${response.data.params[6].times[8].name}</h5>`

            var badai = response.data.params[5].times[0].celcius;

            if (badai > 28) {
                let badai = document.querySelector('.result5')
                badai.innerHTML = `<h5> Potensi Badai :  Waspada </h5>`
            } else {
                let badai = document.querySelector('.result5')
                badai.innerHTML = `<h5> Potensi Badai : Tidak Ada </h5>`
            }

        })
    inputKeyword.value = null;

})        