<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct() { 
        parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('contact_model');

	} 
	
	public function index()
	{
		$data = array(
            'user' => $this->contact_model->getSelect()
		); 
		$this->load->view('elements/header'); 
		$this->load->view('contact', $data);
		$this->load->view('elements/footer'); 
	}

	public function view($id)
	{
		$data = array();
		$data['users'] = $this->contact_model->getUsersDetails($id);
		
		$this->load->view('elements/header'); 
		if (empty($data['users']))
        {
            show_404();
        } else {
            $this->load->view('view', $data); 
        }
		$this->load->view('elements/footer'); 
        
	}

	public function edit($id)
	{
		$data = array(
		);
		
		$data['users'] = $this->contact_model->getUsersDetails($id);
		$data['success'] = "Félicitations, votre contact à été modifié !";

		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('biography', 'Biography', 'trim|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('tel', 'Tel', 'trim|numeric');
		$this->form_validation->set_rules('mail', 'Mail', 'trim|valid_email');
		
		$this->load->view('elements/header'); 
		if (empty($data['users']))
        {
            show_404();
        } else {

			if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('elements/header'); 
				$this->load->view('edit', $data); 
				$this->load->view('elements/footer'); 
		
			}
			else
			{
				
				$this->contact_model->getUpdate($id);
				$this->load->view('elements/header'); 
				$this->load->view('success', $data); 
				$this->load->view('elements/footer'); 
			}
        }
		$this->load->view('elements/footer'); 
        
	}

	public function create()
	{
		$data = array();
		$data['success'] = "Félicitations, votre contact à été créé !";

		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('name', 'Name', 'trim|required');
		$this->form_validation->set_rules('firstname', 'Firstname', 'trim|required');
		$this->form_validation->set_rules('biography', 'Biography', 'trim|min_length[5]|max_length[200]');
		$this->form_validation->set_rules('tel', 'Tel', 'trim|numeric');
		$this->form_validation->set_rules('mail', 'Mail', 'trim|valid_email');

		
	
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('elements/header'); 
			$this->load->view('create', $data); 
			$this->load->view('elements/footer'); 
	
		}
		else
		{
			$this->contact_model->set_create();
			$this->load->view('elements/header'); 
			$this->load->view('success', $data); 
			$this->load->view('elements/footer'); 
		}

		
        
	}
	

	public function delete($id){
		$this->contact_model->set_delete($id);
		redirect("contact");
	}
}
