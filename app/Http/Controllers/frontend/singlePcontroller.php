<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class singlePcontroller extends Controller
{
/**
     * Show the form for editing the specified resource.
     */
    public function bottombag()
    {
        return view('frontend.pages.product.bottombag');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function bottomgolfbag()
    {
        return view('frontend.pages.product.bottomgolfbag');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function foldbag()
    {
        return view('frontend.pages.product.foldbag');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function partspag()
    {
        return view('frontend.pages.product.partspag');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function pettoliumGass()
    {
        return view('frontend.pages.product.pettoliumGass');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function polytubing()
    {
        return view('frontend.pages.product.polytubing');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function sidebag()
    {
        return view('frontend.pages.product.sidebag');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function sidegolgbag()
    {
        return view('frontend.pages.product.sidegolgbag');
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function wickettledbag()
    {
        return view('frontend.pages.product.wickettledbag');
    }
}
