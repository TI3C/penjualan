<?php
class M_data_member extends CI_Model {
  
 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
     
    function list_data(){
        $query = $this->db->get('data_member');// mengambil semua data dari tabel data_member
         
        return $query->result();// mengembalikan ke controller hasil dari query ke table data_barang
    }
	function input($param){
   $this->db->insert('data_member',$param);
   return true;
}
 
function getEdit($id){
   $this->db->where('Id',$id);
   $query = $this->db->get('data_member');
 
   return $query->result();
}
 
function edit($param,$id){
   $this->db->where('Id',$id);
   $this->db->update('data_member',$param);
   return true;
}
function delete($id){
   $this->db->where('Id',$id);
   $this->db->delete('data_member');
}
}