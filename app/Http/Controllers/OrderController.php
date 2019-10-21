<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Banner;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        return view('', compact('orders'));
    }

    /**
     * @param $userId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filterByUser($userId)
    {
        $orders = Order::where('user_id', $userId)->get();
        return view('', compact('orders'));
    }

    /**
     * @param $productId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filterByProduct($productId)
    {
        $orders = Order::where('product_id', $productId)->get();
        return view('', compact('orders'));
    }

    /**
     * @param $typeId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function filterByType($typeId)
    {
        $orders = Order::where('type_id', $typeId)->get();
        return view('', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        $trackingCode=Str::random(10);
        $requestData['tracking_code']=$trackingCode;
        $order = Order::create($requestData);
        // if its type is banner or announcement
        $requestData['order_id'] = $order->id;
        if ($request->type_id == 'بنر') {
            Banner::create($requestData);
        }
        if ($request->type_id == 'اعلامیه') {
            Announcement::create($requestData);
        }
        return redirect('',$trackingCode)->with('message', 'سفارش با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $requestData = $request->all();
        $order->update($requestData);
        // if its type is banner or announcement

        if ($request->type == 'بنر') {
            $order->banner->update($requestData);
        }
        if ($request->type == 'اعلامیه') {
            $order->announcement->update($requestData);
        }
        return back()->with('message', 'سفارش با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order $order
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Order $order)
    {
        $order->delete();

        return back()->with('message', 'سفارش با موفقیت حذف شد');
    }

}
