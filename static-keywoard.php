<?php 
	// class ContohStatic{
	// 	public static $angka = 1;
	// 	public static function halo() {
	// 		return "Hallo".self::$angka++ ."kali.";
	// 	}
	// }
	// echo ContohStatic::$angka;
	// echo "<br>";
	// echo ContohStatic::halo();
	// echo "<hr>";
	// echo ContohStatic::halo();
 


class Contoh {
	public static $angka = 1;

	public function AdeTita(){
		return "AdeTita" . self::$angka++ ."kali. <br>";
	}
}

$obj = new Contoh;
echo $obj->AdeTita();
echo $obj->AdeTita();
echo $obj->AdeTita();

echo "<hr>";

$obj2 = new Contoh;
echo $obj->AdeTita();
echo $obj->AdeTita();
echo $obj->AdeTita();
?>
