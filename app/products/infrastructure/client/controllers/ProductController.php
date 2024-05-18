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
        $description = $request->input('description');
        $imgPath = $request->file('img')->store('storage');
        $img = env('APP_URL')."storage/".$imgPath;
        $this->productService->addProduct($name, $price, $description, $img);
        return redirect('/backOffice/products');
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

    public function getUpdateProductForm(Request $request){
        return view('/backOffice/products/updateProduct',['product'=> $this->productService->getOneProduct($request->Id)]);
    }

    public function updateProduct(Request $request){
        $img = null;
        if($request->file('img')){
            $imgPath = $request->file('img')->store('storage');
            $img = env('APP_URL')."storage/".$imgPath;
        }
        $this->productService->updateProduct($request->id,$request->name,$request->price,$request->description,$img);
        return redirect('/backOffice/products');
    }

    public function deleteProduct(Request $request){
        $this->productService->deleteProduct($request->id);
        return redirect('/backOffice/products');
    }
}