<?php
 class bangundatar{
 	public $p,$l;
 	public $L;
 	public $a,$t;

 	function set_nilai ($panjang,$lebar){
 		$this->p= $panjang;
 		$this->l= $lebar;

 	}

 	 function get_nilai(){
 	 	return $this->p*$this->l;

 	 }
 	 function set_nilai ($luas){
 		$this->L= $Luas;
 	
 	}
 	 function get_nilai1(){
 	 	return $this->bil1-$this->bil2;
 	}
 	 function get_nilai2(){
 	 	return $this->bil1*$this->bil2;
 	}
 	function get_nilai3(){
 	 	return $this->bil1 / $this->bil2;
 	 }
 	}
 	$bangundatar1 = new bangundatar ;
 	$bangundatar1->set_nilai(21,3);
 	echo "hasil Luas Persegi Panjang: ".$bangundatar1->get_nilai().'<br>';
 	echo "hasil pengurangan : ".$penjumlahan1->get_nilai1().'<br>';
 	echo "hasil perkalian : ".$penjumlahan1->get_nilai2(). '<br>';
 	echo "hasil pembagian : ".$penjumlahan1->get_nilai3(). '<br>';
 	?>