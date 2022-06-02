const searchButton = document.querySelector('#button-addon2');
const inputKeyword = document.querySelector('.input-keyword');
const inputKeyword2 = document.querySelector('.input-keyword2');




searchButton.addEventListener('click', function () {

    fetch("https://cuaca-gempa-rest-api.vercel.app/weather/" + inputKeyword.value + "/" + inputKeyword2.value)
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('.result')

            result.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>
                                <h5><span> Temperature : ${response.data.params[5].times[0].celcius}</span></h5>
                                 <h5><span> Kecepatan Angin : ${response.data.params[8].times[0].kph} km/jam</span></h5>
                                 <h5> Kelembapan : ${response.data.params[0].times[0].value}</h5>`
            let result2 = document.querySelector('.result2')

            result2.innerHTML = `<h5> Cuaca Hari Ini : ${response.data.params[6].times[0].name}</h5>`

            let result3 = document.querySelector('.result3')

            result3.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>
                                <h5><span> Prediksi Besok </span></h5>
                                <h5><span> Temperature : ${response.data.params[5].times[4].celcius}</span></h5>
                                <h5><span> Kecepatan Angin : ${response.data.params[8].times[4].kph} km/jam</span></h5>
                                <h5> Cuaca Hari Ini : ${response.data.params[6].times[4].name}</h5>
                                <br>
                                <h5><span> Prediksi Lusa </span></h5>
                                <h5><span> Temperature : ${response.data.params[5].times[8].celcius}</span></h5>
                                <h5><span> Kecepatan Angin : ${response.data.params[8].times[8].kph} km/jam</span></h5>
                                <h5> Cuaca Hari Ini : ${response.data.params[6].times[8].name}</h5>`

            var badai = response.data.params[5].times[0].celcius;

            if (badai > 28) {
                let badai = document.querySelector('.result4')
                badai.innerHTML = `<h5> Potensi Badai :  Waspada </h5>`
            } else {
                let badai = document.querySelector('.result4')
                badai.innerHTML = `<h5> Potensi Badai : Tidak Ada </h5>`
            }

        })
    inputKeyword.value = null;

})        