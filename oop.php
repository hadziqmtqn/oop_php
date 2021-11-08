<?php 

class produk
{
	
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = "harga";

			public function getlobal()
			{
				return "$penulis";
			}

}

	$produk1 = new produk();
	$produk1-> judul = "Naruto";

	var_dump($produk1);
