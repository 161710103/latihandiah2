 <?php

class bangun{
   public $bil1,$bil2;

   function set_nilai ($bilangan1,$bilangan2){
   	 $this->bil1 = $bilangan1;
   	 $this->bil2 = $bilangan2;
   }
   
   function get_nilai (){
   	return $this->bil1 * $this->bil2 /2;
   }
   function set_nilais ($bilangan1){
   	 $this->bil1 = $bilangan1;
   	}
   function get_nilais (){
   	return $this->bil1 *3;
   }
        function set_nilai2 ($bilangan1){
   	    $this->bil1 = $bilangan1;
      	}
        function get_nilai2 (){
   	return $this->bil1*2;
   }
   function get_nilai3 (){
   	return $this->bil1 * $this->bil2 ;
}
  }
$segitiga = new bangun;
$segitiga->set_nilai(6,6);
echo "Luas Segitiga adalah : " .$segitiga->get_nilai(). '<br>';
$segitiga2 = new bangun;
$segitiga2->set_nilais(6);
echo "Keliling Segitiga adalah : " .$segitiga->get_nilais(). '<br>';

$persegi = new bangun;
$persegi->set_nilai2(7);
echo "Luas persegi adalah : " .$persegi->get_nilai2(). '<br>';

$persegip = new bangun;
$persegip->set_nilai(8,5);
echo "Luas Persegi Panjang adalah : " .$persegip->get_nilai3(). '<br>';
?>