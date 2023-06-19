/**function getRootDir() {  
  const { hostname, protocol, port } = window.location;
  return `${protocol}//${hostname}${port ? ':' + port : ''}`;
}
**/

function getRootDir() {
const { hostname, protocol, port}  = window.location.href;
const currentDir = currentUrl.substring(0, currentUrl.lastIndexOf('/'));
return currentDir.substring(0, currentDir.lastIndexOf('/'));
}


async function getRemoteData(url) { 
  const res = await fetch(url);
  return await res.json();  
}

function createOption(name, value) {
  const option = document.createElement('option');
  option.text = name;  
  option.value = value;
  return option;    
}

async function fetchCountries() {   
  const { countries } = await getRemoteData(
    `${getRootDir()}/register/inc/get_countries.php`);
  populateCountries(countries);
}

function populateCountries(countries) {  
  const countrySelect = document.getElementById('country');   
  countries.forEach(country => {  
    const option = createOption(country.country_name, country.id);          
    countrySelect.add(option);   
  });
}

countrySelect.addEventListener('change', async () => {
  const countryId = countrySelect.value;   
  const { states } = await getRemoteData(
    `${getRootDir()}/register/inc/get_states.php?country=${countryId}`);
  populateStates(states);
});

function populateStates(states) {
  const stateSelect = document.getElementById('state');
  stateSelect.innerHTML = '<option value="">Select State</option>';
  states.forEach(state => {  
    const option = createOption(state.state_name, state.id);          
    stateSelect.add(option);    
  });   
} 

stateSelect.addEventListener('change', async () => {
  const stateId = stateSelect.value;   
  const { cities } = await getRemoteData(
    `${getRootDir()}/register/inc/get_cities.php?state=${stateId}`);  
  populateCities(cities);  
});

function populateCities(cities) {
  const citySelect = document.getElementById('city');
  citySelect.innerHTML = '<option value="">Select City</option>';
  cities.forEach(city => {  
    const option = createOption(city.city_name, city.id);      
    citySelect.add(option);   
  });
}

fetchCountries();
