<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * User_model class.
 * 
 * @extends CI_Model
 */
class Users_model extends CI_Model {
	/**
	 * __construct function.
	 * 
	 * @access public
	 * @return void
	 */
	public function __construct() {
		
		parent::__construct();
		$this->load->library(array('session','pagination'));
        	$this->load->helper('url');
		$this->load->database();
		
	}
	
	/**
	 * get_user function.
	 * 
	 * @access public
	 * @param mixed $user_id
	 * @return object the user object
	 */
    public function data_list($table,$limit,$offset,$title){
        if(!empty($title)){
            $this->db->like('nama',$title);
        }
        $this->db->select('*');
        $this->db->from($table);
        //	$this->db->order_by($table.'_id','desc');
        $this->db->limit($limit,$offset);
        $rs = $this->db->get();
        return $rs->result_array();
    }
    public function allrecord($table,$title){
        if(!empty($title)){
            $this->db->like('nama',$title);
        }
        $this->db->select('*');
        $this->db->from($table);
        $rs = $this->db->get();
        return $rs->num_rows();
    }
}