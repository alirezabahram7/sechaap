<?php

namespace App\Http\Controllers;

use App\Addition;
use App\AdditionType;
use App\Category;
use App\Http\Requests\AdditionRequest;
use App\Type;
use Illuminate\Http\Request;

class AdditionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function typeAdditions($typeId)
    {
        $additions = Addition::where('type_id',$typeId)->get();
        return view('pages.admin.addition_list',compact('additions'));
    }

    public function index(){
        $additions = Addition::latest()->get();
        return view('pages.admin.addition_list',compact('additions'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        $additionTypes = AdditionType::all();
        return view('pages.admin.add_addition',compact('types','additionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdditionRequest $request)
    {
        $requestData = $request->all();

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('./files/', $name);
            $requestData['image'] = $name;
        }
        Addition::create($requestData);

        return back()->with('message','نوع جدید با موفقیت ایجاد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addition  $addition
     * @return \Illuminate\Http\Response
     */
    public function show(Addition $addition)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addition  $addition
     * @return \Illuminate\Http\Response
     */
    public function edit(Addition $addition)
    {
        $additionTypes = AdditionType::all();
        return view('pages.admin.edit_addition',compact('addition','additionTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addition  $addition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addition $addition)
    {
        $requestData = $request->all();

        if ($request->has('image')) {
            $image = $request->file('image');
            $name = uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move('./files/', $name);
            $requestData['image'] = $name;
        }
        $addition->update($requestData);
        return back()->with('message','نوع جدید با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addition  $addition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addition $addition)
    {
        $addition->delete();

        return redirect()->to('/admin/addition')->with('message',' با موفقیت حذف شد');
    }
}
