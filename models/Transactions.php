<?php
class Transaction{
private $db;

public function __construct(){
$this ->db = new Database();
}//end of construct

public function getAllTransactions($user_id){
    $this->db->query('SELECT * FROM `payment_records` WHERE user_id = :user_id' );
    $this->db->bind(':user_id', $user_id);
    $row = $this->db->resultSet();
    return $row;
}

 }//end of Transaction
?>