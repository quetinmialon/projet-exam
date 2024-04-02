<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\ProductsService;

class ProductController extends Controller
{
    public function __construct(private ProductsService $productService){

    }
    public function index(){
       return view('home',["products"=> $this->productService->getProducts()]);
    }
}
