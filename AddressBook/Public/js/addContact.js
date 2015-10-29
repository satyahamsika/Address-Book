function validateContacts()
{
    var error = true;
    var contact_name = document.getElementById("contact_name").value;
    var contact_address = document.getElementById("contact_address").value;
    var contact_phone_no = document.getElementById("contact_phone_no").value;
    var country_name = document.getElementById("country_name").value;
    var state_name = document.getElementById("state_name").checked;
    var city_name = document.getElementById("city_name").checked;
    if (contact_name == "") {         
        document.getElementById("contact_nameError").innerHTML = "Name cannot be empty"; 
        var error = false; 
    } 
    if (contact_address == "") {         
        document.getElementById("contact_addressError").innerHTML = "Address cannot be empty"; 
        var error = false; 
    } 
    if (contact_phone_no == "") { 
        document.getElementById("contact_phone_noError").innerHTML = "Phone no cannot be empty";
        var error = false; 
    } 
    if (country_name == "") {         
        document.getElementById("country_nameError").innerHTML = "Country name cannot be empty"; 
        var error = false; 
    } 
    if (state_name == "") {
        document.getElementById("state_nameError").innerHTML = "State name be empty"; 
        var error = false; 
    } 
    if (city_name == "") {         
        document.getElementById("city_nameError").innerHTML = "City name cannot be empty"; 
        var error = false; 
    }  
    if (error) {
        return true;
    } else {
        return false;
    }
}
var states = new Array();
states['India'] = new Array('TamilNadu','Andhra Pradesh','Karnataka');
states['Mexico'] = new Array('Colima','Hidalgo');
var cities = new Array();
cities['India'] = new Array();
cities['India']['TamilNadu'] = new Array('Adyar','Chennai','sholinganalur', 'Tambaram');
cities['India']['Andhra Pradesh'] = new Array('Kakinada','Cuddapah', 'Kovur', 'Ongole');
cities['India']['Karnataka'] = new Array('Alur','Banavar', 'Bengaluru', 'Chintamani');
cities['Mexico'] = new Array();
cities['Mexico']['Colima'] = new Array('Armeria','Comala');
cities['Mexico']['Hidalgo'] = new Array('Apan','Vindho');
function setStates() 
{
    cntrySel = document.getElementById('country_name');
    stateList = states[cntrySel.value];
    changeSelect('state_name', stateList, stateList);
    setCities();
}
function setCities()
{
    cntrySel = document.getElementById('country_name');
    stateSel = document.getElementById('state_name');
    cityList = cities[cntrySel.value][stateSel.value];
    changeSelect('city_name', cityList, cityList);
}
function changeSelect(fieldID, newOptions, newValues) 
{
    selectField = document.getElementById(fieldID);
    selectField.options.length = 0;
    for (i =0; i<newOptions.length; i++) {
        selectField.options[selectField.length] = new Option(newOptions[i], newValues[i]);
    }
}
function addLoadEvent(func) {
    var oldonload = window.onload;
    if (typeof window.onload != 'function') {
        window.onload = func;
    } else {
        window.onload = function() {
        if (oldonload) {
            oldonload();
        }
         func();
        }
    }
}
addLoadEvent(function() {
  setStates();
});