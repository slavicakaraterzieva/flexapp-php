<?php
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../helpers/session_helper.php";
require "../helpers/url_redirect.php";
require "../models/Post.php";
require "../models/Comments.php";
$comment = new Comments;
$comment_status=0;

  if(isset($_POST['check']) && isset($_POST['userId'])){
    $POST=filter_var_array($_POST, FILTER_SANITIZE_STRING);
     $user_id=$POST['userId'];
    if($_POST['check']!=""){
        $updateComments=$comment->updateStatus();} 

    $result=$comment->getAllComments($user_id);
    $output='';
    if($result){
        foreach($result as $row){
            $output .='
            <li> 
            <p class="ml-5 text-danger">'.$row->sender_name.'</p>
            <p class="ml-2 text-success">'.$row->comment_body.'</p> 
            <a href="../../flexapp/comments-table.php">read comments</a>
            </li>';
        }
    
    } 
    else{
        $output .='<li> <p class="text-danger p-3"> no comments </p> 
        <a href="../../flexapp/comments-table.php">read comments</a>
        </li>';
      
   }
   $comment_status=0;
   $countComments=$comment->getUnseenCount($comment_status,$user_id);
   $data=array(
       'notification'=>$output,
       'unseen_notification'=>$countComments
   );
   echo json_encode($data);
  } 
 ?>