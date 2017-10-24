<?php
 class bangundatar{
 	public $p,$l;
 	public $s;
 	public $a,$t;

 	function set_nilai ($panjang,$lebar){
 		$this->p =$panjang;
 		$this->l =$lebar;
 	}

 	 function get_nilai(){
 	 	return $this->p*$this->l;
 	 }

 	 function get_nilai00(){
 	 	return 2* $this->p+ 2*$this->l;

 	 }
 	 function set_nilai1 ($sisi){
 		$this->s = $sisi;
 	}
 	 function get_nilai1(){
 	 	return 2*$this->s;
 	}
 	function get_nilai11(){
 	 	return 4*$this->s;
 	}
 	function set_nilai2 ($alas,$tinggi){
 		$this->a = $alas;
 		$this->t = $tinggi;
 	}

 	 function get_nilai2(){
 	 	return 1/2 * $this->a*$this->t;
 	}
 	}
 	$bangundatar1 = new bangundatar;
 	$bangundatar1->set_nilai(10,20);
 	$bangundatar1->set_nilai1(10);
 	$bangundatar1->set_nilai2(10,30);
 	echo "Luas Persegi Panjang : ".$bangundatar1->get_nilai().'<br>';
 	echo "Keliling Persegi Panjang : ".$bangundatar1->get_nilai00().'<br>';
 	echo "Luas Persegi : ".$bangundatar1->get_nilai1().'<br>';
 	echo "Keliling Persegi Panjang : ".$bangundatar1->get_nilai11().'<br>';
 	echo "Luas Segitiga : ".$bangundatar1->get_nilai2().'<br>';
 
 	?>