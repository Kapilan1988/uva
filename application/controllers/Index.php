<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class index extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['title'] = 'UVA';
        $data['content'] = 'content/home';
        $data['active'] = 'home';

        $this->load->view('template/content', $data);
    }

    public function about() {
        $data['title'] = 'About Us';
        $data['content'] = 'content/about';
        $data['active'] = 'about';

        $this->load->view('template/content', $data);
    }

    public function room() {
        $data['title'] = 'Rooms';
        $data['content'] = 'content/room';
        $data['active'] = 'room';

        $this->load->view('template/content', $data);
    }

    public function restaurant()
    {
      $data['title'] = 'Restaurant';
      $data['content'] = 'content/restaurant';
      $data['active'] = 'restaurant';

      $this->load->view('template/content', $data);
    }

    public function gallery()
    {
      $data['title'] = 'Gallery';
      $data['content'] = 'content/gallery';
      $data['active'] = 'gallery';

      $this->load->view('template/content', $data);
    }

    public function contact()
    {
      $data['title'] = 'Contact';
      $data['content'] = 'content/Contact';
      $data['active'] = 'contact';

      $this->load->view('template/content',$data);
    }


}
