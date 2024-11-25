<?php
// !return = mengembalikan nilai 
// !parent  & child = hubungan antara ayah dan anak
// ? TIDAK ERORR

class Mahasiswa
{

  public $nama = "Syauqi";
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
class MahasiswaInformatika extends Mahasiswa
{
  // *jadi class mahasiswainformatika adalah keturunan dari class mahasiswa
  // *kalau keturunan berarti akan mewarisi
  // *bahasa lain nya adalah class Mahasiswa adalah ayah dan class MahasiswaInformatika adalah anak
  // *kita membutuhkan extends karena terkadang class turunan ini mempunyai skill yang tidak dimiliki oleh class yang atasnya/yang mewariskan
  private $skill_laravel = 8;
}
$mahasiswa2 = new MahasiswaInformatika();
echo $mahasiswa2->nama;
// $mahasiswa1 = new Mahasiswa();
// $mahasiswa1->nama = "Syauqi";
// echo $mahasiswa1->nama;
// echo $mahasiswa1->hitung_umur();
