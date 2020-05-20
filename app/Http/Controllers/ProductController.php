<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(30);
        return view('pages.admin.products', compact('products'));
    }

    /**
     * @param int $numbers
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getLatest($numbers = 10)
    {
        $products = Product::latest()->take($numbers);
        return view('', compact('products'));
    }

    /**
     * @param $typeId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showByType($typeId,Request $request)
    {
        $products = Product::where('type_id', $typeId);
        if($request->bannerType){
            $products = $products->where('banner_type',$request->bannerType);
        }
        $products = $products->latest()->paginate(30);
        return view('pages.products', compact('products','typeId'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.add_product');
    }

//    public function addKinds()
//    {
//        return view('pages.admin.add_product');
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        //validation in $request
        $product = Product::create($request->all());

        if ($request->has('photo')) {
            $image = $request->file('photo');
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('./files/', $name);
            $product->photo = $name;
        }

        $product->save();

        return redirect()->to(route('admin.edit.product',['id' => $product->id ]))->with('message', 'محصول با موفقیت افزوده شد');
    }


    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Product $product)
    {
        return view('', compact('product'));
    }


    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Product $product)
    {
        return view('pages.admin.edit_product', compact('product'));
    }

    /**
     * @param Request $request
     * @param Product $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        if ($request->has('photo')) {
            $filePath = './files/'.$product->photo;
            unlink($filePath);
            $image = $request->file('photo');
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move( './files/', $name);
            $product->photo = $name;
        }

        $product->save();
        return back()->with('message', 'محصول با موفقیت ویرایش شد');
    }

    /**
     * @param Product $product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function delete(Product $product)
    {
        return view('pages.admin.add_product', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Product $product)
    {
        $filePath = './files/'.$product->photo;
        unlink($filePath);
        $product->delete();
        return redirect()->to('/admin/product')->with('message',' با موفقیت حذف شد');
    }


}
