
 $(document).ready (function(){
  //alert ("loaded");
 
   function unseenComment(check=''){
   var userId=document.getElementById('user_id').value;
      $.ajax({
          url:"../../flexapp/php/getComments.php",
          method:"POST",
          data:{check:check,userId:userId},
          dataType:"JSON",
          success:function(data)
          {
              //alert(data);
              //console.log(data);
               $('.dropdown-menu').html(data.notification);
               $('.countComments').html(data.unseen_notification);
          }
      });
  }
  unseenComment();

  function toggleComments(){ 
    $(".comments").click(function(){
         $(".dropdown-menu").toggle();  
        //alert("clicked");
   });
  } 
  toggleComments();

  function toggleLogin(){
    $(".user-name").click(function(){
      //alert("clicked");
           $("#nav_user-link").toggle();
    })
  }
  toggleLogin();

  function updateComment(){
  $("#comments").addClass('unseen'); 
   $(document).on('mouseleave', '.unseen', function(){ 
    $('.countComments').html('0');
    unseenComment('all comments seen');
   })
  }
  updateComment();
   /*   $('.countComments').html('0');
     unseenComment('all comments seen'); */
})


