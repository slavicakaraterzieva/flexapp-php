// A reference to Stripe.js initialized with your real test publishable API key.
//var stripe = Stripe('<?= $_ENV["STRIPE_PUBLIC_KEY"]?>');
var stripe = Stripe("pk_test_51JFFpVDKystPZY0T0eJbeyrpgkQIuYlplkTahpsWub3JsGufHC4MzNeyfJKNblWR9hwN9DSItq7QXlfVXfVAZPM900K535Ml5R");
// The items the customer wants to buy

// Disable the button until we have Stripe set up on the page
 document.querySelector("#submit").classList.add("hidden");
 document.querySelector("#submit").disabled = true;
      //the amount  trigers the request on any event
          var amount = document.querySelector('#total_price').value;
          var purchase = {amount: amount};
      
     
          
  fetch("./create.php",{
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  }, 
  body: JSON.stringify(amount),
})
  .then(function(result) {
    return result.json();
  })
  .then(function(data) {
    var elements = stripe.elements();
    var style = {
      base: {
        color: "#32325d",
        fontFamily: 'Arial, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#32325d"
        }
      },
      invalid: {
        fontFamily: 'Arial, sans-serif',
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    }; 
   // alert("total amount to pay: "  + purchase.amount);

  //create card element
  var number = elements.create("cardNumber", { style: style });
  var cvc = elements.create("cardCvc", { style: style });
  var expiry = elements.create("cardExpiry", { style: style });
  //var postal = elements.create("postalCode", { style: style }); 
 // Stripe injects an iframe into the DOM
 document.querySelector("#submit").classList.add("hidden");
 number.mount("#card-number");
 cvc.mount("#card-cvc");
 expiry.mount("#card-expiry");
 //postal.mount("#postal-code"); 
 expiry.on("change", function (event) {
    // Disable the Pay button if there are no card details in the Element
    document.querySelector("#submit").disabled = event.empty;
    document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
    document.querySelector("#card_p").classList.add("hidden");
    document.querySelector("#submit").classList.remove("hidden");
  });

  var form = document.getElementById("payment-form");
    form.addEventListener("submit", function(event) {
      event.preventDefault();
      // Complete payment when the submit button is clicked
      payWithCard(stripe, number, data.clientSecret);
    });
    
  }); 

// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
const nameInput = document.querySelector('#first_name');
const emailInput = document.querySelector('#email');
 var payWithCard = function(stripe, number, clientSecret) {
  loading(true);
  stripe
    .confirmCardPayment(clientSecret, {
      payment_method: {
        card: number,
        billing_details:{
          name: nameInput.value,
          email: emailInput.value,
        } 
      }
      
    }) 
   
     .then(function(result) {
      if (result.error) { 
        // Show error to your customer
        showError(result.error.message);
      } 
      else {
        // The payment succeeded!
        orderComplete(result.paymentIntent.id);
      }
    }); 
}; 

/* ------- UI helpers ------- */
// Shows a success message when the payment is complete
//window.location.assign("./success.php");
  var orderComplete = function(paymentIntentId) {
    window.location.assign("./success.php"+"?type='stripe'");
  loading(false);
  document
    .querySelector(".result-message a")
    .setAttribute(
      "href",
         "./success.php"+"?type='stripe'",
      // "https://dashboard.stripe.com/test/payments/" + paymentIntentId
      
    )
 
  document.querySelector(".result-message").classList.remove("hidden");
  document.querySelector("#submit").disabled = true;
  document.querySelector("#submit").classList.add("hidden");
 
};   
// Show the customer the error from Stripe if their card fails to charge
 var showError = function(errorMsgText) {
  loading(false);
  document.querySelector("#submit").classList.add("hidden");
  var errorMsg = document.querySelector("#card-error");
  errorMsg.textContent = errorMsgText;
  setTimeout(function() {
    errorMsg.textContent = "";
  }, 4000);
}; 
// Show a spinner on payment submission
 var loading = function(isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#submit").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#submit").classList.add("hidden");
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
};
