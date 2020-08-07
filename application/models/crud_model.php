<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');
    class crud_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    function contacto_save(){
    	$data['name']=$this->input->post('contacto_nombre');
    	$data['email']=$this->input->post('contacto_email');
    	$data['city']=$this->input->post('contacto_city');
    	$data['state']=$this->input->post('contacto_state');

    	$this->db->insert('contacts',$data);

    }
}