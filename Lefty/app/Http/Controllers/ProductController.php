<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products= Product::orderBy('id', 'desc')->get();
        return view('products.index', ['products' =>$products]);
        
    }
    public function show($id){
        $product = Product::findOrFail($id);
            return view('products.show', ['product' => $product]);
        }
    public function create(){
        return view('products.create');
            }



    public function destroy($id) {
        $product = Product::findOrFail($id);
            $product->delete();
            return redirect('/products');
        }

        public function store(){
            $product= new Product();
            $product->frenchShort = request('frenchShort');
            $product->engShort = request('engShort');
            $product->frenchLong = request('frenchLong');
            $product->engLong = request('engLong');
            $product->brand = request('brand');
            $product->price = request('price');
            $product->discountPrice = request('discountPrice');
            $product->categoryFr = request('categoryFr');
            $product->categoryEn = request('categoryEn');
            $product->imgName = request('imgName');
            $product->imgName2 = request('imgName2');
          
            $product->save();
            
            return redirect('/')->with('mssg', "Le produit est sauvegardé");
            errorr_log($product);
            
    
        }
            // filtering categories

            public function showCategory($category){
                $products= Product::where('category_id', $category)->get();
                return view('products.index', ['products' =>$products]);
                }


}
