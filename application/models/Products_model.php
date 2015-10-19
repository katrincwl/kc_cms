<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Products_model extends CI_Model{
    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }

    /**
     * @return Result set of all products
     */
    function get_all_products(){
        return $this->db->query('select * from products');
    }


    /**
     * @param int $num : number of records to be limit
     * @return Result set of latest products
     */
    function get_latest_products($num = 1){
        return $this->db->select('*')->limit($num)->get('products');
    }
}