<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asmaul_husna extends CI_Controller {
    
    public function index() {
        $this->load->model('m_quran');
        $asmaulhusna = $this->m_quran->getAsmaulHusna();
        
        if ($asmaulhusna !== false) {
            $data = [
                'asmaulhusna' => $asmaulhusna,
                'title' => 'Asmaul Husna',
            ];
        
            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_asmaul_husna', $data);
        } else {
            echo 'gagal ngambil api🔥 list Asmaul Husna.';
        }
    }

    public function searchAH() {
        $searchKeyword = $this->input->post('searchAH');
        $searchResult = $this->m_quran->searchAsmaulHusna($searchKeyword);
    
        if ($searchResult !== false) {
            $data = [
                'asmaulhusna' => $searchResult,
                'title' => 'Hasil Pencarian Asmaul Husna: ' . $searchKeyword,
            ];
    
            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_search_ah', $data);
        } else {
            $data = [
                'title' => 'Tidak Ditemukan: ' . $searchKeyword,
            ];
            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_gagal_search_ah.php');
        }
    }
}
