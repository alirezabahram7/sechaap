<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Banner;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::paginate(30);
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
        $order = Order::create($requestData);
        // if its type is banner or announcement
        $requestData['order_id'] = $order->id;
        if ($request->type == 'بنر') {
            Banner::create($requestData);
        }
        if ($request->type == 'اعلامیه') {
            Announcement::create($requestData);
        }
        return redirect('')->with('message', 'سفارش با موفقیت ثبت شد');
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
