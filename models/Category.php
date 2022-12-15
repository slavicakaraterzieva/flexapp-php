<?php
class Category{
    private $db;

public function __construct(){
$this ->db = new Database();}//end of construct

public function getCategory(){
$this->db->query('SELECT * FROM categories');
//bind params
$row = $this->db->resultSet();
return $row ;
}//end of get category

public function getCategoryName($category_id){
    $this->db->query('SELECT * FROM categories WHERE category_id = :category_id');
    //bind params
    $this->db->bind(':category_id',$category_id);
    $row = $this->db->single();
    return $row ;
    }//end of get category name

    public function getCatId($cat_title){
        $this->db->query('SELECT * FROM categories WHERE category_title = :category_title');
        //bind params
        $this->db->bind(':category_title',$cat_title);
        $row = $this->db->single();
        return $row ;
        }//end of function   

}//end of class Category

?>