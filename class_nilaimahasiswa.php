<?php
/**
 *
 */
class NilaiMahasiswa {
  var $matakuliah, $nilai, $nim;

  function __construct($matakuliah, $nilai, $nim)
  {
    $this->matakuliah = $matakuliah;
    $this->nilai = $nilai;
    $this->nim = $nim;
  }

  function grade()
  {
   if ($_POST['nilai'] <= 35) {
        return "E";
      } elseif ($_POST['nilai'] >= 36 && $_POST['nilai'] <= 55) {
        return "D";
      } elseif ($_POST['nilai'] >= 56 && $_POST['nilai'] <= 69 ) {
        return "C";
      } elseif ($_POST['nilai'] >= 70 && $_POST['nilai'] <= 84  ){
        return "B";
       } elseif ($_POST['nilai'] >= 85 && $_POST['nilai'] <= 100 ) {
        return "A";
      }

  }

  function hasil()
  {
    if($_POST['nilai'] <= 56){
        return "Tidak Lulus";
    }elseif ($_POST['nilai'] >= 56) {
        return "Lulus";
    }
  }
}
 ?>
