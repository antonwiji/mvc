<?php

class About extends Controller {

    public function index($nama = 'anton', $perkerjaan = 'programmer', $umur = '23'){
        $data['nama'] = $nama;
        $data['perkerjaan'] = $perkerjaan;
        $data['umur'] = $umur;
       $this->view('about/index' , $data);
    }

    public function page(){
        echo 'about/page';
    }
}