<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class User{
private $db;

public function __construct(){
$this ->db = new Database();

  }//end of construct

//register user
public function register($data){
$this->db->query('INSERT INTO users(user_id,user_name, user_email, user_password, user_role) VALUES(:user_name, :user_email, :user_password, :user_role)');
//bind params
$this->db->bind(':user_name',$data['user_name']);
$this->db->bind(':user_email',$data['user_email']);
$this->db->bind(':user_password',$data['user_password']);
$this->db->bind(':user_role',$data['user_role']);
$this->db->bind(':user_id',$data['user_id']);
if($this->db->execute()){
return true;
  }
else{
return false;
  }

}//end of register//

//login
//check if email exists in db
public function check_my_email($user_email){
$this->db->query('SELECT user_email FROM users WHERE user_email = "'.$_POST['email_check'].'" ');
$this->db->bind(':user_email','user_email');
$row = $this->db->single();
return $row;
}//end of check email

//find user by email
public function findUserByEmail($email){
//$this->db->query('SELECT user_email FROM users WHERE user_email = "'.$_POST['login_email'].'" ');
$this->db->query("SELECT * FROM users WHERE user_email ='".$email."'");
$this->db->bind(':user_email','user_email');
$row = $this->db->single();
return $row;

}//find user by email working well, dont tuch it!

//verifyUser
public function verifyUser($db_email, $db_password){
$this->db->query(' SELECT * FROM users  WHERE user_email = :user_email AND user_password = :user_password ');
$this->db->bind(':user_email', $db_email);
$this->db->bind(':user_password', $db_password);
$row=$this->db->single();
if($this->db->rowCount()>0){
return $row;
}
else{return false;}
 }//end of verifyUser

 //get user by id
 public function getUserById($user_id){
  $this->db->query(' SELECT user_id, user_name, user_first_name, user_last_name, user_email, company_email, user_image, user_role, user_ocupation, user_suburb, user_address, user_gender, user_phone, user_bio, user_experiance, user_token, user_linkedin, user_work  FROM users WHERE user_id = :user_id ');
  $this->db->bind(':user_id', $user_id);
  $row=$this->db->single();
  return $row;
   }//end of get user by id

   //get user by user id
   public function getUserByUserId($user_id){
    $this->db->query(' SELECT * FROM users WHERE user_id = :user_id ');
    $this->db->bind(':user_id', $user_id);
    $row=$this->db->single();
    return $row;
     }

   //update img
 public function updateUserImg($data){
  $this->db->query(' UPDATE  users SET user_image = :user_image WHERE user_id = :user_id ');
  $this->db->bind(':user_id', $data['user_id']);
  $this->db->bind(':user_image', $data['user_image']);
  if($this->db->execute()){
    return true;
      }
    else{
    return false;
      }
   }//end of update img

   //update user details from flexapp
   public function updateUserDetails($query,$data){
     $this->db->query($query);
     if(isset($data["user_id"])){
       $this->db->bind(':user_id', $data["user_id"]);
     }

     if(isset($data["user_first_name"])){
      $this->db->bind(':user_first_name', $data["user_first_name"]);
    }

    if(isset($data["user_last_name"])){
      $this->db->bind(':user_last_name', $data["user_last_name"]);
    }

    if(isset($data["company_email"])){
      $this->db->bind(':company_email', $data["company_email"]);
    }

    if(isset($data["user_ocupation"])){
      $this->db->bind(':user_ocupation', $data["user_ocupation"]);
    }

    if(isset($data["user_suburb"])){
      $this->db->bind(':user_suburb', $data["user_suburb"]);
    }

    if(isset($data["user_address"])){
      $this->db->bind(':user_address', $data["user_address"]);
    }

    if(isset($data["user_gender"])){
      $this->db->bind(':user_gender', $data["user_gender"]);
    }

    if(isset($data["user_phone"])){
      $this->db->bind(':user_phone', $data["user_phone"]);
    }

    if(isset($data["user_bio"])){
      $this->db->bind(':user_bio', $data["user_bio"]);
    }

    if(isset($data["user_experiance"])){
      $this->db->bind(':user_experiance', $data["user_experiance"]);
    }

    if(isset($data["user_work"])){
      $this->db->bind(':user_work', $data["user_work"]);
    }

    if(isset($data["user_linkedin"])){
      $this->db->bind(':user_linkedin', $data["user_linkedin"]);
    }
    if($this->db->execute()){
      return true;
    }
    else{return false;}
   }//end of function

   public function updateUserPassword($user_id,$user_password){
    $this->db->query(' UPDATE  users SET user_password = :user_password WHERE user_id = :user_id ');
    $this->db->bind(':user_id', $user_id);
    $this->db->bind(':user_password', $user_password);
    if($this->db->execute()){
      return true;
        }
      else{
      return false;
        } 
   }

  }//end of User


?>