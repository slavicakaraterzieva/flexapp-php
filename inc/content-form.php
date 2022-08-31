<?php?>
 <!--profile form-->
 <section class="content-form">
   
   <div class="heading-tertiary">Create Add / Post</div>
  
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
           <option value="1" selected>estate</option>
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