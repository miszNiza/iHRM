<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

<<<<<<< HEAD
class Employee extends CI_Controller {
=======
class Employee extends CI_Controller 
{
>>>>>>> master
	public $data;
	
	public function __construct(){
		parent::__construct();
                
                $this->data['module'] = 'pim';
	}
	
	public function index(){
            
            $this->data['form'] = array(
<<<<<<< HEAD
            'title'=>'Employee Leave Information',
            'template'=>'employee'
=======
                'title'=>'Employee Leave Information',
                'template'=>'employee'
>>>>>>> master
            );
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
<<<<<<< HEAD
	}
        
        private function _validate(){
            
        }

        public function save(){
            
        }
}
                 
=======
            
	}
}

>>>>>>> master
