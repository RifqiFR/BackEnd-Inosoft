<?php

$tugas = new Tugas();
//$tugas->tugas();

class Tugas
{
   public function tugas()
   {
      for ($i = 1; $i <= 100; $i++) {
         if ($i % 3 == 0 && $i % 5 == 0) {
            $p = $i / 3;
            $l = $i / 5;

            $hasil = $this->luasPersegiPanjang($p, $l);
            echo number_format($hasil, 2) . "<br>";
         } else if ($i % 3 == 0) {
            $r = $i / 3;

            $hasil = $this->luasLingkaran($r);
            echo number_format($hasil, 2) . "<br>";
         } else if ($i % 5 == 0) {
            $r = $i / 5;

            $hasli = $this->kelilingLingkaran($r);
            echo number_format($hasli, 2) . "<br>";
         } else {
            echo number_format($i, 2) . "<br>";
         }
      }
   }

   function luasLingkaran(int $r)
   {
      $luas = 3.14 * $r * $r;

      return $luas;
   }

   function kelilingLingkaran(int $r)
   {
      $keliling = 2 * 3.14 * $r;

      return $keliling;
   }

   function luasPersegiPanjang(int $p, int $l)
   {
      $luas = $p * $l;

      return $luas;
   }
}
