<?php

namespace App\products\infrastructure\client\controllers;

use App\products\work_application\services\ProductsService;
use App\shared\Controller;
use Illuminate\Http\Request;

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
        return view('product', ["product"=> $this->productService->getOneProduct($id)]);

    }

    public function addProduct(Request $request){
        $name = $request->input('name');
        $price = $request->input('price');
        $productId = $this->productService->addProduct($name, $price);
        return redirect('/backOffice/products/'.$productId);
    }

    public function getProductForm(){
        return view('/backOffice/products/addProductForm');
    }

    public function getProductById(Request $request){
        $id = $request->productId;
        return view('/backOffice/products/product', ["product"=> $this->productService->getOneProduct($id)]);
    }

    public function getAllProducts(){
        return view ('/backOffice/products/products',["products"=> $this->productService->getProducts()]);
    }
}