<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	
	public function __construct() {
		parent::__construct();
                
                $this->load->database();
	}
	
	function validate_user($data){
            $where = $data;
            
            $this->db->select('user_id,username,email,last_login,last_update')->from('users')->where($where);
            
            $query = $this->db->get();
            
            return $query->row();
        }
        
        function update_log($id){
            $this->db->set('last_login', date('Y-m-d H:i:s', now()) );
            $this->db->where('user_id',$id);
            $this->db->update('users');
        }
}