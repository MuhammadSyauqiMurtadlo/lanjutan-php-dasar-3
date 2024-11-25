<?php
// fungsi
// ? TIDAK ERORR

class Mahasiswa
{

  // public $nama = "Syauqi";
  private $lahir_tgl = 20;
  private $lahir_bln = 02;
  private $lahir_thn = 2004;

  function hitung_umur()
  {
    $umur = date('Y') - $this->lahir_thn;
    if ($this->lahir_bln > date('m')) {
      $umur--;
    } elseif ($this->lahir_bln == date('m')) {
      if ($this->lahir_tgl > date('d')) {
        $umur--;
      }
    }
    return $umur;
    // *return digunakan untuk mengembalikan nilai ketika function nya dipanggil
    // *ada fungsi yang mengembalikan nilai, ada fungsi yang tidak mengembalikan nilai
    // *dan return itu harus dipanggil dengan echo agar bisa muncul
  }
}
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->nama = "Syauqi";
// echo $mahasiswa1->nama;
echo $mahasiswa1->hitung_umur();
