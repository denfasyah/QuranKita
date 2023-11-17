<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bacaan extends CI_Controller {

	
	public function index()
	{
        $data['title'] = 'jadwal sholat';
        $this->load->view('components/vc_header', $data);
        $this->load->view('v_bacaan');
        $this->load->view('components/vc_footer');
	}
}
