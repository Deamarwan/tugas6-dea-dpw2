<?php 

namespace App\Http\Controllers;

class HomeController extends Controller{

	function showBeranda(){
		return view('admin.beranda');
	}
	function showProduk(){
		return view('admin.produk');
	}
	function showKategori(){
		return view('admin.kategori');
	}
	function showPromo(){
		return view('admin.promo');
	}
}