   <?php
   include (ROOT_PATH."models/Comments.php");
   include (ROOT_PATH."models/User.php");
    $user = new User;
   if(isset($_SESSION['user_id'])){
       $user_id= filter_var($_SESSION['user_id'],FILTER_SANITIZE_NUMBER_INT);
       //echo $_SESSION['user_id'];
       $the_user = $user->getUserById($user_id);
       //print_r($the_user);
   }
   ?>
  
   <?php
       if(!isLoggedIn()):?>
     <?php logInredirect("login.php");?>
     <?php else:?>
 <!--<?php endif;?> dont touch the redirect -->
 <!--header profile-->
 <header class="header-profile">
       <a href="../../blueapp/index.php" class="">
       <img src="img/img-button.png" alt="logo" class="profile-logo">
       </a>
        <!-- <img src="img/img-button.png" alt="logo" class="profile-logo"> -->
        
        <nav class="nav">
            <div class="nav_box dropdown" id="nav_box">
    
                <svg class="nav_box-icon">
                    <use xlink:href="./svg/symbol-defs.svg#icon-mail2"></use>
                </svg>
                <span class="nav_box-notific"><input type="text" class="d-none" id="user_id" value="<?php echo $user_id?>">0</span>

            <!--comments-->

            <a href="#" class="comments" id="comments">
                <svg class="nav_box-icon">
                     <use xlink:href="./svg/symbol-defs.svg#icon-bubbles3 "></use> 
                </svg> 
                <span class="nav_box-notific countComments"></span>
                
                    <ul class="dropdown-menu" id="ul_dropdown" style="margin-top:-11rem;">
                     </ul>
               </a> 
            <!--end of comments-->

              <a href="cart">
               <svg class="nav_box-icon nav_box-icon-cart">
                <use xlink:href="./svg/symbol-defs.svg#icon-cart"></use> 
               </svg>
              </a>
               <span class="nav_box-notific">
              
               <?php 
               if(isset($_SESSION['shopping_cart'])):?>
               <?php echo  $count=count($_SESSION['shopping_cart']);?>
               <?php else:?>
               <?php
                echo "0";
               ?>
               <?php endif?><!--it works-->
               
               </span>
           
            </div>
<!--end ov nav box-->

<div class="nav_user" >
<!--don't use bootstrap classes on this use simple jquery toggle method, it messes up the comments bootstrap class-->

   <img src="<?php echo BASE_FLEX?>img/users/<?php if($the_user->user_image!=""){echo $the_user->user_image;}
   else{echo "skfacebook.jpg";}?>" alt="photo" class="nav_user-photo">

<a href="#" id= "user-name" class="user-name">
   <?php
       if(!isLoggedIn()):?>
     <?php logInRedirect("login.php");?>
     <?php else:?>
        <span class="nav_user-name"><?php echo $the_user->user_name;?> &#9660;</span>
        <?php endif;?>
        
    <ul class="nav_user"style="margin-top:-20px" >
      <li class="nav_user-item" style="list-style-type:none;">
         <a href="<?php echo BASE_URL?>php/logout.php" class="nav_user-link" id="nav_user-link" >
            <svg class="nav_box-icon" >
                <use xlink:href="./svg/symbol-defs.svg#icon-redo2"></use> 
           </svg>
           <span>Sign out</span>
         </a>
      </li>
    </ul>
 </a>

</div> 
<!--end of nav user-->

 <div class="nav_online">
                
    <span class="nav_note u-online"></span>
 </div>
        </nav>
    </header>
    <!--end of header-->

