<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "Pilih produk yang ingin dipilih";
        $viewData["products"] = Product::all();
        return view('home.index')->with("viewData", $viewData);
    }


    public function about()
    {
        $viewData = [];
        $viewData["title"] = "About us - Online Store";
        $viewData["subtitle"] = "About us";
        $viewData["description"] = "Ini adalah halaman tentang alat perlengkapan dari Lektro Shop ";
        $viewData["author"] = "Developed by: Lektro Shop";
        return view('home.about')->with("viewData", $viewData);
    }
}
