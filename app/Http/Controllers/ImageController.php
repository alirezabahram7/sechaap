<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $media
     * @return Response
     */
    public function show(Image $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit()
    {
        $images = Image::all();
        return view('pages.admin.edit_images', compact('images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $media
     * @return Response
     */
    public function update(Request $request)
    {
        $images = $request->all();
dd($images);
        foreach ($images as $image){
            dd($image);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $media
     * @return Response
     */
    public function destroy(Image $media)
    {
        //
    }
}
