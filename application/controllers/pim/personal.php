<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Personal extends CI_Controller {
	public $data;
	
	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
            
            $this->data['form'] = 'personal';
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
            
	}
}