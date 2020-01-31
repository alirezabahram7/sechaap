<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Banner;
use App\Order;
use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Type;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('pages.admin.total_orders', compact('orders'));
    }

    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filterByUser(User $user)
    {
        $orders = Order::where('user_id', $user->id)->get();
        return view('pages.admin.total_orders', compact('orders', 'user'));
    }

    /**
     * @param $productId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filterByProduct($productId)
    {
        $orders = Order::where('product_id', $productId)->get();
        return view('pages.admin.total_orders', compact('orders'));
    }

    /**
     * @param $typeId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filterByType($typeId)
    {
        $orders = Order::where('type_id', $typeId)->get();
        return view('pages.admin.total_orders', compact('orders'));
    }

    public function filterByStatus($statusId)
    {
        $orders = Order::where('order_status_id', $statusId)->get();
        return view('pages.admin.total_orders', compact('orders'));
    }

    public function search(Request $request)
    {
        if ($request->tracking_code != '') {
            $orders[0] = Order::where('tracking_code', $request->tracking_code)->first();
            if ($orders) {
                return view('pages.profile', compact('orders'));
            }
            return back()->with('error', 'سفارش مورد نظر یافت نشد');
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Type $type
     * @return \Illuminate\Http\Response
     */
    public function create(Type $type,Request $request)
    {
        $product='';
        $additionTypes = $type->additionTypes;
        $additions = $type->additions;
        if($request->productId){
            $product = Product::findOrFail($request->productId);
        }
        return view('pages.create-order', compact('type', 'product', 'additionTypes', 'additions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $requestData = session()->get('cart');
        $trackingCode = Str::random(10);
//        $requestData['tracking_code'] = $trackingCode;
        foreach ($requestData as $datum) {
            $datum['tracking_code'] = $trackingCode;
            if (auth()->check()){
                $datum['user_id'] = auth()->id();
            }
            $order = Order::create($datum);
            if(isset($datum['file'])){
            foreach ($datum['file'] as $file) {
                $order->files()->create(['name' => $file]);
            }}
           $order->additions()->sync($datum['addition']);
        }

        return redirect('/', $trackingCode)->with('message', 'سفارش با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $additions =$order->additions;
        return view('pages.admin.edit_order', compact('order','additions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $requestData = $request->all();
        $order->update($requestData);
        // if its type is banner or announcement

//        if ($request->type == 'بنر') {
//            $order->banner->update($requestData);
//        }
//        if ($request->type == 'اعلامیه') {
//            $order->announcement->update($requestData);
//        }
        return back()->with('message', 'سفارش با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Order $order
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return back()->with('message', 'سفارش با موفقیت حذف شد');
    }

}
