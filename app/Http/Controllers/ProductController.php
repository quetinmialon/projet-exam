<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\services\ProductsService;

class ProductController extends Controller
{
    public function __construct(private ProductsService $productService){

    }
    public function index(Request $request){
        $name = $request->input('search');
        if($name){
            return view('home',["products"=> $this->productService->getProductSearched($name)]);
        }
       return view('home',["products"=> $this->productService->getProducts()]);
    }
    public function getById(Request $request){
        $id = $request->id;
        // dd($id);
        return view('product', ["product"=> $this->productService->getOneProduct($id)]);
       
    }
}
