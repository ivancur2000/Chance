
let countrySelect = document.getElementById('country');
let citySelect = document.getElementById('city');

const configApi = {
    method: 'GET',
    headers: {
        'Accept': 'application/json',
        'api-token': 'IUSMuLd-VAamJLJMMqW41RHp7NolIg4ZESsf0HhiJr9oC2TT8c7dLuOcF1YASws-ed4',
        'user-email': 'chancelinea32@gmail.com'
    }
}

const getFetchData = async(url, config)=> {
    const tokenApiFetch = await fetch(url, config);
    const data = await tokenApiFetch.json();
    return data;
}

const getDataApiCountries = async (callback) => {
    const { auth_token } = await getFetchData('https://www.universal-tutorial.com/api/getaccesstoken', configApi);
    const configCountry = {
        method: 'GET',
        headers: {
            "Authorization": `Bearer ${auth_token}`,
            "Accept": 'application/json'
        }
    }
    callback(configCountry);


}
const getCountries = async (config) => {
    const data = await getFetchData('https://www.universal-tutorial.com/api/countries', config);
    data.map(({ country_name }) => {
        let option = document.createElement("option");
        option.value = country_name;
        option.text = country_name
        countrySelect.appendChild(option);
    });
}

const getCity = async (config)=> {
    while(citySelect.options.length > 0){
        citySelect.remove(0);
    }
    const data = await getFetchData(`https://www.universal-tutorial.com/api/states/${countrySelect.value}`, config);
    data.map(({ state_name }) => {
        let option = document.createElement("option");
        option.value = state_name;
        option.text = state_name;
        citySelect.appendChild(option);
    });
}

window.addEventListener('load', getDataApiCountries(getCountries), false);
