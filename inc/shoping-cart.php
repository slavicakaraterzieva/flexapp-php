<?//php include('helpers/cart_helper.php');?>
    <!--shoping cart-->
    <section class="shoping-cart-section">
  <!--  <div class="col-md-12"> </div> --> 
  <div class="heading-tertiary">Your Unpaid Posts</div> 
           
  <p class="shoping-bag_heading">Items in your cart</p>
           
  <div class="cart-wrapper">
           
<div class="shoping_cart"> 
 <!--shopping bag-->
 <?php 
 include ("./models/Post.php");
 include ("./models/Img.php");
 include ("./models/Category.php");
 $post = new Post();
 $image = new Img();
 $category = new Category();
 $total= 0;
  if(empty($_SESSION['shopping_cart'])){
   $count=0;
   //echo $count; 
   echo '<h3> there are no items in the shopping cart:<a href="payment.php"> add items</a></h3>';
  }
  if(isset($_SESSION['user_id']) && isset($_SESSION['shopping_cart'])){
    $posts_ids=array_column($_SESSION['shopping_cart'],'id');
  
    foreach($_SESSION['shopping_cart'] as $key=>$post_product){
       $post_id=$post_product['id'];
       $row = $post->getPostByUserPayment($post_id);
       //print_r($row); //works untill here
       $calculated_price = $row->post_calculated_price;
       $category_id=$row->post_cat_id;
       $categoryArray=$category->getCategoryName($category_id);
       //print_r($categoryArray);
       $category_name=$categoryArray->category_title;
       $title=$row->post_title;
       $post_price=$row->post_price;
       $post_featured_img=$row->post_featured_img;
       $post_image=$image->getAllImages($post_featured_img);
      if(!empty($calculated_price)){
       $price=$calculated_price*100;
       }
      else{
        $price=0;
      }  
      if(!empty($post_image[0])){
        $post_img = "img/posts/".$post_image[0];
        }
       else{
        $post_img = "img/posts/real estate.png";
       }
       $total=$total+(1*$price); 
 ?>
  
            <!--stripe scripts-->
 <!-- <link rel="stylesheet" type="text/css" href="./css/stripe.css">    -->
 <script src="https://js.stripe.com/v3/"></script>
 <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
 <script src="./client.js" defer></script>
 <meta name="description" content="A demo of a card payment on Stripe" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />

    <div class="shoping_bag">
      <img src="<?php echo $post_img;?>" class="shoping_bag_img" alt="car"> 

       <div class="shoping_bag_desc">
         <p class="title"><?php echo $title;?></p>
         <p class="red"><?php echo $category_name;?></p>
         <p class="price"><sup>$</sup><?php echo $post_price;?></p> 
       </div>
  
       <div class="shoping_bag_remove">
        <p class="quantity"><span class="quantity-col">1 Item</span></p>
        <a href="cart.php?action=delete&id=<?php echo $post_product['id'];?>" class="quantity"><span class="quantity-col">Remove</span></a>
        </div>
  
      <div class="shoping_bag_outside">
       <p class="price-outside"><sup>c</sup><?php echo $price;?></p>
      
      </div>

    </div>
         <?php 
          //print_r($_SESSION['shopping_cart']);
         }//end of foreach
       } //end of if
         ?>      
    <!--shoping bag end-->

</div>
<!--end of shoping cart-->

<!--checkout-->
<div class="checkout_box">
  <div class="checkout_box-order-summary">
    <p class="order">Order Summary</p>
  </div>

  <div class="checkout_box-total-price">
    <p class="subtotal">Total Price:</p>
    <p class="subtotal_price"><sup>c</sup><?php echo $total;?></p> 
    <option class="d-none" id="subtotal_price" value="<?php echo $total;?>"></option>
      
 
  </div>

<!--   <div class="checkout_box-checkout">
    <a href="#payment" class="btn checkout_box-button"><i class="fa fa-lock"></i>Checkout</a>
  </div> -->
  
  <div class="checkout_box-payment-icons">

   <svg class="checkout_icon">
     <use xlink:href="/svg/symbol-defs.svg#icon-paypal"></use>
   </svg>

   <svg class="checkout_icon">
    <use xlink:href="/svg/symbol-defs.svg#icon-visa"></use>
  </svg>

  <svg class="checkout_icon">
    <use xlink:href="/svg/symbol-defs.svg#icon-mastercard"></use>
  </svg>
  
  <svg class="checkout_icon">
    <use xlink:href="/svg/symbol-defs.svg#icon-americanexpress"></use>
  </svg>

  </div>

</div>
<!--end of checkout-->
  </div>
<!--end of wrapper-->              
           
 <!--payment section-->
<?php if (isset($_SESSION['shopping_cart'])): ?>
 <div class="col-md-12 hidden" id="hidden_payment">
  <div class="heading-tertiary" id="payment">Payment Section</div>
<script>
  var sub_total = document.querySelector("#subtotal_price");
  var total_price = document.querySelector("#total_price");
  //alert (sub_total.value);
    if(sub_total.value!=0){
   document.querySelector("#hidden_payment").classList.remove("hidden"); 
  }
   </script> 

     <article class="card col-md-12 ">
      <div class="card-body p-5 nav-div">
 
       <div class="nav-div  nav-pills nav-fill" role="tablist">
 
          <ul class="nav nav-pills">
                             
         <!-- <li class="active nav-item"><a class="nav-link" id="a_menu1" href="#c_menu1" ><i class="fa fa-credit-card"></i>  CreditCard</a></li> -->
         <!-- <li class="nav-item"><a class="nav-link" id="a_menu2" href="#c_menu2"><i class="fa fa-paypal"></i>  Paypal</a></li> -->
         <!-- <li class="nav-item"><a class="nav-link" id="a_menu3" href="#c_menu3"><i class="fa fa-bank"></i>  BankTransfer</a></li> -->
 
          </ul>
                     
             <div class="tab-content">
                             
              <div id="c_menu1" class="">
             
                   <!--stripe card-->
                   <h3>Credit Card Details</h3>
                 <div class="credit_card">
                 <form  action="../../flexapp/create.php" class="margin-lg-t" id="payment-form" method="POST">
                      <input class="form-control d-none" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id'];?>">
                      <label for="first_name">first name</label> 
                      <input class="form-control" id="first_name" name="first_name" value="<?php echo $_SESSION['user_name'];?>">
                      <label for="email">email</label> 
                      <input class="form-control" id="email" name="email" placeholder="email"> 
                       <p style="color:red;">fill in all personal details</p>
                    <script>
                     
                     var firstname = document.querySelector("#first_name");
                     var lastname = document.querySelector("#last_name");
                     var email = document.querySelector("#email");
                      email.addEventListener("change", function(){
                       if(firstname.value !="" && email.value !=""){ 
                        //document.querySelector("#card_p").innerText="fill in all personal details or choose bank transver";
                         document.querySelector("#card_div").classList.remove("hidden"); 
                       }
                     });
                    
                    </script> 
                    <!-- <button id="submit1"  class="checkout_button">send to ajax</button>   -->
                    </div>

                    <div class="card_details hidden" id="card_div">
                  <h3>Credit Card</h3>
                   <br>
                     <label for="total_price">total amount</label>
                     <input class="form-control" id="total_price" name="total_price" value ="<?php echo $total;?>" readonly>
                     <label for="card number">card number: use 4242 4242 4242 4242</label>
                     <div class="form-control" style="height:4rem; font-size:14px; padding-top:1rem; " name="card-number" id="card-number"><!-- Stripe.js injects the Card Element--></div>
                     <label for="scv">scv number: any three numbers</label>
                     <div class="form-control" style="height:4rem; font-size:14px; padding-top:1rem; " name="card-cvc" id="card-cvc"><!-- Stripe.js injects the Card Element--></div>
                     <label for="date">date of expiry: any date in the future</label>
                     <div class="form-control" style="height:4rem; font-size:14px; padding-top:1rem; " name="card-expiry" id="card-expiry"><!-- Stripe.js injects the Card Element--></div>
                     <!--<label for="date">zip: your postal code</label>
                     <div class="form-control" style="height:4rem; font-size:14px; padding-top:1rem; " ipt>name="postal-code" id="postal-code">Stripe.js injects the Card Element</div>  -->
                     <p id ="card_p" style="color:red;">fill in your card details</p>
                     </div>
                  
                 <p id="card-error" role="alert"></p>
                    <p class="result-message hidden">
                        Payment succeeded, see the result in your
                    <a href="" target="_blank">See your payment here.</a> Refresh the page to pay again.
                  </p>
     
        <button id="submit" name ="pay_submit" class="checkout_button">
            <div class="spinner hidden" id="spinner"></div>
            <span id="button-text"><i class="fa fa-lock"></i>Pay now</span>
            <div id="payment-message" class="hidden"></div>
        </button>
        
            </form>
           <!-- ajax call send to client_details -->
           <script>
	  $("#submit").click(function() {
      //alert("change event");
      var user_id = $("#user_id").val()
			var first_name = $("#first_name").val();
			var email = $("#email").val(); 
			var amount = $("#total_price").val();
      //console.log(first_name, email, amount);

      $.ajax({
				type: "POST",
				url: "../../flexapp/charges/client_details.php",
			 	  data: {
          user_id: user_id,
					first_name: first_name,
					email: email, 
					amount: amount,
				},
				success: function(data) {
					//alert(data);
                    //window.location.assign("../../flexapp/charges/client_details.php");
				},
				error: function(xhr, status, error) {
					console.error(xhr);
				} 
			}); 
		 });
    </script>
        <!--end of stripe card-->
      
             </div>
 
             <div id="c_menu2" class="hidden p-3">
                 <h3>Paypal</h3>
 
             <form action="" class="margin-lg-t" id="paypal-form" method="POST">
             <button class="btn btn-primary"><i class="fa fa-paypal"></i> Paypal</button>
 
             <h5>Effective Date: December 27, 2019</h5>
             <p>
                 PayPal, Inc. (“PayPal,” “we,” “us,” or “our”) developed this Privacy Policy to explain how we may collect, 
                 Process, share, store, and transfer your Personal Data that you provide when you visit the Sites, 
                 access the Services and any other Site as a visitor or User (collectively “Braintree Services”). 
                 All collection, use, and disclosure of your business and Personal Data will be governed under this Privacy Policy. 
                 If you create an Account to use the Braintree Services or otherwise establish a Braintree Account, our collection, use, 
                 and disclosure of your customers Personal Data will be governed in all respects by the terms of the Payment Services Agreement you enter into with us.
                 
                 If you have questions about our privacy practices that are not addressed in this Privacy Policy, please contact us.
             </p>
                 </form>       
             </div>
 
             <div id="c_menu3" class="hidden p-3">
                 <h3>Bank Account</h3>
                 <h5>Details for bank account</h5>
                 <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                     Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                     when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                     It has survived not only five centuries, but also the leap into electronic typesetting, 
                     remaining essentially unchanged. It was popularised in the 1960s with the release of 
                     Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
                     Aldus PageMaker including versions of Lorem Ipsum.</p>
             </div>
                         </div>
                     </div>
     <!--end of nav-->
     <!--script for dynamic pills working from here, whatever??-->
<script>
         function switchTab(id)
 {
 var element = document.getElementById(id);
 
 if (!element.parentNode.classList.contains('active'))
 {
     var menu_items = element.parentElement.parentElement.children;
 
     for (var i = 0; i < menu_items.length; ++i)
     {
         if (menu_items[i].classList.contains('active'))
         {
             menu_items[i].classList.remove('active');
             document.getElementById('c' + menu_items[i].firstChild.id.substr(1)).classList.add('hidden');
         }
     }
 
     element.parentNode.classList.add('active');
     document.getElementById('c' + element.id.substr(1)).classList.remove('hidden');
 }
 }
 
 var menus = document.getElementsByClassName('nav');
 
 for (var i = 0; i < menus.length; ++i)
 {
 for (var j = 0; j < menus[i].children.length; ++j)
     menus[i].children[j].firstChild.addEventListener('click', function () {switchTab(this.id)}, false);
 }
     </script>
                 </div>
                 <!--end of body-->
             </article>
  </div>
  <!--end of payment-->                  
           
</section>
    <!--end of shoping cart section-->
   <?php endif ?>