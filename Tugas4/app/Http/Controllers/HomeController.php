<?php

namespace App\Http\Controllers;

class HomeController extends Controller{

    function ShowBeranda(){
        return view ('beranda.base1');
    }
    function ShowIndex(){
        return view ('index');
    }
    function ShowShop(){
        return view ('shop');
    }
    function ShowContact(){
        return view ('contact');
    }
    
    function ShowHome(){
        return view ('home');
    }
    function ShowProduk(){
        return view ('produk');
    }
    function ShowSupplier(){
        return view ('Supplier');
    }
    
}