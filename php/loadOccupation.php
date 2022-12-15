<?php
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../models/Post.php";
require "../models/Job.php";
require "../helpers/session_helper.php";


if(!empty($_POST['subCategoryId'])){
    $job= new Job;
    $occupation_id=$_POST['subCategoryId'];
    $occupation=$job->getJobOccupation($occupation_id);
    echo'<option value="select" id="selectedOccupation">Select</option>';
   
    foreach($occupation as $o){
        
        echo '<option value="'.$o->parent_occupation_id.'" data-value = "'.$o->occupation_title.'" id="selectedOccupation">'.$o->occupation_title.'</option>';
    }
   echo'<option value="insert_occupation">enter new occupation</option>';
}
//end if
  
?>