<?php 
	// define('NAMA', 'Ade Tita Marlina');
	// echo NAMA;

	// echo "<br>";
	// const UMUR = 17;
	// echo UMUR;

	// class Coba{
	// 	const NAMA = 'Ade Tita Marlina';

	// }
	// echo Coba::NAMA;
	// echo __FILE__;

class Coba {
	public $kelas = __CLASS__;

}
$obj = new Coba;
echo $obj->kelas;
?>
