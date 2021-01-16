<?php

class Manusia
{
	public $nama_saya;
	function beri_nama($saya){
		$this->nama_saya = $saya;
	}
}

class Teman extends Manusia
{
	public $nama_teman;
	function kasi_nama($teman){
		$this->nama_teman = $teman;
	}
}

// $ishamashi = new Manusia();
// $ishamashi->beri_nama('ICHO');

// echo $ishamashi->nama_saya;

echo '<br>'; // ===================== 

$ishamashi2 = new Teman();
$ishamashi2->kasi_nama('Teman ajah');
$ishamashi2->beri_nama('ICHO');

echo $ishamashi2->nama_teman;
echo '<br>';
echo $ishamashi2->nama_saya;


// class manusia{
//  public $nama_saya;
//  function berinama($saya){
//  $this->nama_saya=$saya;
//  }

// }

// class teman extends manusia{
//  public $nama_teman;
//  function berinamateman($teman){
//  $this->nama_teman=$teman;
//  }
// }

// $ishamashi = new teman;
// $ishamashi ->berinama(" ISHAMASHI ");
// $ishamashi ->berinamateman(" Diki ");

// echo "Nama Saya :" . $ishamashi->nama_saya . "<br/>";

// echo "Nama Teman Saya : " . $ishamashi->nama_teman;
// ?>