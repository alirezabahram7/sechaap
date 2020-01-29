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
                $file->move(public_path() . '/files/orders', $name);
                $requestData['file'][$i] = $name;
            }
        }


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
