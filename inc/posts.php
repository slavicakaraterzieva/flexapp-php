<?php?>
 <!--section posts-->
 <div class="heading-tertiary">Active Posts</div>
<section class="section-post">
   
 <div class="row">
   <?php
   require_once ROOT_PATH."/models/User.php";
   require_once ROOT_PATH."/models/Category.php";
   require_once ROOT_PATH."/models/Img.php";
   require_once ROOT_PATH."/models/Post.php";
   require_once ROOT_PATH."/models/Realestate.php";
   $user = new User;
   $category = new Category;
   $post = new Post;
   $img = new Img;
   $estate = new Realestate;
   $record = new Realestate;
   $user_id = $_SESSION['user_id'];
   $userPosts = $post->getAllPosts($user_id);
   //print_r($userPost);

   if($userPosts){
     foreach($userPosts as $p){
       $thePost = $post->getPostByPostId($p->post_id);
       $post_type=$p->post_type;
       $post_id=$p->post_id;
       //$the_featured_img = $thePost->post_featured_img;
       $post_featured_image = trim($thePost->post_featured_img);
       $image_num = $img->getPostImages($post_featured_image);
       $post_featured_image_pieces = $img->getAllImages($post_featured_image);
       //print_r($post_featured_image_pieces);
       $getRealEstate=$estate->getRealEstatePost($post_id);
       $postInfo = $post->getPostUserInfo($post_id);
        //print_r($postInfo);
        $post_category = $category->getCategoryName($postInfo->post_cat_id);
        $cat_name = $post_category->category_title;
        //echo $cat_name;
   ?>
  <!--third card bye a house-->
  <div class="col-md-4 col-sm-6">
       <!--third add-->    
           <div class="post">
   <div class="post-total_images"><?php echo $image_num;?></div>
   <h3 class="post-heading"><?php echo $p->post_title?></h3>
         

   <!--carosel-->
   <div id="myCarousel-300-<?php echo $p->post_id;?>" class="carousel slide post_img" data-ride="carousel" data-interval="false">
   <!--indicators-->
   <ol class="carousel-indicators">
   <?php
   if($image_num==1){
    echo '<li data-target="#carouselExampleIndicators-?php echo $p->post_id;?>" data-slide-to="0" class="active" ></li>';
   }
   else{
     if($image_num>1){
       for($i=0; $i<$image_num; $i++){
        echo '<li data-target="#carouselExampleIndicators-<?php echo $p->post_id;?>" data-slide-to="'.$i.'" ></li>';
       }
     }
   }
   ?>
   </ol>
      <!--end of indicators-->

          <!-- Wrapper for slides carosel inner-->
<div class="carousel-inner">
       <?php
  if($image_num == 0){
    echo '<div class="item active carosel-item">
           <img src="./img/users/img-button.png" alt="default">
         </div>';}
    //end of first if it works
    if($image_num == 1){
      echo '<div class="item active carosel-item">
             <img src="./img/posts/'.$post_featured_image_pieces[0].'" alt="first slide">
           </div>';
    }//it works
   else{
    for($i=1; $i<$image_num; $i++){
      if($image_num >= 0){
        echo '<div class="item active carosel-item">
             <img src="./img/posts/'.$post_featured_image_pieces[0].'" alt="second slide">
           </div>';
      }
      echo '<div class="item carosel-item">
             <img src="./img/posts/'.$post_featured_image_pieces[$i].'" alt="third slide">
           </div>';
    }
  }//it works 
        ?>
</div>
      <!--end of wrapper for slides carosel inner--> 

       <!-- Left and right controls working without carosel inner-->
       <a class="left carousel-control" href="#myCarousel-300-<?php echo $p->post_id;?>" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="right carousel-control" href="#myCarousel-300-<?php echo $p->post_id;?>" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <!--end of carousel-->

      <div class="post-price">
          <h3 class="post-price_margin"><sup>$</sup><?php echo $p->content_price*100;?> </h3>
      </div>


      
    <div class="post-icons">
      
       <div class="advertisement-svg-icon">
         <?php if($cat_name =="realestate"):?>
                 <svg>
                     <use xlink:href="svg/symbol-defs.svg#icon-home_filled"></use>
                 </svg>
                 <span><?php if (isset($getRealEstate->post_property_type)) {echo $getRealEstate->post_property_type;} ?></span>

                 <svg>
                     <use xlink:href="svg/symbol-defs.svg#icon-hotel"></use>
                 </svg>
                 <span><?php if (isset($getRealEstate->bedroom)) {echo $getRealEstate->bedroom;}?></span>

                 <svg>
                     <use xlink:href="svg/symbol-defs.svg#icon-connection"></use>
                 </svg>
                 <span>Wifi <?php if (isset($getRealEstate->internet)) {echo $getRealEstate->internet;}?></span>
                 <?php endif ?>
             </div>
             <!-- end of svg icons -->
   </div>
   

      <div class="post-description">
          <p class="post-description_content">
             <?php
             echo $p->post_content;
             ?>
          </p>
      </div>
   
     
      <div class="post-link">
    <!--       <a href="#payment" class="post-link_edit post-link_add">add to cart<i class="fa fa-shopping-cart"></i></a> 
          <br></br>
          <a href="#payment" class="post-link_del post-link_checkout">checkout<i class="fa fa-shopping-bag"></i></a> --> 
          <a href="#" class="post-link_edit post-link_add">edit<i class="fa fa-edit"></i></a> 
          <br></br>
          <a href="#" class="post-link_del post-link_checkout">delete<i class="fa fa-trash"></i></a>
      </div>
   
      
   <div class="post-details">
     <div class="post-details_date-posted">
       <span><i class="fa fa-calendar "></i><?php echo $post->getPostDate($p->created_at);?></span>
     </div>
   
     <div class="post-details_location">
         <span><i class="fa fa-map "></i><?php echo $p->full_address?></span>
     </div>
   
     <div class="post-details_paid-status">
         <span><i class="fa fa-dollar "></i><?php echo $p->post_status;?>: <?php echo $p->post_type."$";?></span>
     </div>
   
   </div>
   
           </div>
           <!--end of card3-->
       </div>
       <!--end of add3-->
  
 
  <?php
     }//end of foreach
    }//end of if
  ?> 
 </div>
   <!--end of row-->
</section>
    <!--end of section-posts-->