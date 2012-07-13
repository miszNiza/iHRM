<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Skills extends CI_Controller 
{
	public $data;
	
	public function __construct(){
		parent::__construct();
                
                $this->data['module'] = 'pim';
	}
	
	public function index(){
            
            $this->data['form'] = array(
                'title'=>'Employee Skills and Competency Information',
                'template'=>'skills'
            );
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
	}
        
        private function _validate(){
            
        }

        public function save(){
            
        }
}