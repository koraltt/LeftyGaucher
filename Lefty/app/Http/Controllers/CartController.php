<?php

namespace App\Http\Controllers;
use Cart;
use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller

{

  /*   public function addConditions()
    {
     $condition1 = new \Darryldecode\Cart\CartCondition(array(
         'name' => 'TVS',
         'type' => 'tax',
         'value' => '+5%',
     ));
     $condition2 = new \Darryldecode\Cart\CartCondition(array(
         'name' => 'TVQ',
         'type' => 'tax',
         'value' => '+10%',
     ));
     \Cart::condition($condition1);
     \Cart::condition($condition2);
    } */
    
   public function index()
   {
   

    $cartItems = \Cart::session(auth()->id())->getContent();
       return view('cart.index', compact('cartItems'));
   }
   public function destroy($itemId)
   {
     \Cart::session(auth()->id())->remove($itemId);
       return back();
   }
   public function update($rowId)
    {

        \Cart::session(auth()->id())->update($rowId, [
            'quantity' => [
                'relative' => false,
                'value' => request('quantity')
            ],
        ]);

        return back();
    }

   /*  function without conditions
    public function add(Product $product){
      
              
               \Cart::session(auth()->id())->add(array(
                'id' => $product->id,
                'name' => $product->titleFr,
                'price' => $product->regularPrice,
                'quantity' => 1,
           
                'associatedModel'=>'Product' 
                    
                
            ));
                      return redirect()->route('cart.index');
        
           } */

           
public function add(Product $product){
    /*      request('color') */
    
      /*   dd($product); */
   
    $item = array(
    
            'id' => $product->id,
            'name' => $product->titleFr,
            'price' => $product->regularPrice,
            'quantity' => 1,
        
            'associatedModel'=>'Product' 
    );
           \Cart::session(auth()->id())->add($item); 
            
    
        return redirect()->route('cart.index');
    
       }


       public function checkout()
   {
    
       return view('cart.checkout');
   }

}
