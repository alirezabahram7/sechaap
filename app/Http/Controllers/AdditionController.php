<?php

namespace App\Http\Controllers;

use App\Addition;
use App\AdditionType;
use App\Category;
use App\Http\Requests\AdditionRequest;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $additionTypes = AdditionType::all();
        return view('pages.admin.add_addition',compact('categories','additionTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdditionRequest $request)
    {
        Addition::create($request->all());
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
        return view('pages.admin.edit_addition',compact($addition));
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
        $addition->update($request->all());
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

        return back()->with('message',' با موفقیت حذف شد');
    }
}
