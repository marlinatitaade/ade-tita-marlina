<?php 
class Produk {
	public $judul,
		   $penulis,
		   $penerbit;
	
	protected $diskon = 0;

	private $harga;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ){
	$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}	
	public function getHarga(){
		return $this->harga - ($this->harga * $this->diskon / 100);
	}
	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getinfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

		return $str;
	}
}

class Komik extends Produk{
	public $jmlHalaman;
	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0){
		
			parent::__construct($judul , $penulis , $penerbit, $harga );
			$this->jmlHalaman=$jmlHalaman;
		
		}
	public function getinfoProduk(){
			$str = "Komik : " .parent::getinfoProduk()."-{$this->jmlHalaman}Halaman.";
			return $str;
	}
}
class Game extends Produk{
	public $waktumain;
		public function __construct($judul = "judul", $penulis, $penerbit = "penerbit", $harga = 0,$waktumain = 0 ){

			parent::__construct($judul , $penulis, $penerbit, $harga);
		
		$this->waktumain=$waktumain;

		}
		public function setDiskon( $diskon){
			$this->diskon = $diskon;
		}
	public function getInfoProduk(){
		$str = "Game : " .parent::getInfoProduk()." ~ {$this->waktumain}Jam.";
		return $str;
	}
}

 class CetakinfoProduk{
 	public function cetak(produk $produk){
 		$str = "{$produk->judul} | {$produk->getLabel()}(Rp. {$produk->harga})";
 		return $str;
 	}
 }

$produk1 = new Komik("Naruto","Masashi Kishimoto","Shonen Jump",30000,100);

$produk2 = new Game("Uncharted","Neil Druckman","Sony Computer",250000,50);

echo $produk1->getinfoProduk();
echo "<br>";
echo $produk2->getinfoProduk();
echo "<hr>";
$produk2->setDiskon(50);
echo $produk2->getHarga();
?>
