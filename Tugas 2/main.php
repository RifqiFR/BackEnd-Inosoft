<?php
class Kalkulator

{
    protected float $daya;

    public function __construct()
    {
        $this->daya = 100;
    }

    public function penjumlahan($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            echo $angka1 + $angka2 . "<br>";
        }
    }

    public function pengurangan($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            echo $angka1 - $angka2 . "<br>";
        }
    }

    public function perkalian($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            echo $angka1 * $angka2 . "<br>";
        }
    }

    public function pembagian($angka1, $angka2)
    {
        if ($this->cekDaya() == true) {
            if ($angka2 || $angka1 == 0) {
                echo "Tidak bisa melakukan pembagian dengan angka 0 <br>";
                return;
            }
            echo $angka1 / $angka2 . "<br>";
        }
    }

    public function pangkat($angka1, $angka2)
    {
        $hasil = pow($angka1, $angka2);
        if ($hasil > 1000000) {
            echo "Nilai diluar batas yang ditentukan <br>";
            return;
        }
        echo $hasil . "<br>";
    }


    public function isiDaya($dayaMasuk)
    {
        $this->daya += $dayaMasuk;
        if ($this->daya > 100) {
            $this->daya = 100;
        }
    }

    public function cekDaya()
    {
        if ($this->daya == 0) {
            echo " Daya Habis";
            return false;
        }
        $this->daya -= 10;
        echo $this->daya;
        return true;
    }
}

class KalkulatorHemat extends Kalkulator
{
    public function cekDaya()
    {
        if ($this->daya == 0) {
            echo "Daya Habis";
            return false;
        }
        $this->daya -= 5;
        return true;
    }
}

$KalkulatorHemat = new KalkulatorHemat();
$KalkulatorHemat->penjumlahan(1, 2);
$KalkulatorHemat->pembagian(0, 2);
$KalkulatorHemat->pangkat(10000, 1000);
