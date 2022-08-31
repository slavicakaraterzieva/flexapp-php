<?php?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  setTimeout(function(){
    $(".display-msg_header").fadeOut("slow");
    $(".display-msg_error").fadeOut("slow");
  }, 2000); 
});
</script>

<section class="display-msg_header" id ="msg-flash">
   <p><i><?php flashSuccess('success');?></i></p> <!-- it works but its not sowing change style to display block -->
  </section>
  <!--success message-->

  <section class="display-msg_error" id ="msg-flash">
    <p><i><?php flashDanger('fail');?></i></p>
  </section>

  <!--error message-->