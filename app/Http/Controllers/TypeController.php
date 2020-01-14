<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\TypeRequest;
use App\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $types = Type::all();
        return view('pages.admin.type_list',compact('types'));
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.add_type',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(TypeRequest $request)
    {
        Type::create($request->all());

        return back()->with('message','نوع جدید با موفقیت ایجاد شد');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return Response
     */
    public function show(Type $type)
    {
        return view('',compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type  $type
     * @return Response
     */
    public function edit(Type $type)
    {
        return view('',compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return Response
     */
    public function update(Request $request, Type $type)
    {
        $type->update($request->all());

        return back()->with('message','نوع با موفقیت ویرایش شد');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type $type
     * @return Response
     * @throws \Exception
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return back()->with('message','محصول با موفقیت حذف شد');
    }
}
