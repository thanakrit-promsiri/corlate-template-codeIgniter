<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

    public function __construct() {
        parent::__construct();       
    }
    
    public function index() {

        $this->load->view('demo/index');
    }

    public function error_404() {
        $this->load->view('demo/404');
    }

    public function about_us() {
        $this->load->view('demo/about-us');
    }

    public function blog_item() {
        $this->load->view('demo/blog-item');
    }

    public function blog() {
        $this->load->view('demo/blog');
    }

    public function contact_us() {
        $this->load->view('demo/contact-us');
    }

    public function portfolio() {
        $this->load->view('demo/portfolio');
    }

    public function pricing() {
        $this->load->view('demo/pricing');
    }

    public function services() {
        $this->load->view('demo/services');
    }

    public function shortcodes() {
        $this->load->view('demo/shortcodes');
    }

}
