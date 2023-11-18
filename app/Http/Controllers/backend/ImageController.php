<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\str;
use App\Models\imageModel;
use File;
use Image;

class ImageController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = imageModel::orderBy('id', 'asc')->get();
        return view('backend.pages.image.manage', compact('images'));
    }  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.image.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $images = new imageModel;
        $images->location        = $request->location;
        $images->size            = $request->size;
        $images->image           = $request->image;

        if($request->image){
            $image      = $request->file('image');
            $img        = time().'.'. $image->getClientOriginalExtension();
            $location   = public_path('image/custom/'.$img );
            Image::make($image)->save($location);
            $images->image = $img;
        }

        $images->save();
        return redirect()->route('image.manage');
        
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $image = imageModel::find($id);
        if ( !is_null($image) ) {
            return view('backend.pages.image.edit', compact('image'));
        }
        else{
            //not found
        }
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $image = imageModel::find($id);
        if ( !is_null($image) ) {
            $image->location        = $request->location;
            $image->size            = $request->size;
            $image->image           = $request->image;
            $image->save();
            return redirect()->route('image.manage');
        }
        else{
            //not found
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
