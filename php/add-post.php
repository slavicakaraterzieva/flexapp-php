<?php
require "../config/config.php";
require "../lib/Database.php";
require "../models/User.php";
require "../models/Realestate.php";
require "../models/Img.php";
require "../models/Post.php";
require "../models/Job.php";
require "../models/Category.php";
require "../helpers/session_helper.php";
require "../helpers/url_redirect.php";

if(isset($_POST['submit_realestate_post'])){
  $user = new User;
  $real = new Realestate;
  $record = new Realestate;
  $post = new Post;
  $img = new Img; //function works
   $user_id = $_SESSION['user_id'];
   $post_title = $_POST['post_title'];
   //$post_cat_id = $_POST['post_cat_id'];
   $post_cat_id = "1";
   $content_price = $_POST['content_price'];
   $post_content = $_POST['post_content'];
   $property_type = $_POST['property_type'];
   $post_featured_img = $img->uploadImg($_FILES['file']['name']);
   $full_address = $_POST['full_address'];
   $post_type = $_POST['post_type'];
   $setPrice = $_POST["post_type"];
   $post_status = "unpaid"; 

   $post_property_type = $_POST["property_type"];
   $floor = $_POST["floor"];
   $lounge = $_POST["lounge"];
   $kitchen = $_POST["kitchen"];
   $bedroom = $_POST["bedroom"];
   $bath = $_POST["bath"];
   $wc = $_POST["wc"];
   $parking = $_POST["parking"];
   $sale_type = $_POST["sale_type"];
   $outdoor_features = $_POST["outdoor_features"];
   
   $allImages = "";
  foreach($_FILES['file']['name'] as $key=>$value){
     $filename = $_FILES['file']['name'][$key];
     $allImages = $allImages.",".$filename;
     $upload_dir = ROOT_PATH."/img/posts/";
     $upload_file = $upload_dir.$_FILES['file']['name'][$key];
     move_uploaded_file($_FILES['file']['tmp_name'][$key],$upload_file); 
  }  //foreach

  $addRealEstatePost= $real->insertRealEstateAd($user_id, $post_title, $post_cat_id, $post_content, $content_price, $post_featured_img, $full_address, $post_status, $post_type);
  $addPaymentRecord= $record->insertPaymentRecords();
  $addPaymentPrice= $record->postCalculatedPrice();  

  //expiry date for free card
  $userPosts = $post->getAllPosts($user_id);
 //print_r($userPosts);
 if($userPosts){
   foreach($userPosts as $p){
     $thePost = $post->getPostByPostId($p->post_id);
     $post_type=$p->post_type;
     $post_id=$p->post_id;
     if($post_type==="free 0"){
      $date_expired_free=date('Y-m-d',strtotime("+15 days"));
      $expiryDateFree=$record->expiryDateFree($date_expired_free);
         }
      }
      $thePostId = $post->getPostId();
      $post_id = $thePostId->post_id;
      $addRealEstate=$real->insertRealEstate($posts_id=$post_id,$post_property_type,$floor,$lounge,$kitchen,$bedroom,$bath,$wc,$parking,$sale_type,$outdoor_features);  
 }
 //end of expiry date
 
  // $addPaymentPrice= $record->setPaymentByType($setPrice); 
      if($addRealEstatePost && $addRealEstate){
      flashSuccess('success', 'Estate Post Created');
      redirect('index');
  }
  else{flashDanger('fail', 'Estate Post Not Created');
      redirect('index');
  }; 

  //function to update payment records with date paied from stripe join two tables on same user id
}    //isset

//submit category
if(isset($_POST['submit_category'])){
  //echo "we are in category";
  $job = new Job();
 /*  $job_id=$job->getJobCatId(); 
  $jobs_id=$job_id->job_category_id; */
  $new_cat=$_POST["new_category"];
  $parent_id="2";
  $newCategory=$job->newCategory($new_cat, $parent_id);

  if($newCategory){
    flashSuccess('success', 'New Category Created');
    redirect('job');
}
else{flashDanger('fail', 'New Category Not Created');
    redirect('create_new_cat');
}
   }//end of submiting new category


//submiting job
    if(isset($_POST['submit_job_post'])){
      //echo"we are doing jobs now";
      $user = new User;
      $post = new Post;
      $img = new Img; //function works
      $cat = new Category;
      $job = new Job;
      $record = new Realestate;
      $user_id = $_SESSION['user_id'];
      $post_title = $_POST['post_title'];
      $content_price = $_POST['content_price'];
      $post_content = $_POST['post_content'];
      $post_featured_img = $img->uploadImg($_FILES['file']['name']);
      $full_address = $_POST['full_address'];
      $post_type = $_POST['post_type'];
      $post_status = "unpaid"; 
      $post_cat_id = "2";
      $allImages = "";
      foreach($_FILES['file']['name'] as $key=>$value){
        $filename = $_FILES['file']['name'][$key];
        $allImages = $allImages.",".$filename;
        $upload_dir = ROOT_PATH."/img/posts/";
        $upload_file = $upload_dir.$_FILES['file']['name'][$key];
        move_uploaded_file($_FILES['file']['tmp_name'][$key],$upload_file); 
      }  //foreach
//insert the post
      $addJobPost = $job->insertJobAd($user_id, $post_title, $post_cat_id, $post_content, $content_price, $post_featured_img, $full_address, $post_status, $post_type);
      $addPaymentRecord= $record->insertPaymentRecords();
      $addPaymentPrice= $record->postCalculatedPrice(); 

      $post_id=$post->getPostByPostId($user_id);
      $posts_id=$post_id->post_id;
      $parent_id = $_POST['select_job_category'];
      $parent_sub_id = $_POST['select_job_subcategory'];
      $occupation_id = $_POST['job_occupation_list'];
      $salary = $_POST['content_price'];
      $hourly_rate = $_POST['hourly_rate'];
      $contact_email = $_POST['contact_email'];
      $contact_phone = $_POST['contact_phone'];
      $application_link = $_POST['application_link'];
      $employment_type = $_POST['employment_type'];

      $job_title = $_POST['select_job_category'];
      $sub_name = $_POST['new_subcategory'];
      $occupation_name = $_POST['new_occupation'];

      $job_title = $job->getJobTitle($job_title);
      $job_name =$job_title ->job_category_title;

      /*$sub_title = $job->getSubTitle($sub_title);
      $sub_name = $sub_title->specific_sub_title;

      $occupation_title = $job->getOccupationTitle($occupation_title);
      $occupation_name =$occupation_title ->occupation_title; */

      $thePostId = $post->getPostId();
      $post_id = $thePostId->post_id;
      //echo $post_id;
     
  //insert the job post
      $addJob = $job->addJob($posts_id=$post_id, $job_name, $sub_name, $occupation_name, $salary, $hourly_rate, $contact_email, $contact_phone, $application_link, $employment_type);
  //insert new sub
      $get_last_id=$job->getJobCatId();
      $last_id=$get_last_id->job_category_id;
      $insertSub=$job->addSub($sub_name, $last_id);
  //insert new occupation
      $insertOcc=$job->addOccupation($occupation_name, $last_id);

    //echo $addJob;
      $userPosts = $post->getAllPosts($user_id);
      //print_r($userPosts);
      if($userPosts){
        foreach($userPosts as $p){
          $thePost = $post->getPostByPostId($p->post_id);
          $post_type=$p->post_type;
          $post_id=$p->post_id;
          if($post_type==="free 0"){
          $date_expired_free=date('Y-m-d',strtotime("+15 days"));
          $expiryDateFree=$record->expiryDateFree($date_expired_free);
              }   
          }
        }
        
              // $addPaymentPrice= $record->setPaymentByType($setPrice);
              if($addJobPost && $addJob && $insertSub && $insertOcc){
                  flashSuccess('success', 'Job Post Created');
                  redirect('index');
              }
              else{flashDanger('fail', 'Job Post Not Created');
                  redirect('index');
              }; 
      } 
 //end of  isset submit_job_post
 ?>