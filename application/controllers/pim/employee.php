<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Controller {
    public $data;

    public function __construct() {
        parent::__construct();
    }

    public function index()	{
        $this->load->view('header',$this->data);
        $this->load->view('aside',$this->data);
        $this->load->view('view',$this->data);
        $this->load->view('header',$this->data);
    }
}