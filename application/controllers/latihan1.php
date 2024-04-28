<?php
class latihan1 extends CI_Controller
{
 public function index()
 {
 echo "Selamat Datang.. selamat belajar Web Programming";
 //$this->load->view('view-latihan1');
 }

 public function jumlah($n1, $n2)
 {
 $this->load->model('Biodata');
 $hasil = $this->latihan1->jumlah($n1=1, $n2=1);
 echo "Hasil Penjumlahan dari". $n1 ." + ". $n2 ." = "
.$hasil;
 }
}