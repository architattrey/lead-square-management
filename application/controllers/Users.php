<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pegawai');
		$this->load->model('M_posisi');
		$this->load->model('M_kota');
		$this->load->model('Users_model');
	}

	public function leads() {
		$this->load->view('include/header');
	        if($this->input->post('title') !="")
	        {
	            $title = trim($this->input->post('title'));
	        }
	        else{
	            $title = str_replace("%20",' ',($this->uri->segment(3))?$this->uri->segment(3):0);
	        } 
	        
	        $data['search_title']=$title;        
	         
	        $allrecord = $this->Users_model->allrecord('pegawai',$title);
	        $baseurl =  base_url().$this->router->class.'/'.$this->router->method."/".$title;
	        
	        $paging=array();
	        $paging['base_url'] =$baseurl;
	        $paging['total_rows'] = $allrecord;
	        $paging['per_page'] = 3;
	        $paging['uri_segment']= 4;
	        $paging['num_links'] = 5;
	        $paging['first_link'] = 'First';
	        $paging['first_tag_open'] = '<li>>';
	        $paging['first_tag_close'] = '</li>';
	        $paging['num_tag_open'] = '<li>';
	        $paging['num_tag_close'] = '</li>';
	        $paging['prev_link'] = 'Prev';
	        $paging['prev_tag_open'] = '<li>';
	        $paging['prev_tag_close'] = '</li>';
	        $paging['next_link'] = 'Next';
	        $paging['next_tag_open'] = '<li>';
	        $paging['next_tag_close'] = '</li>';
	        $paging['last_link'] = 'Last';
	        $paging['last_tag_open'] = '<li>';
	        $paging['last_tag_close'] = '</li>';
	        $paging['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
	        $paging['cur_tag_close'] = '</a></li>';
	        
	        $this->pagination->initialize($paging);    
	        
	        $data['limit'] = $paging['per_page'];
	        $data['number_page'] = $paging['per_page']; 
	        $data['offset'] = ($this->uri->segment(4)) ? $this->uri->segment(4):'0';    
	        $data['nav'] = $this->pagination->create_links();
	        $data['datas'] = $this->Users_model->data_list('pegawai',$data['limit'],$data['offset'],$title);
	        $this->load->view('users/leads',$data);
	        $this->load->view('include/footer');
	}
	
	public function home_cont(){
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$cty = $_POST['cty'];
		$lead_tech = $_POST['lead_tech'];
		$lead_type = $_POST['lead_type'];
		$data['log_err'] = 'Profile Update Successfully';
	}
}