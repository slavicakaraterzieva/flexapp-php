<?php
class Realestate{
    private $db;

public function __construct(){
$this ->db = new Database();}//end of construct

public function insertRealEstateAd($user_id, $post_title, $post_cat_id,  $post_content, $content_price, $post_featured_img, $full_address, $post_status, $post_type){
    $this->db->query('INSERT INTO posts(user_id, post_title, post_cat_id, post_content, content_price, post_featured_img, full_address, post_status, post_type ) 
    VALUES(:user_id, :post_title, :post_cat_id, :post_content, :content_price, :post_featured_img, :full_address, :post_status, :post_type)');
//bind params
$this->db->bind(':user_id',$user_id);
$this->db->bind(':post_title',$post_title);
$this->db->bind(':post_cat_id',$post_cat_id);
$this->db->bind(':post_content',$post_content);
$this->db->bind(':content_price',$content_price);
$this->db->bind(':post_featured_img',$post_featured_img);
$this->db->bind(':full_address',$full_address);
$this->db->bind(':post_status',$post_status);
$this->db->bind(':post_type',$post_type);

if($this->db->execute()){
return true;
  }
else{
return false;
  }
}//end of insertRealEstateAd


//insertPaymentRecords
public function insertPaymentRecords(){

$this->db->query('INSERT INTO `payment_records`(`post_id`,`user_id`,`post_price`,`post_start_date`) 
SELECT `post_id`,`user_id`,`post_type`,`created_at` 
FROM `posts` WHERE `post_id` NOT IN (SELECT `post_id` FROM `payment_records`)');
if($this->db->execute()){
return true;
}
else{
return false;
}
}//end of insertPaymentRecords

//get all payment records
public function paymentId(){
$this->db->query('SELECT * FROM payment_records');
$row=$this->db->resultSet(); 
return $row;

}//end of all payment records

// functionpostCalculatedPrice
public function postCalculatedPrice(){

  $this->db->query('UPDATE `payment_records`SET `post_calculated_price`=SUBSTRING(`post_price`,-1) WHERE `post_calculated_price`=0');
  if($this->db->execute()){
  return true;
  }
  else{
  return false;
  } 
  }//end of postCalculatedPrice

  //function to set expiry of free add
  public function expiryDateFree($date_expired_free){
    $this->db->query('UPDATE `payment_records` SET `post_end_date`=:post_end_date WHERE `post_price`="free 0" AND `post_end_date`= "0000-00-00" ORDER BY `post_id` DESC '  );
    $this->db->bind(':post_end_date', $date_expired_free);
    $row =$this->db->execute();
    return $row;  
 }

 //additional information for estate ad insert into estate table
 public function insertRealEstate($posts_id,$post_property_type,$floor,$lounge,$kitchen,$bedroom,$bath,$wc,$parking,$sale_type,$outdoor_features){
  $this->db->query('INSERT INTO estate(posts_id, post_property_type, floor, lounge, kitchen, bedroom, bath, wc, parking, sale_type, outdoor_features) 
  VALUES(:posts_id, :post_property_type, :floor, :lounge, :kitchen, :bedroom, :bath, :wc, :parking, :sale_type, :outdoor_features)');
//bind params
$this->db->bind(':posts_id',$posts_id);
$this->db->bind(':post_property_type',$post_property_type);
$this->db->bind(':floor',$floor);
$this->db->bind(':lounge',$lounge);
$this->db->bind(':kitchen',$kitchen);
$this->db->bind(':bedroom',$bedroom);
$this->db->bind(':bath',$bath);
$this->db->bind(':wc',$wc);
$this->db->bind(':parking',$parking);
$this->db->bind(':sale_type',$sale_type);
$this->db->bind(':outdoor_features',$outdoor_features);
//$this->db->bind(':internet',$internet);
if($this->db->execute()){
return true;
}
else{
return false;
}
}
//end of insert real estate additional info

public function getRealEstatePost($post_id){
  $this->db->query('SELECT * FROM posts, estate WHERE posts.post_id=:post_id AND estate.post_id=:posts_id');
  $this->db->bind(':post_id', $post_id);
  $this->db->bind(":posts_id", $post_id);
  $row=$this->db->single(); 
  return $row;
 } 


 public function getRealEstate($post_id){
  $this->db->query('SELECT * FROM estate WHERE post_id=:posts_id');
  $this->db->bind(":posts_id", $post_id);
  //$this->db->bind(":posts_id", $post_id);
  $row=$this->db->resultSet();
  return $row;
  }
 }//end of class Realestate

  /* SELECT `post_type`, SUBSTRING(`post_type`,-3) FROM `posts`
 SELECT `post_price`,SUBSTRING(`post_price`,-3) FROM `payment_records` 
 UPDATE `payment_records` SET`post_calculated_price`=`post_price` WHERE `user_id`=`user_id`
 UPDATE `payment_records` SET `post_calculated_price`=SUBSTRING(`post_price`,-3)`
 SELECT * FROM `payment_records` Where `post_calculated_price`=0
 UPDATE `payment_records` SET`post_calculated_price`=SUBSTRING(`post_price`,-1) Where `post_calculated_price`=0
 INSERT INTO `payment_records`(`post_id`,`user_id`,`post_price`,`post_start_date`) 
 SELECT `post_id`,`user_id`,`post_type`,`created_at` FROM `posts` WHERE `post_id` NOT IN (SELECT `post_id` FROM `payment_records`) */
 
?>
