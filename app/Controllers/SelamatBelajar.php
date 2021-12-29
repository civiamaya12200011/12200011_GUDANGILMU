<?php

namespace App\Controllers;

class SelamatBelajar extends BaseController {

    public function hal_awal(){
        return 'hello saya sedang membaca';
    }

    public function beranda_login(){
        return view('halaman/login');
    }
    
    public function daftar_member(){
        return view('halaman/daftar_member');
    }

}


