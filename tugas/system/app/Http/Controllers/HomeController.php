<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{


	function showBeranda (){
		return view ('Beranda');
	}

	function showproduk (){
		return view ('produk');
	}

	function showKategori (){
		return view ('Kategori');
	}

}
