<?php
class Whut 
{
    // PROPERTY
    private $namaAnda;
    private $kelasAnda;
    private $hobiAnda;

    // METHOD 
    public function setNamaAnda($x)
    {
        $this->namaAnda = $x;
    }
    public function setKelasAnda($jrd)
    {
        $this->kelasAnda = $jrd;
    }
    public function setHobiAnda($x)
    {
        $this->hobiAnda = $x;
    }

    public function output()
    {
        echo "Nama saya adalah ".$this->namaAnda." dari kelas ".$this->kelasAnda.", dan hobi saya adalah ".$this->hobiAnda.".";
    }
}

    $whhhuuuuut  =   new Whut();
    $whhhuuuuut->setNamaAnda('Jimmy');
    $whhhuuuuut->setKelasAnda('9X');
    $whhhuuuuut->setHobiAnda('Belajar');
    $whhhuuuuut->output();
    echo "<br>";
    $whhhuuuuut  =   new Whut();
    $whhhuuuuut->setNamaAnda('Sammy');
    $whhhuuuuut->setKelasAnda('9XX');
    $whhhuuuuut->setHobiAnda('Membaca');
    $whhhuuuuut->output();
?>