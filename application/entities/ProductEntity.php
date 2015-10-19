<?php
require_once APPPATH.'entities/Product_imagesEntity.php';

class ProductEntity{
    public $id;
    public $name;
    public $description;
    public $created_at;
    public $updated_at;
    public $created_by;
    public $updated_by;

    /* A read-only method to return relating product_images as an array */
    public function images(){
        $ci =& get_instance();
        $query = $ci->db->query("select * from product_images where pid = ".$this->id);
        return $query->custom_result_object('Product_imagesEntity');
    }
}