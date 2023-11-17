<?php

class m_quran extends CI_Model {
    public function configCURL($curl) {
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_ENCODING, '');
        curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }

    private function getDataFromAPI($api_url) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $api_url);
        $this->configCURL($curl);

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return false;
        }

        curl_close($curl);

        $data = json_decode($response, true);

        if (json_last_error() === JSON_ERROR_NONE) {
            // var_dump($data);
            return $data;
        } else {
            return false;
        }
    }

    public function getQuranList() {
        $api_url = 'https://al-quran-8d642.firebaseio.com/data.json';
        return $this->getDataFromAPI($api_url);;
    }
    

    public function getSurahData($surahNumber) {
        $api_url = 'https://al-quran-8d642.firebaseio.com/surat/' . $surahNumber . '.json?print=pretty';
        return $this->getDataFromAPI($api_url);
    }

    public function getAsmaulHusna() {
        $api_url = 'https://raw.githubusercontent.com/mikqi/dzikir-counter/master/www/asmaul-husna.json';
        return $this->getDataFromAPI($api_url);
    }
    public function getKumpulanDoa() {
        $api_url = 'https://doa-doa-api-ahmadramadhan.fly.dev/api';
        return $this->getDataFromAPI($api_url);
    }
    
    public function getDoaByDoa($doa) {
        $api_url = 'https://doa-doa-api-ahmadramadhan.fly.dev/api/' . $doa;
        return $this->getDataFromAPI($api_url);
    }
    public function getjadwalKota() {
        $api_url = 'https://api.myquran.com/v1/sholat/kota/semua';
        return $this->getDataFromAPI($api_url);
    }
    public function getjadwal($idkota, $tahun, $bulan, $tanggal) {
        $api_url = 'https://api.myquran.com/v1/sholat/jadwal/' . $idkota . '/' . $tahun . '/' . $bulan . '/' . $tanggal;
        return $this->getDataFromAPI($api_url);
    }
    public function searchQuran($keyword) {
        $quranlist = $this->getQuranList();
    
        if ($quranlist !== false) {
            $searchResult = array_filter($quranlist, function($surah) use ($keyword) {
                return stripos($surah['nama'], $keyword) !== false ||
                       stripos($surah['nomor'], $keyword) !== false ||
                       stripos($surah['nama'], ucwords($keyword)) !== false ||
                       stripos($surah['nama'], ucfirst($keyword)) !== false;
            });
    
            return !empty($searchResult) ? $searchResult : false;
        } else {
            return false;
        }

    }
    public function searchAsmaulHusna($keyword) {
        $asmaulhusna = $this->getAsmaulHusna();

        if ($asmaulhusna !== false) {
            $searchResult = array_filter($asmaulhusna, function($item) use ($keyword) {
                return stripos($item['latin'], $keyword) !== false ||
                       stripos($item['urutan'], $keyword) !== false ||
                       stripos($item['latin'], ucwords($keyword)) !== false ||
                       stripos($item['latin'], ucfirst($keyword)) !== false;
            });

            return !empty($searchResult) ? $searchResult : false;
        } else {
            return false;
        }
    }

    
    
    

    
}
