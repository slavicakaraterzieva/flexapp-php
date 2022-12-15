<?php
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../models/Post.php";
require "../models/Job.php";
require "../helpers/session_helper.php";


 if(!empty($_POST['categoryID'])){
    $job= new Job;
$parent_sub_id=$_POST['categoryID'];
$query=$job->getJobCategory($parent_sub_id);

echo'<option value="select" id="selectedSub">Select</option>';

foreach($query as $q){
    
    echo '<option value="'.$q->parent_sub_id.'" data-value = "'.$q->specific_sub_title.'" id="selectedSub">'.$q->specific_sub_title.'</option>';

}
 echo '<option value="insert_subcategory">enter new subcategory</option>';
 } 
 

//end if
  
?>