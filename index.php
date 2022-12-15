<?php include ("bootstrap.php");?>
<!DOCTYPE html>
<html lang="en">
<?php include ("./inc/head.php");?>

<?php include("./inc/scripts.php");?>
<body>
<div class=" my-flex-container">

<?php include ("./inc/header.php");?>

<div class="content">
<?php include("./inc/sidebar.php");?>

<main class="content-center">
 <?php include ("./inc/profile-search.php");?> 

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

  /*   case 'profile-search';
    include ("./inc/profile-search.php");
    break; */

    case 'unpaid-posts';
    include ("./inc/unpaid-posts.php");
    break;

    default ;
    include ("./inc/price-cards.php");
    break;
}
?>
<?php //include ("./inc/price-cards.php");?>
<?php //include ("./inc/posts.php");?>
<?php include ("./inc/popup-modal.php");?>
<?php //include ("./inc/content-form.php");?>

<?php //include ("./inc/profile-search.php");?>
<?php include ("./inc/display-message.php");?>
<?php //include ("./inc/unpaid-posts.php");?>
<?php //include ("./inc/view-profile.php");?>

</main><!--end of main-->

</div><!--end of content-->

<?php include ("./inc/scroll.php");?>

<?php include ("./inc/footer.php");?>

</div><!--end of flex container-->

<body>
</html>
