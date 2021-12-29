<?php
namespace App\Controllers;
class login extends BaseController{
    public function ceklogin(){
        $e = $this->request->getpost('email');
        $s = $this->request->getpost('sandi');
        return view('halaman/beranda', ['email' =>$e, 'sandi'=>$s]);
    }
}