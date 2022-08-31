<?php 
require_once("./models/User.php");
$user = new User;
$getUser = $user->getUserById($user_id);
//print_r($getUser);
?>
<section class="content-form d-flex justify-content-center align-items-center flex-wrap">
<div class="heading-tertiary">Edit User Details</div>

<form method="POST" class="profile-form" action="../../flexapp/php/update-details.php" enctype="multipart/form-data">

   <div class="label-style">
     <label for="first_name">First Name</label>
     <input type="text" class="input-style" name="first_name" id="frst_name" placeholder="<?php echo $getUser->user_first_name; ?>" autocomplete="off">
   </div>
 
   <div class="label-style">
     <label for="last_name">Last Name</label>
     <input type="text" class="input-style" name="last_name" id="last_name" placeholder="<?php echo $getUser->user_last_name; ?>" autocomplete="off">
   </div>

   <div class="label-style">
     <label for="company_email">Your Email</label>
     <input type="email" class="input-style" name="company_email" id="company_email" placeholder="<?php echo $getUser->company_email; ?>" autocomplete="off">
   </div>

   <div class="label-style">
     <label for="user_phone">Your Number</label>
     <input type="text" class="input-style" name="user_phone" id="user_phone" placeholder="<?php echo $getUser->user_phone; ?>" autocomplete="off">
   </div>

   <div class="label-style">
     <label for="address">Address</label>
     <input type="text" class="input-style" name="address" id="address" placeholder="<?php echo $getUser->user_address; ?>" autocomplete="off" >
   </div>
   
   <div class="label-style">
     <label for="postal_code">Postal Code</label>
     <input type="text" class="input-style" name="postal_code" id="postal_code" placeholder="<?php echo $getUser->user_suburb; ?>" autocomplete="off" >
   </div>

   <div class="profile-form_right-select">
         <div class="label-style">
           <label  for="select_gender">Select Gender</label>
           <select  class="form-control select-style input-style" name="select_gender" id="select_gender" >
             <option value="<?php echo $getUser->user_gender; ?>" selected><?php echo $getUser->user_gender; ?></option>
             <option value="male">male</option>
             <option value="female">female</option>
           </select>
         </div>
       </div>

      <!--text editor-->
 <div class="label-style">
   <label for="user_bio">Enter Your Bio</label>
   <textarea class="input-style" rows="6" name="user_bio" id="user_bio" placeholder="<?php echo $getUser->user_bio; ?>" autocomplete="off" ></textarea>
 </div>
 <!--text editor--> 
 
 <div class="profile-form_right-select">
         <div class="label-style">
           <label  for="work_experiance">Work Experiance</label>
           <select  class="form-control select-style input-style" name="work_experiance" id="work_experiance">
             <option value="<?php echo $getUser->user_experiance; ?>" selected><?php echo $getUser->user_experiance; ?></option>
             <option value="-5">-5</option>
             <option value="+5">+5</option>
           </select>
         </div>
       </div>

 <div class="label-style">
     <label for="ocupation">Your Ocupation</label>
     <input type="text" class="input-style" name="ocupation" id="ocupation" placeholder="<?php echo $getUser->user_ocupation; ?>" autocomplete="off" >
   </div>

   <div class="label-style">
     <label for="company">Company Name</label>
     <input type="text" class="input-style" name="company" id="company" placeholder="<?php echo $getUser->user_work; ?>" autocomplete="off" >
   </div>

   <div class="label-style">
     <label for="linkedin">Your Linkedin Profile</label>
     <input type="text" class="input-style" name="linkedin" id="linkedin" placeholder="<?php echo $getUser->user_linkedin; ?>" autocomplete="off" >
   </div>

   <br>
 <!--submit btn-->
 <div class="">
   <button type="submit" class="form-btn" id="update_user" name="update_user">Submit Changes</button>
 </div>
 <br>
</form>
</section>