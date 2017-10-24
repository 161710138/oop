<?php

 class Rumah{
 	public $pintu = 1;
 	public $warna = 'coklat' ;
 	
 }
 class ayam{
 	public $suara = 'petok petok';
 	public $kaki =2;
 }
 
 class angsa{
 	public $suara = 'ngok ngok';
 	public $kaki =2;
 }
 
  class kucing{
 	public $suara = 'meong meong';
 	public $kaki =4;
 }
 $rumah1 = new rumah();
 echo"pintu rumah banyaknya = ".$rumah1->pintu.'<br>';
 echo"warnanya adalah = ".$rumah1->warna.'<br>';
 $ayam1 = new ayam();
 echo"ayam suaranya = ".$ayam1->suara.'<br>';
 echo"kakinya = ".$ayam1->kaki.'<br>';
 $angsa1 = new angsa();
 echo"angsa suaranya= ".$angsa1->suara.'<br>';
 echo"kakinya = ".$angsa1->kaki.'<br>';
 $kucing1 = new kucing();
 echo"kucing suaranya = ".$kucing1->suara.'<br>';
 echo"kakinya = ".$kucing1->kaki.'<br>';
 ?>
 
