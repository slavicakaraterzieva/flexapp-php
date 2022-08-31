<?php ?>
<section class="content-form d-flex justify-content-center align-items-center flex-wrap">
<div class="heading-tertiary">Complete User Details</div>

<form method="POST" class="profile-form" action="../../flexapp/php/update-details.php" enctype="multipart/form-data">

   <div class="label-style">
     <label for="first_name">First Name</label>
     <input type="text" class="input-style" name="first_name" id="frst_name" placeholder="enter your first name" autocomplete="off">
   </div>
 
   <div class="label-style">
     <label for="last_name">Last Name</label>
     <input type="text" class="input-style" name="last_name" id="last_name" placeholder="enter your last name" autocomplete="off">
   </div>

   <div class="label-style">
     <label for="company_email">Your Email</label>
     <input type="email" class="input-style" name="company_email" id="company_email" placeholder="enter your/company email" autocomplete="off">
   </div>

   <div class="label-style">
     <label for="user_phone">Your Number</label>
     <input type="text" class="input-style" name="user_phone" id="user_phone" placeholder="enter your phone number without spaces between numbers" autocomplete="off">
   </div>

   <div class="label-style">
     <label for="address">Address</label>
     <input type="text" class="input-style" name="address" id="address" placeholder="enter your address" autocomplete="off" >
   </div>
   
   <div class="label-style">
     <label for="postal_code">Postal Code</label>
     <input type="text" class="input-style" name="postal_code" id="postal_code" placeholder="enter your postal code" autocomplete="off" >
   </div>

   <div class="profile-form_right-select">
         <div class="label-style">
           <label  for="select_gender">Select Gender</label>
           <select  class="form-control select-style input-style" name="select_gender" id="select_gender" >
             <option value="default" selected>default</option>
             <option value="male">male</option>
             <option value="female">female</option>
           </select>
         </div>
       </div>

      <!--text editor-->
 <div class="label-style">
   <label for="user_bio">Enter Your Bio</label>
   <textarea class="input-style" rows="6" name="user_bio" id="user_bio" placeholder="enter your bio" autocomplete="off" ></textarea>
 </div>
 <!--text editor--> 
 
 <div class="profile-form_right-select">
         <div class="label-style">
           <label  for="work_experiance">Work Experiance</label>
           <select  class="form-control select-style input-style" name="work_experiance" id="work_experiance">
             <option value="0" selected>0</option>
             <option value="-5">-5</option>
             <option value="+5">+5</option>
           </select>
         </div>
       </div>

 <div class="label-style">
     <label for="ocupation">Your Ocupation</label>
     <input type="text" class="input-style" name="ocupation" id="ocupation" placeholder="enter your ocupation" autocomplete="off" >
   </div>

   <div class="label-style">
     <label for="company">Company Name</label>
     <input type="text" class="input-style" name="company" id="company" placeholder="enter your company name" autocomplete="off" >
   </div>

   <div class="label-style">
     <label for="linkedin">Your Linkedin Profile</label>
     <input type="text" class="input-style" name="linkedin" id="linkedin" placeholder="linkedin profile link" autocomplete="off" >
   </div>

   <br>
 <!--submit btn-->
 <div class="">
   <button type="submit" class="form-btn" id="update_user" name="update_user">Submit Changes</button>
 </div>
 <br>
</form>
</section>
