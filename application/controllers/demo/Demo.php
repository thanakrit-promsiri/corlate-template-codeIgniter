<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    public function __construct() {
        parent::__construct();       
    }
    
    public function index() {
        //print_r($this);
        $this->load->view('default_theme/index');
    }

    public function error_404() {
        $this->load->view('default_theme/error_404');
    }

    public function about_us() {
        $this->load->view('default_theme/about_us');
    }

    public function blog_item() {
        $this->load->view('default_theme/blog_item');
    }

    public function blog() {
        $this->load->view('default_theme/blog');
    }

    public function contact_us() {
        $this->load->view('default_theme/contact_us');
    }

    public function portfolio() {
        $this->load->view('default_theme/portfolio');
    }

    public function pricing() {
        $this->load->view('default_theme/pricing');
    }

    public function services() {
        $this->load->view('default_theme/services');
    }

    public function shortcodes() {
        $this->load->view('default_theme/shortcodes');
    }

}
