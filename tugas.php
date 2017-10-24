<?php
class tugas{
    function set_nilai ($bilangan1,$bilangan2){
   	 $this->bil1 = $bilangan1;
   	 $this->bil2 = $bilangan2;
   } 
   function get_nilai1 (){
   	return $this->bil1 + $this->bil2;
   }
 	function get_nilai2 (){
   	return $this->bil1 - $this->bil2;
   }
   function get_nilai3 (){
   	return $this->bil1 * $this->bil2;
   }
   function get_nilai4 (){
   	return $this->bil1 / $this->bil2;
   }
}
$tugas1 = new tugas;
$tugas1->set_nilai(21,3);
echo "Hasil penjumlahan : " .$tugas1->get_nilai1(). '<br>';
$tugas2 = new tugas;
$tugas2->set_nilai(21,3);
echo "Hasil pengurangan : " .$tugas2->get_nilai2(). '<br>';
$tugas3 = new tugas;
$tugas3->set_nilai(21,3);
echo "Hasil perkalian : " .$tugas3->get_nilai3(). '<br>';
$tugas4 = new tugas;
$tugas4->set_nilai(21,3);
echo "Hasil pembagian : " .$tugas4->get_nilai4(). '<br>';

?>


