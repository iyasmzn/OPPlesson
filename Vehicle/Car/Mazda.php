<?php	
namespace Vahicle\Car;
class Mobil
{
	// PROPERTY
	private $namaMobil;
	private $jumlahRoda;
	private $jumlahKursi;

	// METHOD 
	public function setNamaMobil($x)
	{
		$this->namaMobil = $x;
	}
	public function setJumlahRoda($jrd)
	{
		$this->jumlahRoda = $jrd;
	}
	public function setJumlahKursi($x)
	{
		$this->jumlahKursi = $x;
	}

	public function output()
	{
		echo "Saya punya mobil ".$this->namaMobil." dengan jumlah kursi = ".$this->jumlahKursi.", dan jumlah roda = ".$this->jumlahRoda.".";
	}
}

?>