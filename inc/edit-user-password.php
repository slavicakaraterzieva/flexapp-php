<?php 
include ('./php/update-password.php');
require_once("./models/User.php");
$user = new User;
$getUser = $user->getUserById($user_id);
//print_r($getUser);
?>

<section class="content-form d-flex justify-content-center align-items-center flex-wrap">
<div class="heading-tertiary">Change Your Password</div>
<div class="row">

<form method="POST" class="profile-form" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" enctype="multipart/form-data">
    
   <div class="label-style">
     <label for="old_password">Current Password</label>
     <input type="password" class="input-style" name="old_password" id="old_password"
      autocomplete="off" >
   </div>

   <?php if(isset($current_password_err)&&$current_password_err!=""):?>
    <div class="alert alert-danger blockquote text-center" role="alert">
      <h1><?php echo $current_password_err; ?></h1>
    </div>
    <?php endif;?>

   <div class="label-style">
     <label for="new_password">New Password</label>
     <input type="password" class="input-style" name="new_password" id="new_password" 
      autocomplete="off" >
   </div>

   <?php if(isset($new_password_err)&&$new_password_err!=""):?>
    <div class="alert alert-danger blockquote text-center" role="alert">
      <h1><?php echo $new_password_err; ?></h1>
    </div>
    <?php endif;?>

   <div class="label-style">
     <label for="confirm_password">Confirm New Password</label>
     <input type="password" class="input-style" name="confirm_password" id="confirm_password" 
      autocomplete="off" >
   </div>

   <?php if(isset($confirm_password_err)&&$confirm_password_err!=""):?>
    <div class="alert alert-danger blockquote text-center" role="alert">
      <h1><?php echo $confirm_password_err; ?></h1>
    </div>
    <?php endif;?>

   <br>
 <!--submit btn-->
 <div class="">
   <button type="submit" class="form-btn" id="update_user" name="update_user" style="width:60%; margin-left:50%; transform:translate(-50%) ">Submit Changes</button>
 </div>
 <br>
  
</form>
</div>
</section>
