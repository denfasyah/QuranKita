<?php

class Beranda extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_quran');
    }

    public function index() {
        $quranlist = $this->m_quran->getQuranList();

        if ($quranlist !== false) {
            $data = [
                'quranlist' => $quranlist,
                'title' => 'Beranda',
            ];

            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_beranda', $data);
            
        } else {
            echo 'gagal ngambil api🔥 list surah.';
        }
    }
    
    public function surah($surahNumber) {
        $surahData = $this->m_quran->getSurahData($surahNumber);
        
        if ($surahData !== false) {
            $data = [
                'surahData' => $surahData,
                'title' => 'Surah ke-' . $surahNumber,
            ];
            
            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_surah', $data);

        } else {
            echo 'gagal ngambil api🔥 isi surah.';
        }
    }
    public function search() {
        $searchKeyword = $this->input->post('search');
        $searchResult = $this->m_quran->searchQuran($searchKeyword);
        $searchResult = $this->m_quran->searchQuran($searchKeyword);
    
        if ($searchResult !== false) {
            $data = [
                'quranlist' => $searchResult,
                'title' => 'Hasil Pencarian: ' . $searchKeyword,
            ];
    
            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_search_beranda', $data); 
        } else {
            $data = [
                'title' => 'Tidak Ditemukan: ' . $searchKeyword,
            ];
            $this->load->view('components/vc_header.php', $data);
            $this->load->view('v_gagal_search_surah.php');
        }
    }
    

}
