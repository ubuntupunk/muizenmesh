const currentUrl = window.location.href;
const currentDir = currentUrl.substring(0, currentUrl.lastIndexOf('/'));
const rootDir = currentDir.substring(0, currentDir.lastIndexOf('/'));
console.log(rootDir + '/register/inc/get_countries.php');
console.log('Sending request to get_countries.php...');

 var xhr = new XMLHttpRequest();
      xhr.open('GET', `${rootDir}/register/inc/get_countries.php`);
      xhr.onload = function() {
         if (xhr.status === 200) {
          try {  
              // Parse the JSON response
              var data = JSON.parse(xhr.responseText);

             // Check if data is not null or undefined
              if (data) {

              // Populate the country element with options
               var countrySelect = document.getElementById('country');
		if (data.countries) {              
	             for (var i = 0; i < data.countries.length; i++) {
                          var option = document.createElement('option');
                           option.text = data.countries[i].country_name;
                           option.value = data.countries[i].id;
                           countrySelect.add(option);
                       }
                     }
let selectedCountry;  
	     // Add event listener for country dropdown list
              countrySelect.addEventListener('change', function() {
                const selectedCountry = this.value;
                console.log(selectedCountry); // Check this has the expected country ID 

// Filter the state
              var stateSelect = document.getElementById('state');
              stateSelect.innerHTML = '<option value="">Select State</option>';
              if (data.states) {
                for (var j = 0; j < data.states.length; j++) {
                if (data.states[j].country_id == selectedCountry) {
                var option1 = document.createElement('option');
                option1.text = data.states[j].state_name;
                option1.value = data.states[j].id;
                stateSelect.add(option1);
      }
    }
  }
});
var stateSelect = document.getElementById('state');
// Event listener for state dropdown 
              stateSelect.addEventListener('change', function() {


// Filter the cities based on the selected state
	      var citySelect = document.getElementById('city');
              citySelect.innerHTML = '<option value="">Select City</option>';
               if (data.cities) {
                 for (var k = 0; k < data.cities.length; k++) {
                  if (data.cities[k].state_id == selectedState) {
                   var option2 = document.createElement('option');
                    option2.text = data.cities[k].city_name;
                    option2.value = data.cities[k].id;
                    citySelect.add(option2);
      }
    }
  }
});


}     
  } catch (e) {      
    console.error(e);   
  }

}
  try {
    var data = JSON.parse(xhr.responseText); 
  } catch (err) {     
    console.log(xhr.responseText);  
    console.error(err);   
  }
};

xhr.onerror = function() {
  console.error(xhr.statusText);
};


 xhr.send();
