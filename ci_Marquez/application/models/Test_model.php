<?php

class Test_model extends CI_Model {
  
    function fetchItems($table,$array=NULL){
        if($array!=NULL){
        $this->db->where($array);
        }
        $query = $this->db->get($table); // SELECT * FROM item_tbl
        return $query->result();
    }
    
    function deleteItem($table,$array=NULL){
        if($array!=NULL){
            $this->db->where($array);
             $this->db->delete($table);
        }else{
            $this->db->empty_table($table); 
        } 
    }
    
    function insertRecord($table,$data=NULL){
        $this->db->insert($table,$data);
    }
    
    function updateRecord($table,$data=NULL,$id){
            $this->db->where('item_id',$id);
             $this->db->update($table,$data);
    }
}
