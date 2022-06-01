const searchButton = document.querySelector('#button-addon2');
const inputKeyword = document.querySelector('.input-keyword');
const inputKeyword2 = document.querySelector('.input-keyword2');


searchButton.addEventListener('click', function () {

    fetch("https://cuaca-gempa-rest-api.vercel.app/weather/" + inputKeyword.value + "/" + inputKeyword2.value)
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('.result')

            result.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description},</h2>
                                <h5><span>${response.data.domain}</span></h5>
                                <h5><span>${response.data.params[0].id}</span></h5>
                    `
        })
    inputKeyword.value = null;

})        