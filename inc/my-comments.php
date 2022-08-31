<?php

require ('./models/Post.php');
$comment=new Comments;
$post=new Post;
$allComments=$comment->getAllUserComments($user_id);
//print_r($allComments);
?>

<table class="table table-hover table-dark mt-5">
  <thead>
    <tr>
      <th scope="col"><h4>Post Id</h4></th>
      <th scope="col"><h4>Sender Name</h4></th>
      <th scope="col"><h4>Sender Email</h4></th>
      <th scope="col"><h4>Comment Body</h4></th>
      <th scope="col"><h4>Date</h4></th>
      <th scope="col"><h4>Delete</h4></th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($allComments as $c): ?>
    <tr>
      <th scope="row"><h4><?php echo $c->post_id; ?></h4></th>
      <th><h4><?php echo $c->sender_name; ?></h4></th>
      <th><h4><?php echo $c->user_email; ?></h4></th>
      <th><h4><?php if($c->comment_body==="comment has been deleted by admin"){
        echo "<del class='text-danger'>$c->comment_body</del>";
      }else{echo $c->comment_body; }?></h4></th>
      <th><h4><?php echo $c->created_at=date("d-m-Y  H:i"); ?></h4></th>
      <th><h4><a href="../../flexapp/php/action.php?cid=<?php echo $c->comment_id;?>&type=del">Delete</a></h4></th>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>