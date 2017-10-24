<?php 
require_once'identitas.php';

$identitas=new identitas('Melan','London','XI RPL 2','Menikah');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_tempatlahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br><br>';

$identitas=new identitas('Halimah','Bandung','XI RPL 2','Jofisa');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_tempatlahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br><br>';

$identitas=new identitas('Annisa','Bandung','XI RPL 2','Taken');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_tempatlahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br><br>';

$identitas=new identitas('penti','amsterdam','XI RPL 2','single');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_tempatlahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br><br>';

$identitas=new identitas('Diandra','Hongkong','XI RPL 2','jombs');
echo "Namanya..".$identitas->get_nama().'<br>';
echo "Tempat Lahir..".$identitas->get_tempatlahir().'<br>';
echo "Kelasnya..".$identitas->get_kelas().'<br>';
echo "Statusnya..".$identitas->get_status().'<br><br>';
 ?>