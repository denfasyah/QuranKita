<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_quran');
    }

    public function index() {
        $this->load->model('m_quran');
        $jadwalKota = $this->m_quran->getjadwalKota();
    
        if ($jadwalKota !== false) {
            $data = [
                'jadwalKota' => $jadwalKota,
                'title' => 'Jadwal Kota',
            ];
    
            $this->load->view('components/vc_header', $data);
            $this->load->view('components/vc_search', $data);
            $this->load->view('v_jadwal', $data);
        } else {
            echo 'gagal ngambil data jadwal kota.';
        }
    }
    
public function sholat($idkota) {
    // Dapatkan tanggal dan waktu saat ini
    $tanggalSekarang = date("Y-m-d");
    list($tahun, $bulan, $tanggal) = explode("-", $tanggalSekarang);

    $jadwal = $this->m_quran->getjadwal($idkota, $tahun, $bulan, $tanggal);

    if ($jadwal !== false) {
        $data = [
            'jadwal' => $jadwal,
            'title' => 'Jadwal Sholat',
        ];

        $this->load->view('components/vc_header', $data);
        $this->load->view('v_data_jadwal', $data);
    } else {
        echo 'gagal ngambil data jadwal.';
    }
} 
}