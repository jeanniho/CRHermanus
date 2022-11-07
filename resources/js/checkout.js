const { default: axios } = require('axios');

const country_name = document.getElementById("country_name");

if (country_name) {
    const options = {
        method: 'get',
        url: "https://countriesnow.space/api/v0.1/countries/flag/images"
    };

    axios(options).then(res => {
        // console.log(res.data);
        var countries = res.data.data;
        let country_count = 0;
        countries.forEach(country_object => {
            var name = country_object.name;
            if (country_count = 0) {
                country_name.innerHTML += `<option value="${name}" selected>
                ${name}</option>`;
            } else {
                country_name.innerHTML += `<option value="${name}">${name}</option>`;
            }
            country_count = country_count + 1;
        });
    }).catch(err => {
        console.log(err);
    });
}