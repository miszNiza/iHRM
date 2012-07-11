<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public $data;
    
    public function __construct() {
        parent::__construct();
        
        if(!user_logged_in())
            redirect ('login');
        
        $this->data['module'] = 'dashboard';
    }
    
    public function index(){
        $this->load->view('header',$this->data);
        $this->load->view('aside',$this->data);
        $this->load->view('dashboard/view',$this->data);
        $this->load->view('footer',$this->data);
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */