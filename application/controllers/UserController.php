<?php
class UserController extends CI_Controller{

    public function index(){
        // echo "index metodu";
        $this->load->view('user/index');
    }
    public function about(){
        $this->load->view('user/about');
        
    }
    public function contact(){
        $this->load->view('user/contact');
        
    }
    public function settings(){
        $this->load->view('user/settings');
        
    }
    
    
    
}