<?php
class robot {
	public $suara;
	public $berat;

	public function set_suara ($suara){
	$this->suara=$suara;
	}
	public function get_suara(){
	return $this->suara;	
	}
	public function set_berat ($berat){
	return $this->berat=$berat; 
	} 
	public function get_berat(){
	return $this->berat; 
	}
}
$robot1 = new robot;
$robot1->set_suara("ngak ngik nguk ngek ngok");
$robot1->set_berat(60);
echo "suara r <nbsp> o <nbsp> b <nbsp> o <npsp> t <nbsp> adalah ".$robot1->get_suara().'<br>';
echo "berat robot adalah ".$robot1->get_berat().'<br>';