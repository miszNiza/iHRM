<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pim_model extends CI_Model {
	public $data;
	
	public function __construct() {
            parent::__construct();
                
            $this->load->database();
	}
	
	public function index()	{
	
	}
}