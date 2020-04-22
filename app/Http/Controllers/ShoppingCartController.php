<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function index()
    {
        $orders = session()->get('cart');
        return view('pages.cart', compact('orders'));
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart');
        if (!$cart) {
            $cart = [];
        }
        $requestData = $request->all();
        if ($request->hasfile('file')) {
            foreach ($request->file('file') as $i => $file) {
                $name = uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move('./files/orders', $name);
                $requestData['file'][$i] = $name;
            }
        }
        if ( $requestData['type_id']==1 or  $requestData['type_id']==2){
             $requestData['description'] = array_key_exists('description', $requestData) ?   $requestData['description']:'';
             $requestData['description'] =  $requestData['description'].'---- از طرف :'. $requestData['from'].'---- برای :'. $requestData['to'];
            if(array_key_exists('topic', $requestData)){
                 $requestData['description'] =  $requestData['description'].'--- مناسبت :'. $requestData['topic'];
            }
        }

        $requestData['price'] = $requestData['price']*$requestData['nums'];
        array_push($cart, $requestData);

        session()->put('cart', $cart);
        return redirect()->to('/cart')->with('message', 'سفارش با موفقیت به سبد اضافه شد');


//        // if cart not empty then check if this product exist then increment quantity
//        if(isset($cart[$id])) {
//
//            $cart[$id]['quantity']++;
//
//            session()->put('cart', $cart);
//
//            return redirect()->back()->with('success', 'Product added to cart successfully!');
//
//        }

        // if item not exist in cart then add to cart with quantity = 1
//        $cart[$id] = [
//            "name" => $product->name,
//            "quantity" => 1,
//            "price" => $product->price,
//            "photo" => $product->photo
//        ];
//
//        session()->put('cart', $cart);
//
//        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id and $request->quantity) {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    public function remove($index)
    {

        $cart = session()->get('cart');

        if (isset($cart[$index])) {

            unset($cart[$index]);

            session()->put('cart', $cart);
        }

        return back();

    }
}
