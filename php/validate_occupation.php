<?php 
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../models/Post.php";
require "../models/Job.php";
require "../models/Category.php";
require "../helpers/session_helper.php";
//echo "we are here";
//get the last id in the job _category_id from job_category table
$job = new Job;

$validate_job = new Job;
$validate_occupation = $_POST['validate_occupation'];
//echo $validate_category;

$result = $validate_job->checkOcc($validate_occupation);
if($result){
   
    echo json_encode(array('response'=>'response_success', 'message'=>'category already exists'));

}
else{
    //echo "no record";
    echo json_encode(array('response'=>'response_fail', 'message'=>'no record' ));
}//end of if else to validate job category

?>