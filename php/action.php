<?php
//echo  "Something";
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../helpers/session_helper.php";
require "../helpers/url_redirect.php";
require "../models/Post.php";
require "../models/Comments.php";

if(isset($_GET['cid']) && isset($_GET['type']) && $_GET['type']==="del"){
//echo"we're in";
  $GET=filter_var_array($_GET,FILTER_SANITIZE_STRING);
  $comment_id=$GET['cid'];
  $comment = new Comments;
  $deleted=$comment->deleteComment($comment_id);
  if($deleted){
redirect('../../flexapp/comments-table.php');}
}
?>