<?php
class latihan1 extends CI_Controller
{

    public function index()
    {
        echo "selamat datang.. sealamat belajar web programming";
    }

    public function penjumlahan($n1, $n2)
    {

    $this->load->model('model_latihan');
    $hasil = $this->model_latihan->jumlah($n1, $n2);
    echo "hasil penjumlahan dari". $n1. " + ". $n2." = " .$hasil;

    }
    
}    