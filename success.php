<?php
include ("./vendor/autoload.php");
include ("./bootstrap.php");
include ("./models/stripeCustomer.php");
include ("./models/Post.php"); 
?>


<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA Compatible" content="ie-edge">
<!--fonts-->
        <link rel="stylesheet" type="text/css" href="./sass/vendors/font-awesome/fontawesome-free/css/all.css" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Nunito:wght@200;300;400&family=Oxygen:wght@300;400&family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="./css/flexstyle.css">
       
       
<!--bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./sass/vendors/bootstrap/css/bootstrap.css">
        
        <title>Profile Admin App</title>
    </head>
    <body>
<!--bootstrap again-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="./sass/vendors/bootstrap/css/bootstrap.min.css"></script>
        <script src="./sass/vendors/bootstrap/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="./sass/vendors/jquery3.5.0.js"></script>
<!--my scripts-->
        <script src="/js/scroll.js"></script>
      
<div class=" my-flex-container">
    <div class="content">

   <!--the if and foreach to connect to post table and stripe_customer table-->   
   <?php if(isset($_SESSION['user_id'])){
    $user_id = $_SESSION['user_id'];
     /* $stripeCustomer = new stripeCustomer();
       $findstripeData=$stripeCustomer->findCustomerById($user_id);
        foreach($findstripeData as $c){
        echo "<option value = '$c->user_id'> $c->user_id </option>";
        echo "<option value = '$c->first_name'> $c->first_name </option>"; 
        echo "<option value = '$c->last_name'> $c->last_name </option>";
        echo "<option value = '$c->email'> $c->email </option>";
        echo "<option value = '$c->amount'> $c->amount </option>";
        echo "<option value = '$c->created_at'> $c->created_at </option>";
       } 
      
        $postData = new Post();
        $stripePost = $postData->postData($user_id);
        foreach($stripePost as $d){
        echo "<option value = '$d->post_id'> $d->post_id </option>";
        echo "<option value = '$d->post_title'> $d->post_title </option>";   
        } */ 
  ?>
 
 <?php    $posts_ids = array_column($_SESSION['shopping_cart'],'id','title');
           //print_r($posts_ids);  ?>
        <?php $count = count($_SESSION['shopping_cart']); ?>
        <?php if (isset($_GET['type'])){
         $type = $_GET['type'];
       //echo $type; ?>
 
      <!--main-->
<main class="content-center text-center">


<div class="jambotron text-xs-center mb-5"style="height:95vh" >

<svg style="height:8rem; width:8rem; fill:#25d366">
    <use xlink:href="./svg/symbol-defs.svg#icon-checkmark"></use>
</svg>

<?php $stripeCustomer = new stripeCustomer();
    $findstripeData=$stripeCustomer->findCustomerById($user_id);?>

    <!--foreach stripe-->
    <?php foreach($findstripeData as $c){?>
        
   <h1 class="display-2 mb-5">Thanks for your payment!</h1>

   <h3> <?php echo "Stripe payment has been done!"?></h3>
  <?php   }?> <!-- end of isset $_GET['type'] -->

   <h2><?php echo " $c->first_name " ?></h2>

    <p class="lead"><strong>Please check your email! </strong> <b><?php echo " $c->email"; ?></b></p>

     <p class="lead"><strong>This is the amount paid:</strong>
                <?php echo " $c->amount"; ?> cent</p>
     <?php }?>
<!--end of foreach stripe-->
<?php }  ?><!--this is where the if ends-->

<div class="text-center">
         <!--foreach post-->
         <p class="lead"><strong>This is the add/s you paid for </strong></p>
        <?php if(!empty($count)){
          foreach ($_SESSION['shopping_cart'] as $key => $post_product){ ?>
           <?php $post_status ="paid";
           $post_id=$post_product['id'];
           $price=$post_product['price'];
           $user_id = $_SESSION['user_id'];
           $update_table=$stripeCustomer->updatePostsTable($post_status,$user_id,$post_id);
           
            $post = new Post();
            $row = $post->getPostByUserPayment($post_id);
            $post_price=$row->post_price;
            $post_id=$row->post_id;
            $date_paid=date("Y-m-d  H:i:s");
            $update_payment=$stripeCustomer->postPayedDate($date_paid,$post_id);
            //echo $post_price;
            //echo $post_id;
             //calculate expiry date
                if($post_price==="standard 1"){
                  $date_expired_standard=date('Y-m-d',strtotime("+1 month"));
                  $expiry_standard=$stripeCustomer->expiryDateStandard($date_expired_standard,$post_id);
                   //echo "standard expires on ".$date_expired_standard;
                }
                if($post_price==="premium 5"){
                  $date_expired_premium=date('Y-m-d',strtotime("+6 months"));
                  $expiry_premium=$stripeCustomer->expiryDatePremium($date_expired_premium,$post_id);
                  //echo "premium expires on ".$date_expired_premium;
                }
               
              //end of calculate expiry date
            ?>
            <p class="lead"><strong>Id: </strong><b><?php echo  $post_product['id'].", " ; ?></b>
            <strong>Title: </strong><b><?php echo  $post_product['title'].", " ; ?></b>
            <strong>Price: </strong><b><?php echo  $post_product['price']."$" ; ?></b></p>
          <?php } //end of foreach
          } else{redirect("./cart.php");}?><!--end of if-->

    <h5><strong>You can see your transactions:</strong><a href="./inc/my-transactions.php"> here</a></h5>
    <h5 class="mb-5"><strong>Having trouble?</strong>
            <a href="">contact us</a></h5>
    <a href="index.php" class="btn btn-success btn-lg mb-3" role="button">Home Page</a>
</div>

</div>  
   </main>
 <!--end of main-->
<!-- unset the session here -->
<?php if (!empty($count)){
  foreach ($_SESSION['shopping_cart'] as $key => $post_product){
    unset($_SESSION["shopping_cart"][$key]);
  }
}
 ?>
    </div>
    <!--end of content-->
 
</div>
<!--end of my-flex-container-->

    </body>

</html>