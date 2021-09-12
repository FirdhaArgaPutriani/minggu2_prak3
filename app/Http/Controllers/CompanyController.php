<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        echo "Selamat Datang";
    }

    public function mi(){
        echo "Program Studi Manajemen Informatika";
    }

    public function ti(){
        echo "Program Studi Teknik Informatika";
    }

    public function news($hal){
        echo "Halaman Daftar Berita dengan hal " .$hal;
    }

    public function kantor(){
        echo "Sarana yang tersedia Kantor";
    }

    public function lab(){
        echo "Sarana yang tersedia Lab";
    }

    public function kelas(){
        echo "Sarana yang tersedia Kelas";
    }

    public function kantin(){
        echo "Sarana yang tersedia Kantin";
    }

    public function about(){
        echo "NIM &nbsp; : 2031710171<br>";
        echo "Nama : Firdha Arga Putriani"; 
    }

    public function comment($nm, $psn){
        echo "Nama &nbsp; : " . $nm . "<br>";
        echo "Pesan : " . $psn;
    }
}
