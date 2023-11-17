<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sholat_sunnah extends CI_Controller {

	
	public function index()
	{
        $data['title'] = 'sholat sunnah';
        $this->load->view('components/vc_header', $data);
        $this->load->view('v_sholat_sunnah');
        $this->load->view('components/vc_footer');
	}
}
