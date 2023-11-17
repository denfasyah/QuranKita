<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kumpulan_doa extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('m_quran');
    }

    public function index() {
        $kumpulandoa = $this->m_quran->getKumpulanDoa();
        
        if ($kumpulandoa !== false) {
            $data = [
                'kumpulandoa' => $kumpulandoa,
                'title' => 'Kumpulan Doa',
            ];

            $this->load->view('components/vc_header', $data);
            $this->load->view('components/vc_search.php', $data);
            $this->load->view('v_kumpulan_doa', $data);
        } else {
            echo 'Gagal mengambil data doa.';
        }
    }

    public function isiDoa($doa) {
        $isiDoa = $this->m_quran->getDoaByDoa($doa);

        if ($isiDoa !== false) {
            $data = [
                'isiDoa' => $isiDoa,
                'title' => $doa,
            ];

            $this->load->view('components/vc_header', $data);
            $this->load->view('v_isi_doa', $data);
        } else {
            echo 'Gagal mengambil data doa.';
        }
    }
}
