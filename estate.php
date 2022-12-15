<?php include ("bootstrap.php");?>
<!DOCTYPE html>
<html lang="eng">
<?php include ("./inc/head.php");?>
<body>

<!-- <script type= "text/javascript" src="./js/locateAddress.js"></script> -->




<div class=" my-flex-container">

<?php include ("./inc/header.php");?>

<div class="content">
<?php include("./inc/sidebar.php");?>

<main class="content-center">


<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

}
else{ $page = "";}

switch($page){
    case 'price-cards';
    include ("./inc/price-cards.php");
    break; 

    case 'view-profile';
    include ("./inc/view-profile.php");
    break;

    case 'posts';
    include ("./inc/posts.php");
    break;

    case 'content-form';
    include ("./inc/content-form.php");
    break;

    case 'shoping-cart';
    include ("./inc/shoping-cart.php");
    break;

    case 'profile-search';
    include ("./inc/profile-search.php");
    break;

    case 'unpaid-posts';
    include ("./inc/unpaid-posts.php");
    break;

   /*  default ;
    include ("./inc/price-cards.php");
    break; */
}
?>
<?php //include ("./inc/price-cards.php");?>
<?php //include ("./inc/posts.php");?>
<?php include ("./inc/popup-modal.php");?>
<?php //include ("./inc/content-form.php");?>
<?php //include ("./inc/shoping-cart.php");?> 
<?php //include ("./inc/profile-search.php");?>
<?php include ("./inc/display-message.php");?>
<?php //include ("./inc/unpaid-posts.php");?>
<?php //include ("./inc/view-profile.php");?>

   <!--scripts for editor-->
   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js">
    </script> 

<!--profile form-->
<section class="content-form">
   
<div class="heading-tertiary">Create Estate Add / Post</div>
  
   <form method="POST" name="multiplesub" id="multiplesub" class="profile-form" action="<?php echo BASE_FLEX?>php/add-post.php" enctype="multipart/form-data">
 
     <div>
       <label class="label-style" style="line-height:2rem;">Every free post can be posted for 30 days</label>
     </div>
 
     <div class="label-style">
       <label for="post_title">Add Title</label>
       <input type="text" class="input-style" name="post_title" id="post_title" placeholder="enter your title" autocomplete="off" required>
     </div>

  <div class="categories">

       <div class="label-style profile-form_left-select">
         <label for="property_type">Select Property Type</label>
        <select  class="form-control select-style input-style" name="property_type" id="property_type" required>
         <option value="apartment">apartment</option>
         <option value="house">house</option>
         <option value="loft">loft</option>
         <option value="unit">unit</option>
         <option value="villa">villa</option>
         <option value="land">land</option>
        </select>
       </div>

   <div class="label-style profile-form_left-select">
      <label for="post_type">Post Type</label>
      <select  class="form-control select-style input-style" name="post_type" id="post_type" required>
      <?php 
        $setPrice = $_POST["post_type"];
     if($setPrice="free"){ ?>
        <option value="free 0" selected>Free <?php echo "$ ".$setPrice = 0;}?></option>
        <?php if($setPrice="standard"){?>
        <option value="standard 1">Standard <?php echo "$ ".$setPrice = 1;}?></option>
        <?php if($setPrice="premium"){?>
        <option value="premium 5">Premium <?php echo "$ ".$setPrice = 5;}?></option>      
     </select> 
  
   </div>

      <div class="label-style">
       <label for="specific_item">Add Image</label>
       <input type="file" class="form-control input-style" name="file[]" id="post_featured_img" multiple="multiple" required>
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item">Add Price</label>
       <input type="text" class="form-control input-style" name="content_price" id="content_price" required>
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item">Floors</label>
       <input type="text" class="form-control input-style" name="floor" id="floor">
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item">Lounge Areas</label>
       <input type="text" class="form-control input-style" name="lounge" id="lounge">
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item">Kitchen Areas</label>
       <input type="text" class="form-control input-style" name="kitchen" id="kitchen">
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item"> Bedrooms</label>
       <input type="text" class="form-control input-style" name="bedroom" id="bedroom">
     </div>
      
     <div class="label-style profile-form_left-select">
       <label for="specific_item">Bathrooms</label>
       <input type="text" class="form-control input-style" name="bath" id="bath">
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item">Toilets</label>
       <input type="text" class="form-control input-style" name="wc" id="wc">
     </div>

     <div class="label-style profile-form_left-select">
       <label for="specific_item">Parking Space</label>
       <input type="text" class="form-control input-style" name="parking" id="parking">
     </div>

     <div class="label-style profile-form_left-select">
         <label for="sale_type">Select Sale Type</label>
        <select  class="form-control select-style input-style" name="sale_type" id="sale_type" required>
         <option value="auction">auction</option>
         <option value="negotiable">negotiable</option>
         <option value="fixed">fixed</option>
         <option value="swap">swap</option>
        </select>

        <div class="label-style profile-form_left-select">
         <label for="outdoor_features">Outdoor Features</label>
        <select  class="form-control select-style input-style" name="outdoor_features" id="outdoor_features">
         <option value="none">none</option>
         <option value="balcony">balcony</option>
         <option value="front yard">front yard</option>
         <option value="back yard">back yard</option>
         <option value="patio">patio</option>
         <option value="gazebo">gazebo</option>
        </select>

        <div class="profile-form_item-price">
         
         <div class="label-style">
           <label for="internet">Internet</label>
           <input type="text" style="background-color:transparent; border:none; box-shadow:none; font-size:1.8rem; font: wait 400px;" class="form-control select-style input-style" name="internet_option" id="internet_option" placeholder="select option yes or no" readonly>
         </div>
   
         <div class="label-style radio-btn profile-form_item-buttons">
   
           <div class="profile-form_radio-group">
             <input type="radio" class="profile-form_radio-input" name="radio-price" id="option_yes" value="yes"  readonly="">
             <label for="option_yes" class="profile-form_radio-label">
               <span class="profile-form_radio-btn"></span>Yes
             </label>
           </div><!--first radio-->
   
           <div class="profile-form_radio-group">
             <input type="radio" class="profile-form_radio-input"  name="radio-price" id="option_no" value="no"  readonly="">
             <label for="option_no" class="profile-form_radio-label">
               <span class="profile-form_radio-btn"></span>No
             </label>
           </div><!--second radio-->
   
         </div>
   <!--end of radio btn-->

       </div>
   <!--end of item price-->
  
  </div><!--end of categoties-->

 <!--text editor-->
 <div class="label-style">
   <label for="summernote">Enter Your Content</label>
   <div id="" class="summertone">
   <textarea id="summernote" class="post_content" name="post_content"></textarea>
   </div>
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
   </script><!--text editor-->

 <div id="locationField" class="label-style">
 <input id="autocomplete" class="input-style" placeholder="Enter address" type="text" name="full_address"/>
 </div>
 
 <br>
 <!--submit btn-->
 <div class="">
   <button type="submit" class="form-btn" name="submit_realestate_post" id="submit_realestate_post">Publish</button>
 </div>
 <br>
 <!--end of submit btn-->
   </form>
 
</section>
 <!--end of profile form-->

</main><!--end of main-->

</div><!--end of content-->

<?php include ("./inc/scroll.php");?>
<?php include ("./inc/footer.php");?>

</div><!--end of flex container-->

 <!--my scripts-->
 <script src="./js/menuClick.js"></script>
     <!-- <script src="./js/scroll.js"></script> -->
     <script src="./js/response.js"></script>
     <script src="./js/unseenComments.js"></script>
     <script src="./js/dynamic_pills.js"></script><!--not working from here  -->
<!--bootstrap again-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="./sass/vendors/bootstrap/css/bootstrap.min.css"></script>
        <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="./sass/vendors/jquery3.5.0.js"></script>
       

<body>
</html>