const searchButton = document.querySelector('#button-addon2');
const inputKeyword = document.querySelector('.input-keyword');


searchButton.addEventListener('click', function () {

    fetch("https://cuaca-gempa-rest-api.vercel.app/weather/" + inputKeyword.value)
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('.result')

            result.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.issue.year},</h2>
                                <h5><span>${response.data.areas[0].domain}</span></h5>
                                <h5><span>${response.data.areas[0].params[1].id}</span></h5>
                    `
        })
    inputKeyword.value = null;

})