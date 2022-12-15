
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
<?php //include ("./inc/profile-search.php");?>

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
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script> 

<!--profile form-->
<section class="content-form">
   
   <div class="heading-tertiary">Create Add / Post</div>
  
   <form method="POST" name="multiplesub" id="multiplesub" class="profile-form" action="<?php echo BASE_FLEX?>php/add-post.php" enctype="multipart/form-data">
 
  <div class="categories">
 
      <div class="label-style profile-form_left-select" style="width:30%">
       <label for="post_cat_id" style="line-height:2rem;">Select Category</label>
       <select  class="form-control select-style input-style" name="post_cat_id" id="post_cat_id" onchange="getTheCategory(this.value);">
          <option value="default" selected>select</option> 
          <?php
          include ("./models/Category.php");
          $category = new Category();
          $categories = $category->getCategory();
          foreach($categories as $c){
            echo "<option value = '$c->category_id'> $c->category_title </option>";
          }
          ?>
        </select> 
       </div>
        </div><!--end of categories-->
      
  <br></br>     
 <!--submit btn-->
 <div class="" style="width:100%">
   <a class="form-btn" name="add_post_link" id="add_post_link" href="" style="text-decoration:none">Create</a>
 </div>
 <br>
 <!--end of submit btn-->
   </form>
 
</section>
 <!--end of profile form-->

</main><!--end of main-->

</div><!--end of content-->

<?php include ("./inc/footer.php");?>

</div><!--end of flex container-->

 <!--my scripts-->
 <script src="./js/menuClick.js"></script>
     <script src="./js/scroll.js"></script>
     <script src="./js/response.js"></script>
     <script src="./js/unseenComments.js"></script>
     <script src="./js/switch_category.js"></script>
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