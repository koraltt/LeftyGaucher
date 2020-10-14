<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{   
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $products= Product::orderBy('id', 'desc')->get();
        return view('products.index', ['products' =>$products]);
        
    }
    
     // filtering categories

            public function showCategory($category){
                $products= Product::where('category_id', $category)->get();
                return view('products.index', ['products' =>$products]);
                }

    public function handleAdmin()
    {
        return view('admin.admin');
    } 

    public function show($id){
        $product = Product::findOrFail($id);
            return view('products.show', ['product' => $product]);
        }
        
    public function create(){
        return view('products.create');
            }

    public function store(Request $request){
                $product= new Product();
                $product->titleFr = request('titleFr');
                $product->titleEng = request('titleEng');
                $product->descriptionFr = request('descriptionFr');
                $product->descriptionEng = request('descriptionEng');
                $product->brand = request('brand');
                $product->quantity = request('quantity');
                $product->regularPrice = request('regularPrice');
                $product->discountPrice = request('discountPrice');
                $product->categoryFr = request('categoryFr');
                $product->categoryEng = request('categoryEng');
                
                if($request->hasFile('imgUrl')){
                    $file = $request->file('imgUrl');
                    $destinationPath = 'images/';
                    $fileName = $file->getClientOriginalName(); 
                    $imagePath = $destinationPath.$fileName;
                    $file->move($destinationPath, $fileName);
                    $product->imgUrl = request($destinationPath, $imagePath);
                
                 }

                 if($request->hasFile('imgUrl2')){
                    $file = $request->file('imgUrl2');
                    $destinationPath= 'images/';
                    $fileName = $file->getClientOriginalName(); 
                    $imagePath = $destinationPath.$fileName;
                    $file->move($destinationPath, $fileName);
                    $product->imgUrl2 = request($destinationPath, $imagePath);
                
                 }
              
                $product->save();
                
                return redirect('/')->with('mssg', "Le produit est sauvegardé");
                error_log($product);
                
        
     }
    



    public function destroy($id) {
        $product = Product::findOrFail($id);
            $product->delete();
            return redirect('/products');
        }

        


}
