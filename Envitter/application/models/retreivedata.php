<?php
class retreivedata extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function getData(){
          $query=$this->db->get('cat_name');
          return $query->result();
        }

        public function insertassigned($name,$cat_id,$contact){
         $data=array('id'=>'1','person'=>$name,'contact'=>$contact,'cat_id'=>$cat_id,'available'=>True);
         $this->db->insert('assigned',$data);
        }


}
