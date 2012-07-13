<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public $data;
	
	public function __construct() {
            parent::__construct();
            
            $this->load->library('form_validation');
            $this->load->model('login_model');
	}
	
	public function index()	{
            //if user already logged in, redirect to dashboard
            if(user_logged_in())
                redirect ('dashboard');
            
            //if form submitted, validate login
            if($this->input->post()){
                $this->_validate();
            }
            $this->load->view('login',$this->data);
	}
        
        private function _validate(){
            //re-validate form
            if($this->form_validation->run('login') == FALSE){
                $this->data['alert']['error'] = validation_errors();
            } else {
                $data = array(
                    'username' => $this->input->post('login'),
                    'password' => $this->input->post('password')                
                );
                //print_r($data);
                $user = $this->login_model->validate_user($data);
                
                if( $user ){
                    
                    //update last login status
                    $this->login_model->update_log($user->user_id);
                    
                    //$this->data['alert']['success'] = '<p>Login success</p>';
                    //print_r($user);
                    
                    $this->session->set_userdata('user',$user);

                    redirect('dashboard');
                } else {
                    $this->data['alert']['error'] = '<p>Invalid username or password</p>';
                }
            }        
        }
        
        public function logout(){
            $this->session->unset_userdata('user');
            redirect('login');
        }
}