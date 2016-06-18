<?php

class retreiveController extends CI_Controller {
  public function index()
  {
    $this->load->model('retreivedata');
    $data['records']=$this->retreivedata->getData();
    print_r(json_encode($data));
  }

  public function insertdata(){
    $this->load->model('retreivedata');
    $postdata=file_get_contents("php://input");

    $request=json_decode($postdata);
    $name1=$request->name;
    $contact=$request->contact;
    $cat_id=$request->contact;
    
    $this->retreivedata->insertassigned($name1,$cat_id,$contact);
    print_r("Insert successful");
  }



}

 ?>
