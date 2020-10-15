<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use DB;


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

    public function handleAdmin(){
        $products= Product::orderBy('id', 'desc')->get();
            return view('admin.admin',['products' =>$products]);
    }
  

          

    public function show($id){
             $product = Product::findOrFail($id);
                return view('products.show', ['product' => $product]);
            } 

    public function create(){
                return view('admin.create');
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
                $product->discountPrice = request('discountPrice');
                $product->category_id = request('category_id');
                $product->categoryFr = request('categoryFr');
                $product->categoryEn = request('categoryEn');
                
                if($request->hasFile('imgUrl')){
                    $file = $request->file('imgUrl');
                    $destinationPath = 'images/';
                    $fileName = $file->getClientOriginalName(); 
                    $imagePath = $destinationPath.$fileName;
                    $file->move($destinationPath, $fileName);                
                   /*  $product->imgUrl = request($fileName); */
      /*                $product->imgUrl = request($destinationPath, $imagePath); */
                   $product->imgUrl = request($destinationPath,$fileName); 
                 }

                 if($request->hasFile('imgUrl2')){
                    $file = $request->file('imgUrl2');
                    $destinationPath= 'images/';
                    $fileName2 = $file->getClientOriginalName(); 
                    $imagePath = $destinationPath.$fileName2;
                    $file->move($destinationPath, $fileName2);
                    /* $product->imgUrl2 = request($destinationPath, $imagePath);  */
                    $product->imgUrl2 = request($destinationPath, $fileName2); 
                
                 }
              
                $product->save();
                
                return redirect('/')->with('mssg', "Le produit est sauvegardé");
                error_log($product);
                
        
                }



              

   /*  public function destroy($id) {
        $product = Product::findOrFail($id);
            $product->delete();
            return redirect('/products');
        } */

    
   /*  public function update(Request $request,$id) {
        $titleFr = $request->input('titleFr');
        DB::update('update product set titleFR = ? where id = ?',[$titleFr,$id]);
        echo "Record updated successfully.<br/>";
        echo '<a href = "/edit-records">Click Here</a> to go back.';
     } */



     
     public function update(Request $request,$id) {
        $titleFr = $request->input('titleFr');
        $titleEng = $request->input('titleEng');
        $descriptionFr = $request->input('descriptionFr');
        $descriptionEng = $request->input('descriptionEng');
        $brand = $request->input('brand');
        $quantity = $request->input('quantity');
        $regularPrice = $request->input('regularPrice');
        $discountPrice = $request->input('discountPrice');
        $category_id = $request->input('category_id');
        $categoryFr = $request->input('categoryFr');
        $categoryEn = $request->input('categoryEn');
        $imgUrl="";
        $imgUrl2="";
        if($request->hasFile('imgUrl')){
            $file = $request->file('imgUrl');
            $destinationPath = 'images/';
            $fileName = $file->getClientOriginalName(); 
            $imagePath = $destinationPath.$fileName;
            $file->move($destinationPath, $fileName);                
          
         $imgUrl = $fileName; 
         
         
         }

         if($request->hasFile('imgUrl2')){
            $file = $request->file('imgUrl2');
            $destinationPath= 'images/';
            $fileName2 = $file->getClientOriginalName(); 
            $imagePath = $destinationPath.$fileName2;
            $file->move($destinationPath, $fileName2);
            $imgUrl2 = $fileName2;
         
/*             $imgUrl2 = request($destinationPath, $fileName2); */ 
        
         
         }
       
         DB::table('products')
        ->where('id',$id)
        ->update(['titleFr' => $titleFr, 
        'titleEng' => $titleEng, 
        'descriptionFr'=> $descriptionFr,
        'descriptionEng' => $descriptionEng, 
        'brand' => $brand ,
        'quantity' => $quantity,
        'regularPrice' => $regularPrice,      
        'discountPrice' => $discountPrice,
        'category_id'=> $category_id,
        'categoryFr' => $categoryFr,
        'categoryEn' => $categoryEn,
        'imgUrl'=> $imgUrl,
        'imgUrl2'=>$imgUrl2]
        
        
        
    );
    
        echo "Les données sont modifiées<br/>";
        return redirect('/admin');

 
     } 

    




     public function adminDetails($id){

        $products = DB::select('select * from products where id = ?',[$id]);
           return view('products.modify', ['products' => $products]);
       
    } 

     
/*      public function show($id) {
        $products = DB::select('select * from products where id = ?',[$id]);
        return view('products/',['products'=>$products]);
     }
     */
        
     /*    DB::update('update products set titleFr = ? where id = ?',[$titleFr,$id]);
         */


        public function delete($id){

                   
            DB::table('products')->where('id',$id)->delete();
            return redirect('/admin')
            ->with('success', 'Project deleted successfully');
        }
   



}


