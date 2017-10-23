<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title'] = 'UVA';
        $data['content'] = 'content/home';
        $data['active'] = 'home';

        $this->load->view('template/content', $data);
    }

    function about() {
        $data['title'] = 'About Us';
        $data['content'] = 'content/about';
        $data['active'] = 'about';

        $this->load->view('template/content', $data);
    }



}
