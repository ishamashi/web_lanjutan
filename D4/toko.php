<?php 

class Barang
{
	public $judul, 
		   $penulis, 
		   $penerbit,
		   $harga;

	function __construct(  )
	{
		echo 'pertama<br>';
		// $this->judul = $judul;
		// $this->penulis = $penulis;
		// $this->penerbit = $penerbit;
		// $this->harga = $harga;
	}

	function __destruct()
	{
		echo 'Terakhir<br>';
	}

	function Nama()
	{
		return 'ISHAMASHI';
	}


	
}

$tes = new Barang();
echo $tes->Nama();
// $produk1 = new Barang('Naruto', 'Masashi Kishimoto', 'Shounen Jump', 35000);
// $produk2 = new Barang('GTA5', 'orang', 'Rockstar', 500000);

// echo var_dump($produk1);
// echo '<br>';
// echo var_dump($produk2);

