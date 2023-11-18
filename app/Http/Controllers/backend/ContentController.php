<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentModel;
class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contents = ContentModel::orderBy('id', 'asc')->get();
        return view('backend.pages.content.manage', compact('contents'));
    }  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.content.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = new ContentModel;
        $content->content1      = $request->content1;
        $content->content2      = $request->content2;
        $content->content3      = $request->content3;
        $content->placeName      = $request->placeName;
        $content->save();
        return redirect()->route('content.manage');
        
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
        $content = ContentModel::find($id);
        if ( !is_null($content) ) {
            return view('backend.pages.content.edit', compact('content'));
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
        $content = ContentModel::find($id);
        if ( !is_null($content) ) {
            $content->content1      = $request->content1;
            $content->content2      = $request->content2;
            $content->content3      = $request->content3;
            $content->save();
            return redirect()->route('content.manage');
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
