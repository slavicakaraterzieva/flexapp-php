<?php
require_once('./models/User.php');

if($_SERVER['REQUEST_METHOD']=='POST'){
    //echo"we can update password";
    $user=new User;
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    $current_password=$POST['old_password'];
    $new_password=$POST['new_password'];
    $confirm_password=$POST['confirm_password'];
    $user_id=$_SESSION['user_id'];
    $update_user=$POST['update_user'];
    $theUser=$user->getUserByUserId($user_id);
    //print_r($theUser);
    $db_password=$theUser->user_password;
    if(empty( $current_password )){
        $current_password_err="Your password is required";
    }
    else{ 
        $current_password_err="";
    if(password_verify($current_password,$db_password)){
        $pattern='/^(?=.*[!@#$%^&*_+-])(?=.*[0-9])(?=.*[A-Z a-z]).{8,20}$/';
       
         if(preg_match($pattern,$new_password)){
             $new_password_err="";
             $confirm_password_err="";

          if($new_password===$confirm_password){
              //echo "paswords match";
              $change_password=password_hash($new_password,PASSWORD_DEFAULT);
               $password_update=$user->updateUserPassword($user_id,$change_password);

            if($password_update){
                echo $password_succes ="<div class='alert alert-danger blockquote text-center' role='alert'>
                <h1> You have updated your password </h1>
                  </div>";

                unset($current_password);
                unset($current_password_err);
                unset($new_password);
                unset($new_password_err);
                unset($confirm_password);
                unset($confirm_password_err);
                unset($update_user);
              }
            else{
                echo $password_fail="<div class='alert alert-danger blockquote text-center' role='alert'>
                <h1> You have not updated yur password </h1>
                  </div>";} 
          }
          else{$confirm_password_err="Passwords are not the same, please try again";}   
        } 
        else{$new_password_err="Your password has to be at least 8 characters long, to contain at least one uppercase letter, one lowercase letter, a number and a special character. And no spaces at he begining or the end";}
    }
      else{$current_password_err="We dont have this password in our database";}
  } 
    
}
?>