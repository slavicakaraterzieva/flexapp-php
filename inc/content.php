<?php

?>
<div class="content">
        
        <nav class="sidebar">
            <input type="checkbox" class="sidebar_checkbox" id="navi_toggle">
            <label for="navi_toggle" class="sidebar-toggle_button"><span class="sidebar-menu_icon"></span></label>
            <div class="sidebar-menu_background"></div>
    <ul class="sidebar_nav" id="menu">

<li class="sidebar_list">
    <a href="../../blueapp/index.php" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-home_filled"></use>
        </svg>
        <button type="submit"  class="sidebar_link-btn">Go Home</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="#" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-pencil"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Edit Profile</button>
    </a>
            <!--nested ul-->
<ul class="sidebar_nav">
    <li class="sidebar_list">
        <a data-page="#" href="#modal_popup" class="sidebar_link">
            <svg class="sidebar_icon">
                <use xlink:href="./svg/symbol-defs.svg#icon-file-picture"></use>
            </svg>
            <button type="submit" class="sidebar_link-btn">Edit Photo</button>
        </a>
    </li>
    
    <li class="sidebar_list">
        <a href="#" class="sidebar_link">
            <svg class="sidebar_icon">
                <use xlink:href="./svg/symbol-defs.svg#icon-eye"></use>
            </svg>
            <button type="submit" class="sidebar_link-btn">View Profile</button>
        </a>
    </li>
</ul>
<!--end of nested ul-->
</li>

<li class="sidebar_list">
    <a href="#payment" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-coin-dollar"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Payments</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="#" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-stats-bars"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">View Statistics</button>
    </a>
</li>

<li class="sidebar_list">
    <a href="#" class="sidebar_link">
        <svg class="sidebar_icon">
            <use xlink:href="./svg/symbol-defs.svg#icon-attachment"></use>
        </svg>
        <button type="submit" class="sidebar_link-btn">Add File</button>
    </a>
</li>

    </ul>
        </nav>
        <!--end of sidebar-->
<!--main-->
<main class="content-center">
    <div class="profile-search">
       <div class="profile-search_search-box">
          <button class="icon-btn-left">
              <svg class="profile-search_search-box__icon">
                  <use xlink:href="./svg/symbol-defs.svg#icon-search"></use>
              </svg>
          </button> 
          <input type="text" class="profile-search__input--1" id="search-place" autocomplete="off" placeholder="Type Postcode or Location...">
    <!--<div id="display1"></div> this is the div that will display search options--> 
       </div>
   
       <div class="profile-search_search-box">
           <input type="text" class="profile-search__input--2" id="search-place" autocomplete="off" placeholder="Search name or profession...">
           <button class="icon-btn-right">
               <svg class="profile-search_search-box__icon">
                   <use xlink:href="./svg/symbol-defs.svg#icon-search"></use>
               </svg>
           </button> 
        </div>
        
   <!--the invisible button for the responsive search-->
   <button class="btn-profile profile-search__submith" id="submith-searchForm">
       <span class="btn-profile__visible">Search</span>
       <span class="btn-profile__invisible">Find All</span>
   </button>
   
    </div>
    <!--end of profile search-->
   
    <!--price cards-->
    <div class="heading-tertiary">Select Type of Add</div>
   
    <div class="prices">
   
       <div class="price_card">
   
           <div class="price_card__title price_card__title--free">
               <i class="fa fa-paper-plane price_card--plane"></i>
               <h2>Free Add</h2>
           </div>
   
           <div class="price_card__price price_card__price--free">
               <h4>$<span>0</span></h4>
           </div>
   
           <div class="price_card__option">
               <ul>
                   <li><i class="fa fa-check price-li"></i>Post Free Add</li>
                   <li><i class="fa fa-check price-li"></i>Not guaranteed first position</li>
                   <li><i class="fa fa-check price-li" ></i>Add will be listed in the free section</li>
                   <li><i class="fa fa-check price-li"></i>Best option for begginers</li>
               </ul>
           </div>
   
           <a class="desc_price" href="#">Free Add</a>
   
       </div>
   <!--end of free add-->
   
       <div class="price_card">
   
           <div class="price_card__title price_card__title--standard">
               <i class="fa fa-rocket price_card--space-shuttle"></i>
               <h2>Standard Add</h2>
           </div>
   
           <div class="price_card__price price_card__price--standard">
               <h4>$<span>50</span></h4>
           </div>
   
           <div class="price_card__option">
               <ul>
                   <li><i class="fa fa-check price-li"></i>50c Per Day</li>
                   <li><i class="fa fa-check price-li"></i>First place for a week</li>
                   <li><i class="fa fa-check price-li" ></i>Add will be listed first in the free section</li>
                   <li><i class="fa fa-check price-li"></i>You can go premium any time</li>
               </ul>
           </div>
   
           <a class="desc_price" href="#">Standard Add</a>
   
       </div>
   <!--end of standard add-->
   
       <div class="price_card">
   
           <div class="price_card__title price_card__title--premium">
               <i class="fa fa-fire price_card--fire"></i>
               <h2>Premium Add</h2>
           </div>
   
           <div class="price_card__price price_card__price--premium">
               <h4>$<span>10</span></h4>
           </div>
   
           <div class="price_card__option">
               <ul>
                   <li><i class="fa fa-check price-li"></i>Get the best deal</li>
                   <li><i class="fa fa-check price-li"></i>First place for a month</li>
                   <li><i class="fa fa-check price-li" ></i>Be seen first</li>
                   <li><i class="fa fa-check price-li"></i>Extend promotion</li>
               </ul>
           </div>
   
           <a class="desc_price" href="#">Premium Add</a>
   
       </div>
   <!--end of premium add-->
   
    </div>
    <!--end of price cards-->

   <!--section posts-->
    <div class="heading-tertiary">Active Posts</div>
    <section class="section-post">
   
   <div class="row">
   
   <!--first card bye a car-->
       <div class="col-md-4 col-sm-6">
       <!--first add-->    
           <div class="post">
   <div class="post-total_images">2</div>
   <h3 class="post-heading">Bye a Car</h3>
   
   <!--carosel-->
   <div id="myCarousel-100" class="carousel slide post_img" data-ride="carousel" data-interval="false">
      
     
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
   
         <div class="item active">
           <img src="img/beetle-car.jpg" alt="Los Angeles">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Dimitar Vlahov no: 25
             </div>
            
           </div>
   
         </div>
     
         <div class="item">
           <img src="img/car.jpg" alt="Chicago">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frshinin no: 50
             </div>
   
           </div>
   
         </div>
     
       </div>
     
       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel-100" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-100" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->
      <div class="post-price">
          <h3 class="post-price_margin"><sup>$</sup> 20.000</h3>
      </div>
      <div class="post-description">
          <p class="post-description_content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Qui quos maiores quis ab placeat quasi minus quibusdam, 
              sunt beatae fugiat quam vel, exercitationem nemo animi commodi?
               Perferendis voluptatibus nihil ipsa!
          </p>
      </div>
   
      <div class="post-icons">
   
      </div>
   
      <div class="post-link">
          <a href="#" class="post-link_edit">edit<i class="fa fa-edit"></i></a> 
          <a href="#" class="post-link_del">delete<i class="fa fa-trash"></i></a> 
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar"></i>02 20 2020</span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map"></i>Skopje</span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar"></i>0-unpaid</span>
     </div>
   
   </div>
   
           </div>
           <!--end of card1-->
       </div>
       <!--end of add1-->
   
   <!--second card get a job-->
   <div class="col-md-4 col-sm-6">
       <!--second add-->    
           <div class="post">
   <div class="post-total_images">3</div>
   <h3 class="post-heading">Part time Office</h3>
   
   <!--carosel-->
   <div id="myCarousel-200" class="carousel slide post_img" data-ride="carousel" data-interval="false">
      
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
         <div class="item active">
           <img src="img/office.jpg" alt="Los Angeles">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frsinin no: 10
             </div>
   
             <div class="galery-description--icons">
               <i class="fa fa-phone"><span>078 655 432</span></i>
             </div>
   
           </div>
   
         </div>
     
         <div class="item">
           <img src="img/work.jpg" alt="Chicago">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frshinin no: 50
             </div>
   
             <div class="galery-description--icons">
               <i class="fa fa-phone"><span>078 654 322</span></i>
             </div>
   
           </div>
   
         </div>
     
         <div class="item">
           <img src="img/kisela_voda.jpg" alt="New York">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Goce Delcev no: 2
             </div>
   
             <div class="galery-description--icons">
               <i class="fa fa-phone"><span>079 543 765</span></i>
             </div>
   
           </div>
   
         </div>
       </div>
     
       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel-200" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-200" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->
      <div class="post-price">
          <h3 class="post-price_margin">Buisines Club</h3>
      </div>
      <div class="post-description">
          <p class="post-description_content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Qui quos maiores quis ab placeat quasi minus quibusdam, 
              sunt beatae fugiat quam vel, exercitationem nemo animi commodi?
               Perferendis voluptatibus nihil ipsa!
          </p>
      </div>
   
      <div class="post-icons">
   
      </div>
   
      <div class="post-link">
          <a href="#" class="post-link_edit">edit<i class="fa fa-edit"></i></a> 
          <a href="#" class="post-link_del">delete<i class="fa fa-trash"></i></a> 
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar"></i>02 20 2020</span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map"></i>Skopje</span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar"></i>0-unpaid</span>
     </div>
   
   </div>
   
           </div>
           <!--end of card2-->
       </div>
       <!--end of add2-->
   
           
   <!--third card bye a house-->
   <div class="col-md-4 col-sm-6">
       <!--third add-->    
           <div class="post">
   <div class="post-total_images">3</div>
   <h3 class="post-heading">Bye a House</h3>
   
   <!--carosel-->
   <div id="myCarousel-300" class="carousel slide post_img" data-ride="carousel" data-interval="false">
      
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
         <div class="item active">
           <img src="img/bannon-morrissy-house.jpg" alt="Los Angeles">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Partizanski Odredi no: 23
             </div>
           </div>
   
         </div>
     
          <div class="item"> 
           <img src="img/chairs.jpg" alt="Chicago">
   
         <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frshinin no: 50
             </div> 
           </div>
   
         </div> 
     
         <div class="item">
           <img src="img/svedska.jpg" alt="New York">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Goce Delcev no: 2
             </div> 
           </div>
   
         </div> -->
       </div>
     
       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel-300" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-300" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->
      <div class="post-price">
          <h3 class="post-price_margin"><sup>$</sup> 60.000</h3>
      </div>
      <div class="post-description">
          <p class="post-description_content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Qui quos maiores quis ab placeat quasi minus quibusdam, 
              sunt beatae fugiat quam vel, exercitationem nemo animi commodi?
               Perferendis voluptatibus nihil ipsa!
          </p>
      </div>
   
      <div class="post-icons">
   
      </div>
   
      <div class="post-link">
          <a href="#" class="post-link_edit">edit<i class="fa fa-edit"></i></a> 
          <a href="#" class="post-link_del">delete<i class="fa fa-trash"></i></a> 
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar "></i>02 20 2020</span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map "></i>Skopje</span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar "></i>0-unpaid</span>
     </div>
   
   </div>
   
           </div>
           <!--end of card3-->
       </div>
       <!--end of add3-->
   
   </div>
   <!--end of row-->
    </section>
    <!--end of section-posts-->
   
    <!-- <div class="heading-tertiary">Modal</div> -->
   
   <!--popup section-->
   <section class="popup-section start" id="modal_popup">
   
   <div class="popup">
     <div class="popup-content">
   
       <div class="popup-header">
         <h3 class="popup-header_title heading-modal">Add Photo</h3>
         <a class="close popup-header_close" href="">X</a>
       </div>
   <!--end of header-->
       <div class="popup-body">
   
   <form action="<?php echo BASE_FLEX?>php/add-photo.php"  method="POST" enctype="multipart/form-data">
   <div class="form-group">
     <input type="file" name="file" id="file" class="form-control input-style" required>
   </div>
   
   <div class="popup-submit">
     <input type="submit" name="img_submit" class="popup-submit_btn-modal" value="submit" >
         </div>
     <!--end of footer-->
   </form>
       </div>
   <!--end of body-->
    
     </div>
     <!--end of popup content-->
   </div>
   <!--end of popup-->
   </section>
   <!--end of popup section-->
   
   <!--profile form-->
   <section class="content-form">
   
     <div class="heading-tertiary">Add Post</div>
    
     <form method="POST" name="multiplesub" id="multiplesub" class="profile-form" action="" enctype="multipart/form-data">
   
       <div>
         <label class="label-style">Every free post can be posted for 30 days</label>
       </div>
   
       <div class="label-style">
         <label for="post-title">Add Title</label>
         <input type="text" class="input-style" name="post-title" id="post-title" placeholder="enter your title" autocomplete="off" required>
       </div>
   
       <div class="label-style">
         <label for="post-price_type">Select Price</label>
         <select  class="form-control select-style input-style" name="post-price_type" id="post-price_type" required>
           <option value="free" selected>free</option>
           <option value="selected">standard</option>
           <option value="premium">premium</option>
         </select>
       </div>
   
       <div class="label-style">
         <label for="startDate">Start Date</label>
         <input type="date" max="3000-12-31" class="input-style" name="startDate" id="post-title" autocomplete="off" required>
       </div>
   
       <div class="label-style">
         <label for="endDate">End Date</label>
         <input type="date" max="3000-12-31" class="input-style" name="endDate" id="post-title" autocomplete="off" required>
       </div>
   
       <div class="categories">
   
         <div class="profile-form_left-select">
           <div class="label-style">
             <label  for="ad_category">Select Category</label>
           <select  class="form-control select-style input-style" name="ad_category" id="ad_category" required>
             <option value="1" selected>house</option>
             <option value="2">job</option>
             <option value="3">car</option>
           </select>
           </div>
         </div>
   
         <div class="profile-form_right-select">
           <div class="label-style">
             <label  for="ad_sub-category">Select Sub Category</label>
             <select  class="form-control select-style input-style" name="ad_sub-category" id="ad_sub-category" required>
               <option value="1" selected>mansion</option>
               <option value="2">vila</option>
               <option value="3">aparment</option>
             </select>
           </div>
         </div>
   
       </div>
       <!--end of categories-->
   
       <div class="label-style">
         <label for="specific_item">Add Image</label>
         <input type="file" class="form-control input-style" name="file[]" id="file" multiple="multiple" required>
       </div>
    
       <div class="profile-form_item-price">
         
         <div class="label-style">
           <label for="post-price">Price</label>
           <input type="text" class="form-control select-style input-style" name="post-price" id="post-price" placeholder="ex: $10" readonly>
         </div>
   
         <div class="label-style radio-btn profile-form_item-buttons">
   
           <div class="profile-form_radio-group">
             <input type="radio" class="profile-form_radio-input" name="radio-price" id="amount" value="amount"  readonly>
             <label for="amount" class="profile-form_radio-label">
               <span class="profile-form_radio-btn"></span>Amount
             </label>
           </div><!--first radio-->
   
           <div class="profile-form_radio-group">
             <input type="radio" class="profile-form_radio-input" name="radio-price" id="negotiable" value="negotiable"  readonly>
             <label for="negotiable" class="profile-form_radio-label">
               <span class="profile-form_radio-btn"></span>Negotiable
             </label>
           </div><!--second radio-->
   
           <div class="profile-form_radio-group">
             <input type="radio" class="profile-form_radio-input" name="radio-price" id="swap" value="swap"  readonly> 
             <label for="swap" class="profile-form_radio-label">
               <span class="profile-form_radio-btn"></span>Swap/Trade
             </label>
           </div><!--third radio-->
   
         </div>
   <!--end of radio btn-->
   
       </div>
   <!--end of item price-->
   
   <!--info-->
   <div class="">
   
     <div class="label-style">
       <label for="company_email">Your Email</label>
       <input type="email" class="input-style" name="company_email" id="company_email" placeholder="enter your email" autocomplete="off" required>
     </div>
   
     <div class="label-style">
       <label for="name">Your Name</label>
       <input type="text" class="input-style" name="name" id="name" placeholder="enter your name" autocomplete="off" required>
     </div>
   
     <div class="label-style">
       <label for="number">Your Number</label>
       <input type="text" class="input-style" name="number" id="number" placeholder="enter your phone number" autocomplete="off" required>
     </div>
   
   
   </div>
   <!--end of info-->
   
   <!--text editor-->
   <div class="label-style">
     <label for="summernote">Enter Your Content</label>
     <div id="summernote" class="summertone"></div>
     <script>
       $('#summernote').summernote({
         placeholder: 'Enter Your Content',
         tabsize: 20,
         height: 150,
         focus: false,
         minHeight: null,             // set minimum height of editor
         maxHeight: null,
         toolbar: [
           ['style', ['style']],
           ['font', ['bold', 'underline', 'clear',]],
           ['color', ['color']],
           ['para', ['ul', 'ol', 'paragraph']],
           ['table', ['table']],
           ['insert', ['link', 'picture', 'video']],
           ['view', ['fullscreen', 'codeview', 'help']]
         ]
       });
     </script>

   </div>
   <!--text editor-->
   
   <!--condition-->
   <div class="">
     <div class="">
   
       <div class="profile-form_radio-group">
         <input type="radio" class="profile-form_radio-input" name="condition" id="new" value="new"  readonly>
         <label for="new" class="profile-form_radio-label">
           <span class="profile-form_radio-btn"></span>New
         </label>
       </div><!--condition1-->
   
       <div class="profile-form_radio-group">
         <input type="radio" class="profile-form_radio-input" name="condition" id="used" value="used"  readonly>
         <label for="used" class="profile-form_radio-label">
           <span class="profile-form_radio-btn"></span>Used
         </label>
       </div><!--condition2-->
   
     </div>
   </div>
   <!--end of condition-->
   <br>
   <!--submit btn-->
   <div class="">
     <button type="submit" class="form-btn" id="submit_post">Publish</button>
   </div>
   <br>
   <!--end of submit btn-->
     </form>
   
   </section>
   <!--end of profile form-->
   
    <!--shoping cart-->
<section class="shoping-cart-section">
  <!--  <div class="col-md-12"> </div> --> 
  <div class="heading-tertiary">Your Unpaid Posts</div> 
           
  <p class="shoping-bag_heading">Items in your cart</p>
           
  <div class="cart-wrapper">
           
    <div class="shoping_cart">

    <div class="shoping_bag">
      <img src="img/car.jpg" class="shoping_bag_img" alt="car"> 

  <div class="shoping_bag_desc">
    <p class="title">Car For Sale</p>
    <p class="red">Second Hand Cars</p>
    <p class="price"><sup>$</sup>8000</p>
  </div>
  
  <div class="shoping_bag_remove">
    <p class="quantity"><span class="quantity-col">1 Item</span></p>
    <a href="cart.php?action=delete" class="quantity"><span class="quantity-col">Remove</span></a>
  </div>
  
 <div class="shoping_bag_outside">
  <p class="price-outside"><sup>$</sup>50000</p>
</div>

      </div>
<!--shoping bag-->

        </div>
<!--end of shoping cart-->

<!--checkout-->
<div class="checkout_box">
  <div class="checkout_box-order-summary">
    <p class="order">Order Summary</p>
  </div>

  <div class="checkout_box-total-price">
    <p class="subtotal">Total Price:</p>
    <p class="subtotal_price"><sup>$</sup>0.00</p>
  </div>

  <div class="checkout_box-checkout">
    <a href="#payment" class="btn checkout_box-button"><i class="fa fa-lock"></i>Checkout</a>
  </div>
  
  <div class="checkout_box-payment-icons">

   <svg class="checkout_icon">
     <use xlink:href="./svg/symbol-defs.svg#icon-paypal"></use>
   </svg>

   <svg class="checkout_icon">
    <use xlink:href="./svg/symbol-defs.svg#icon-visa"></use>
  </svg>

  <svg class="checkout_icon">
    <use xlink:href="./svg/symbol-defs.svg#icon-mastercard"></use>
  </svg>
  
  <svg class="checkout_icon">
    <use xlink:href="./svg/symbol-defs.svg#icon-americanexpress"></use>
  </svg>

  </div>

</div>
<!--end of checkout-->
  </div>
<!--end of wrapper-->              
           
 <!--payment section-->
 <div class="col-md-12">
  <div class="heading-tertiary" id="payment">Payment Section</div>
         
     <article class="card col-md-12">
      <div class="card-body p-5 nav-div">
 
       <div class="nav-div  nav-pills nav-fill" role="tablist">
 
          <ul class="nav nav-pills">
                             
         <li class="active nav-item"><a class="nav-link" id="a_menu1" href="#c_menu1" ><i class="fa fa-credit-card"></i>  CreditCard</a></li>
         <li class="nav-item"><a class="nav-link" id="a_menu2" href="#c_menu2"><i class="fa fa-paypal"></i>  Paypal</a></li>
         <li class="nav-item"><a class="nav-link" id="a_menu3" href="#c_menu3"><i class="fa fa-bank"></i>  BankTransfer</a></li>
 
          </ul>
                     
             <div class="tab-content">
                             
              <div id="c_menu1" class="">
                 <h3>Credit Card</h3>
                 <div class="credit_card">
                     <form action="" class="margin-lg-t" id="payment-form" method="POST">
                     <label for="first_name">first name</label>
                     <input type="text" class="form-control" id="first_name" placeholder="first name">
                     <label for="last_name">last name</label>
                     <input type="text" class="form-control" id="last_name" placeholder="last name">
                     <label for="email">email</label>
                     <input type="email" class="form-control" id="email" placeholder="email">
                    </div>
                 <h3>Credit Card Details</h3>
 
                 <div class="card_details ">
                     <label for="card number">card number</label>
                     <input type="number" class="form-control" placeholder="card number">
                     <label for="scv">scv number</label>
                     <input type="number" class="form-control" placeholder="scv number">
                     <label for="date">date of expiery</label>
                     <input type="date" class="form-control">
                 </div>
                     </form>
       
             <button href="#payment" class="checkout_button"><i class="fa fa-lock"></i>Submit</button>
        
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
                 and disclosure of your customers’ Personal Data will be governed in all respects by the terms of the Payment Services Agreement you enter into with us.
                 
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

  <!--search resoults-->
<section class="live-search">

<div class="row">
<div class="col-md-12 mb-5" id="livesearch">
 <h3 class="heading-tertiary mb-5">Searched Resoults</h3>
  
<div class="search-box">

<div class="search-profile-box">

  <div class="img-box">
    <img class="profile-img" src="img/person.jpg" alt="admin photo">
  </div>

</div><!--end of search profile box-->

<div class="profile_details-box">

  <div class="profile_details-box_name">
    <i class="fa fa-user"></i>
    <span class="heading-style">Rick Tomson</span>
  </div>

  <div class="profile_details-box_ocupation">
    <i class="fa fa-briefcase"></i>
    <span class="heading-style">Web Developer</span>
  </div>

  <div class="profile_details-box_location">
    <i class="fa fa-map"></i>
    <span class="heading-style">America</span>
  </div>

  <div class="profile_details-box_experiance">
    <i class="fa fa-flask"></i>
    <span class="heading-style">7 Years</span>
  </div>

  <div class="profile_details-box_reviews">
    <i class="fa fa-star"></i>
    <span class="heading-style">Ratings 4.8</span>
  </div>

  <div class="profile_details-box_viewme">
   <a class="checkout_box-button" href="">View Me</a>
  </div>

</div><!--end of details box-->

</div><!--end of search box-->

</div><!--end of lifesearch-->

<div class="col-md-12 mb-5" id="livesearch">
  <!-- <h3 class="heading-tertiary">Searched Resoults</h3> -->

<div class="search-box">

<div class="search-profile-box">

  <div class="img-box">
    <img class="profile-img" src="img/person.jpg" alt="admin photo">
  </div>

</div><!--end of search profile box-->

<div class="profile_details-box">

  <div class="profile_details-box_name">
    <i class="fa fa-user"></i>
    <span class="heading-style">Rick Tomson</span>
  </div>

  <div class="profile_details-box_ocupation">
    <i class="fa fa-briefcase"></i>
    <span class="heading-style">Web Developer</span>
  </div>

  <div class="profile_details-box_location">
    <i class="fa fa-map"></i>
    <span class="heading-style">America</span>
  </div>

  <div class="profile_details-box_experiance">
    <i class="fa fa-flask"></i>
    <span class="heading-style">7 Years</span>
  </div>

  <div class="profile_details-box_reviews">
    <i class="fa fa-star"></i>
    <span class="heading-style">Ratings 4.8</span>
  </div>

  <div class="profile_details-box_viewme">
   <a class="checkout_box-button" href="">View Me</a>
  </div>

</div><!--end of details box-->

</div><!--end of search box-->

</div><!--end of lifesearch-->

  </div><!--end of row-->
</section>
  <!--end of search resoults-->

  <section class="display-msg_header">
    <p><i class="fa fa-check"></i>Success!</p>
  </section>
  <!--success message-->

  <section class="display-msg_error">
    <p><i class="fa fa-times"></i>Error!</p>
  </section>
  <!--error message-->

<!--section-unpaid-posts adding posts to shoping cart-->
    <div class="heading-tertiary">Unpaid Posts</div>
    <section class="section-post">
   
   <div class="row">
   
   <!--first card bye a car-->
       <div class="col-md-4 col-sm-6">
       <!--first add-->    
           <div class="post">
   <div class="post-total_images">2</div>
   <h3 class="post-heading">Bye a Car</h3>
   
   <!--carosel-->
   <div id="myCarousel-100" class="carousel slide post_img" data-ride="carousel" data-interval="false">
      
     
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
   
         <div class="item active">
           <img src="img/beetle-car.jpg" alt="Los Angeles">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Dimitar Vlahov no: 25
             </div>
            
           </div>
   
         </div>
     
         <div class="item">
           <img src="img/car.jpg" alt="Chicago">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frshinin no: 50
             </div>
   
           </div>
   
         </div>
     
       </div>
     
       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel-100" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-100" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->
      <div class="post-price">
          <h3 class="post-price_margin"><sup>$</sup> 20.000</h3>
      </div>
      <div class="post-description">
          <p class="post-description_content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Qui quos maiores quis ab placeat quasi minus quibusdam, 
              sunt beatae fugiat quam vel, exercitationem nemo animi commodi?
               Perferendis voluptatibus nihil ipsa!
          </p>
      </div>
   
      <div class="post-icons">
   
      </div>
   
      <div class="post-link">
          <a href="#payment" class="post-link_edit post-link_add">add to cart<i class="fa fa-shopping-cart"></i></a> 
          <a href="#payment" class="post-link_del post-link_checkout">checkout<i class="fa fa-shopping-bag"></i></a> 
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar"></i>02 20 2020</span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map"></i>Skopje</span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar"></i>0-unpaid</span>
     </div>
   
   </div>
   
           </div>
    <!--end of card1-->
       </div>
       <!--end of add1-->
   
   <!--second card get a job-->
   <div class="col-md-4 col-sm-6">
       <!--second add-->    
           <div class="post">
   <div class="post-total_images">3</div>
   <h3 class="post-heading">Part time Office</h3>
   
   <!--carosel-->
   <div id="myCarousel-200" class="carousel slide post_img" data-ride="carousel" data-interval="false">
      
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
         <div class="item active">
           <img src="img/office.jpg" alt="Los Angeles">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frsinin no: 10
             </div>
   
             <div class="galery-description--icons">
               <i class="fa fa-phone"><span>078 655 432</span></i>
             </div>
   
           </div>
   
         </div>
     
         <div class="item">
           <img src="img/work.jpg" alt="Chicago">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frshinin no: 50
             </div>
   
             <div class="galery-description--icons">
               <i class="fa fa-phone"><span>078 654 322</span></i>
             </div>
   
           </div>
   
         </div>
     
         <div class="item">
           <img src="img/kisela_voda.jpg" alt="New York">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Goce Delcev no: 2
             </div>
   
             <div class="galery-description--icons">
               <i class="fa fa-phone"><span>079 543 765</span></i>
             </div>
   
           </div>
   
         </div>
       </div>
     
       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel-200" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-200" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->
      <div class="post-price">
          <h3 class="post-price_margin">Buisines Club</h3>
      </div>
      <div class="post-description">
          <p class="post-description_content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Qui quos maiores quis ab placeat quasi minus quibusdam, 
              sunt beatae fugiat quam vel, exercitationem nemo animi commodi?
               Perferendis voluptatibus nihil ipsa!
          </p>
      </div>
   
      <div class="post-icons">
   
      </div>
   
      <div class="post-link">
          <a href="#payment" class="post-link_edit post-link_add">add to cart<i class="fa fa-shopping-cart"></i></a> 
          <a href="#payment" class="post-link_del post-link_checkout">checkout<i class="fa fa-shopping-bag"></i></a> 
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar"></i>02 20 2020</span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map"></i>Skopje</span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar"></i>0-unpaid</span>
     </div>
   
   </div>
   
           </div>
           <!--end of card2-->
       </div>
       <!--end of add2-->
   
           
   <!--third card bye a house-->
   <div class="col-md-4 col-sm-6">
       <!--third add-->    
           <div class="post">
   <div class="post-total_images">3</div>
   <h3 class="post-heading">Bye a House</h3>
   
   <!--carosel-->
   <div id="myCarousel-300" class="carousel slide post_img" data-ride="carousel" data-interval="false">
      
       <!-- Wrapper for slides -->
       <div class="carousel-inner">
         <div class="item active">
           <img src="img/bannon-morrissy-house.jpg" alt="Los Angeles">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Partizanski Odredi no: 23
             </div>
           </div>
   
         </div>
     
          <div class="item"> 
           <img src="img/chairs.jpg" alt="Chicago">
   
         <div class="galery-description">
             <div class="galery-description-heading">
               Address: Risto Frshinin no: 50
             </div> 
           </div>
   
         </div> 
     
         <div class="item">
           <img src="img/svedska.jpg" alt="New York">
   
           <div class="galery-description">
             <div class="galery-description-heading">
               Address: Goce Delcev no: 2
             </div> 
           </div>
   
         </div> -->
       </div>
     
       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel-300" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-300" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->
      <div class="post-price">
          <h3 class="post-price_margin"><sup>$</sup> 60.000</h3>
      </div>
      <div class="post-description">
          <p class="post-description_content">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
              Qui quos maiores quis ab placeat quasi minus quibusdam, 
              sunt beatae fugiat quam vel, exercitationem nemo animi commodi?
               Perferendis voluptatibus nihil ipsa!
          </p>
      </div>
   
      <div class="post-icons">
   
      </div>
   
      <div class="post-link">
          <a href="#payment" class="post-link_edit post-link_add">add to cart<i class="fa fa-shopping-cart"></i></a> 
          <a href="#payment" class="post-link_del post-link_checkout">checkout<i class="fa fa-shopping-bag"></i></a> 
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar "></i>02 20 2020</span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map "></i>Skopje</span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar "></i>0-unpaid</span>
     </div>
   
   </div>
   
           </div>
           <!--end of card3-->
       </div>
       <!--end of add3-->
   
   </div>
   <!--end of row-->
    </section>
    <!--end of section-unpaid-posts-->
          
   </main>
   <!--end of main-->

    </div>
    <!--end of content-->