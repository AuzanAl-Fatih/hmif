<?php
class Home extends CI_Controller{
    public function index(){
        $this->load->view('admin/v_profile');
    }
}
