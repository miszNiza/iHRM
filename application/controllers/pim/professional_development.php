<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Professional_development extends CI_Controller 
{
	public $data;
	
	public function __construct(){
		parent::__construct();
<<<<<<< HEAD
                
                $this->data['module'] = 'pim';
	}
	
	public function index(){
            
            $this->data['form'] = array(
                'title'=>'Employee Professional Development Information',
                'template'=>'development'
            );
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
=======
                $this->data['module'] = 'pim';
	}
	
	public function index()
	{
                $this->data['form'] = array(
                    'title'=>'Professional Development',
                    'template'=>'professional_development'
                );
            
                $this->load->view('header',$this->data);
                $this->load->view('aside',$this->data);
                $this->load->view('pim/view',$this->data);
                $this->load->view('footer',$this->data);
>>>>>>> 2a77bce88d42e3194a67d712902f16c78136f886
	}
        
        private function _validate(){
            
        }

        public function save(){
            
        }
}