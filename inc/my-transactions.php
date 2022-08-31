<?php
require ('./models/Transactions.php');
require ('./models/Post.php');
$trans=new Transaction;
$post=new Post;
$transactions=$trans->getAllTransactions($user_id);
$status=$post->getPosts($user_id);
//print_r($allComments);
?>

<table class="table table-hover mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col"><h4>Post Id</h4></th>
      <th scope="col"><h4>Post type</h4></th>
      <th scope="col"><h4>Price paid</h4></th>
      <th scope="col"><h4>Date paid</h4></th>
      <th scope="col"><h4>Date expired</h4></th>
      <th scope="col"><h4>Extend</h4></th>
    </tr>
  </thead>
  <tbody>
      <?php
      foreach($transactions as $t): 
      foreach($status as $s)?>
    <tr>
      <th scope="row"><h4><?php echo $t->post_id; ?></h4></th>
      <th><h4><?php echo $t->post_price; ?></h4></th>
      <th><h4><?php echo $t->post_calculated_price.'$'; ?></h4></th>
      <th><h4><?php echo $t->date_paid; ?></h4></th>
      <th><h4><?php echo $t->post_end_date; ?></h4></th>
      <th><h4><a href="../../flexapp/php/action.php?pid=<?php echo $t->post_id;?>&type=<?php echo $s->post_status;?>">Update</a></h4></th>
      
    </tr>
    <?php endforeach;?>
  </tbody>
</table>