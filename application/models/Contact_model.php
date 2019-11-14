<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Contact_model extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'user'; 
    } 
     
    public function getUsersDetails($id){
        $this->db->where('id', $id);    
        $query = $this->db->get('user');
        return $query->row();
    }

    public function getSelect(){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('id');
        return $this->db->get()->result();
    }

    public function getUpdate($id){
        $data = array(
            'name' => $this->input->post('name'),
            'firstname' => $this->input->post('firstname'),
            'biography' => $this->input->post('biography'),
            'mail' => $this->input->post('mail'),
            'tel' => $this->input->post('tel')
            );
        $this->db->where("id",$id);
        return $this->db->update('user', $data);
    }

    public function set_delete($id){
        $this->db->where("id",$id);
        $this->db->delete("user");
        return $this->db->affected_rows();
    }

    public function set_create()
    {
    $this->load->helper('url');

    $data = array(
        'name' => $this->input->post('name'),
        'firstname' => $this->input->post('firstname'),
        'mail' => $this->input->post('mail'),
        'tel' => $this->input->post('tel'),
        'biography' => $this->input->post('biography')
    );

    return $this->db->insert('user', $data);
    }
}