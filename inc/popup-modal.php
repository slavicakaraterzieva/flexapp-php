<?php?>
  <!--popup section-->
  <section class="popup-section start" id="modal_popup">
   
   <div class="popup">
     <div class="popup-content">
   
       <div class="popup-header">
         <h3 class="popup-header_title heading-modal">Add Photo</h3>
         <a class="close popup-header_close" href="">X</a>
       </div>
   <!--end of header-->
       <div class="popup-body">
   
   <form action="<?php echo BASE_FLEX?>php/add-photo.php" method="POST" enctype="multipart/form-data">
   <div class="form-group">
     <input type="file" name="file" id="file" class="form-control input-style" required>
   </div>
   
   <div class="popup-submit">
     <input type="submit" name="img_submit" class="popup-submit_btn-modal" value="submit" >
         </div>
     <!--end of footer-->
   </form>
       </div>
   <!--end of body-->
    
     </div>
     <!--end of popup content-->
   </div>
   <!--end of popup-->
   </section>
   <!--end of popup section-->