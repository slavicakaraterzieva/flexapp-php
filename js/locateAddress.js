// This sample uses the Autocomplete widget to help the user select a
// place, then it retrieves the address components associated with that
// place, and then it populates the form fields with those details.
// This sample requires the Places library. Include the libraries=places
// parameter when you first load the API. For example:
// <script
// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

var placeSearch, autocomplete;

var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search predictions to
  // geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('autocomplete'), {types: ['geocode']});

  // Avoid paying for data that you don't need by restricting the set of
  // place fields that are returned to just the address components.
  autocomplete.setFields(['address_components']);

  // When the user selects an address from the drop-down, populate the
  // address fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function initService() {
    const displaySuggestions = function (predictions, status) {
      if (status != google.maps.places.PlacesServiceStatus.OK || !predictions) {
        alert(status);
        return;
      }
      predictions.forEach((prediction) => {
        const li = document.createElement("li");
        li.appendChild(document.createTextNode(prediction.description));
        document.getElementById("results").appendChild(li);
      });
    };
    const service = new google.maps.places.AutocompleteService();
    service.getQueryPredictions({ input: "pizza near Syd" }, displaySuggestions);
  }
  
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details,
  // and then fill-in the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle(
          {center: geolocation, radius: position.coords.accuracy});
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
$(document).ready(function() {


        $('.js-button-customer').click(function(event) {

            var state_val = $('#shipping_state option:selected').text();

            $('.form-message-error p').text('');

            //var form_valid = validate_form($(this).closest('.js-form-wrap'));
            if (true) {
                var dto = { /*
                    firstname: $('#shipping_first_name').val().trim(),
                    lastname: $('#shipping_last_name').val().trim(),
                    email: $('#shipping_email').val().trim().toLowerCase(),
                    phone: $('#shipping_phone').val(),
                    address1: $('#shipping_address').val(),
                    address2: $('#shipping_address2').val(),
                    city: $('#shipping_city').val(),
                    state: state_val,
                    postalCode: $('#shipping_zip').val()            
                */ };
                // saveCustomerInfo(dto);
            } else {

                $('.form-message-error').slideDown(400);
                $('.input-required input, textarea').focus(function() {
                    $('.form-message-error').slideUp(400);
                    $('.form-message-error p').text('');
                });
                var e = form_valid.errormsgs;
                var em = e.join('<br/>');
                $('.form-message-error p').append(em);

                event.preventDefault(); // stop if invalid
            };
        });
    });
 function addValue(){
  var email = document.querySelector("#email");
  var total_price = document.querySelector("#total_price");
  var sub_total = document.querySelector("#subtotal_price");
   if(email.value !=""){
    document.querySelector("#total_price").setAttribute("value", innerHTML=sub_total.value)
  total_price.value=sub_total.value;}
}