<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Service_history extends CI_Controller {
	public $data;
	
	public function __construct() {
		parent::__construct();
	
	$this->data['module'] = 'pim';
	}
	
	public function index(){
            
            $this->data['form'] = array(
                'title'=>'Service History Information',
                'template'=>'service_history'
            );
            
            $this->load->view('header',$this->data);
            $this->load->view('aside',$this->data);
            $this->load->view('pim/view',$this->data);
            $this->load->view('footer',$this->data);
	}
}