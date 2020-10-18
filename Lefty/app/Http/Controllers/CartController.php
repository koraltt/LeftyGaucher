<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class CartController extends Controller
{
 

public function add(Product $product){
/*      request('color') */

  /*   dd($product); */
      
       \Cart::session(auth()->id())->add(array(
        'id' => $product->id,
        'name' => $product->titleFr,
        'price' => $product->regularPrice,
        'quantity' => 1,
       /*  'attributes' => array(), */
       /*  'image' => $product->imgUrl, */
        'associatedModel'=>'Product' 
            
        
    ));
    /* return back(); */
    return redirect()->route('cart.index');

   }
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

}
