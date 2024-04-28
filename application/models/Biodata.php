<?php
class Biodata extends CI_Model
{
 //membuat variable untuk menampung nilai
 public $n1, $n2, $hasil;

 //method penjumlahan
 public function jumlah($n1=1, $n2=2)
 {
 $this->nilai1 = $nil1;
 $this->nilai2 = $nil2;
 $this->hasil = $this->nilai1 + $this->nilai2;
 return $this->hasil;
 }
}