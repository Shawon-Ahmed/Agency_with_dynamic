<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentModel;
use App\Models\imageModel;
use App\Models\User;
use File;
use Image;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $image = imageModel::find(9);
        $image1 = imageModel::find(10);
        $image17 = imageModel::find(17);
        $image18 = imageModel::find(18);
        $image19 = imageModel::find(19);
        $image20 = imageModel::find(20);
        $image21 = imageModel::find(21);

        $image22 = imageModel::find(22);
        $image23 = imageModel::find(22);
        $image24 = imageModel::find(24);
        $image25 = imageModel::find(25);
        $image26 = imageModel::find(26);
        $image27 = imageModel::find(27);
        $image28 = imageModel::find(28);
        $image29 = imageModel::find(29);
        $image30 = imageModel::find(30);
        $image31 = imageModel::find(31);
        $image32 = imageModel::find(32);
        $image33 = imageModel::find(33);
        $image34 = imageModel::find(34);
        $image35 = imageModel::find(35);
        $image36 = imageModel::find(36);
        $image37 = imageModel::find(37);
        $image38 = imageModel::find(38);
        $image39 = imageModel::find(39);
        $image40 = imageModel::find(40);
        $image41 = imageModel::find(41);

        

        

        $Fcontent = ContentModel::find(1);
        $Fcontent2 = ContentModel::find(2);
        $Fcontent3 = ContentModel::find(3);
        $Fcontent4 = ContentModel::find(4);
        $Fcontent5 = ContentModel::find(5);
        $Fcontent6 = ContentModel::find(6);
        $Fcontent7 = ContentModel::find(7);
        $Fcontent8 = ContentModel::find(8);
        $Fcontent9 = ContentModel::find(9);
        $Fcontent10 = ContentModel::find(10);
        $Fcontent11 = ContentModel::find(11);
        $Fcontent12 = ContentModel::find(12);
        $Fcontent13 = ContentModel::find(13);
        $Fcontent14 = ContentModel::find(14);
        $Fcontent15 = ContentModel::find(15);
        $Fcontent16 = ContentModel::find(16);
        $Fcontent17 = ContentModel::find(17);
        $Fcontent18 = ContentModel::find(18);
        $Fcontent19 = ContentModel::find(19);
        $Fcontent20 = ContentModel::find(20);
        $Fcontent21 = ContentModel::find(21);
        $Fcontent22 = ContentModel::find(22);
        $Fcontent23 = ContentModel::find(23);
        $Fcontent24 = ContentModel::find(24);
        $Fcontent25 = ContentModel::find(25);
        $Fcontent26 = ContentModel::find(26);
        $Fcontent27 = ContentModel::find(27);
        $Fcontent28 = ContentModel::find(28);
        $Fcontent29 = ContentModel::find(29);
        $Fcontent30 = ContentModel::find(30);
        $Fcontent31 = ContentModel::find(31);
        $Fcontent32 = ContentModel::find(32);
        $Fcontent33 = ContentModel::find(33);
        $Fcontent34 = ContentModel::find(34);
        $Fcontent35 = ContentModel::find(35);
        $Fcontent36 = ContentModel::find(36);
        $Fcontent37 = ContentModel::find(37);
        $Fcontent38 = ContentModel::find(38);
        $Fcontent39 = ContentModel::find(39);
        $Fcontent40 = ContentModel::find(40);
        $Fcontent41 = ContentModel::find(41);
        $Fcontent42 = ContentModel::find(42);
        $Fcontent43 = ContentModel::find(43);
        $Fcontent44 = ContentModel::find(44);
        $Fcontent45 = ContentModel::find(45);
        $Fcontent46 = ContentModel::find(46);
        $Fcontent47 = ContentModel::find(47);
        $Fcontent48 = ContentModel::find(48);
        

        return view('frontend.pages.homepage',
            compact(
                "image",
                "image1",
                "image17",
                "image18",
                "image19",
                "image20",
                "image21",
                "image22",
                "image23",
                "image24",
                "image25",
                "image26",
                "image27",
                "image28",
                "image29",
                "image30",
                "image31",
                "image32",
                "image33",
                "image34",
                "image35",
                "image36",
                "image37",
                "image38",
                "image39",
                "image40",
                "image41"
             )
            )


            ->with('Fcontent', $Fcontent)
            ->with('Fcontent2', $Fcontent2)
            ->with('Fcontent3', $Fcontent3)
            ->with('Fcontent4', $Fcontent4)
            ->with('Fcontent5', $Fcontent5)
            ->with('Fcontent6', $Fcontent6)
            ->with('Fcontent7', $Fcontent7)
            ->with('Fcontent8', $Fcontent8)
            ->with('Fcontent9', $Fcontent9)
            ->with('Fcontent10', $Fcontent10)
            ->with('Fcontent11', $Fcontent11)
            ->with('Fcontent12', $Fcontent12)
            ->with('Fcontent13', $Fcontent13)
            ->with('Fcontent14', $Fcontent14)
            ->with('Fcontent15', $Fcontent15)
            ->with('Fcontent16', $Fcontent16)
            ->with('Fcontent17', $Fcontent17)
            ->with('Fcontent18', $Fcontent18)
            ->with('Fcontent19', $Fcontent19)
            ->with('Fcontent20', $Fcontent20)
            ->with('Fcontent21', $Fcontent21)
            ->with('Fcontent22', $Fcontent22)
            ->with('Fcontent23', $Fcontent23)
            ->with('Fcontent24', $Fcontent24)
            ->with('Fcontent25', $Fcontent25)
            ->with('Fcontent26', $Fcontent26)
            ->with('Fcontent27', $Fcontent27)
            ->with('Fcontent28', $Fcontent28)
            ->with('Fcontent29', $Fcontent29)
            ->with('Fcontent30', $Fcontent30)
            ->with('Fcontent31', $Fcontent31)
            ->with('Fcontent32', $Fcontent32)
            ->with('Fcontent33', $Fcontent33)
            ->with('Fcontent34', $Fcontent34)
            ->with('Fcontent35', $Fcontent35)
            ->with('Fcontent36', $Fcontent36)
            ->with('Fcontent37', $Fcontent37)
            ->with('Fcontent38', $Fcontent38)
            ->with('Fcontent39', $Fcontent39)
            ->with('Fcontent40', $Fcontent40)
            ->with('Fcontent41', $Fcontent41)
            ->with('Fcontent42', $Fcontent42)
            ->with('Fcontent43', $Fcontent43)
            ->with('Fcontent44', $Fcontent44)
            ->with('Fcontent45', $Fcontent45)
            ->with('Fcontent46', $Fcontent46)
            ->with('Fcontent47', $Fcontent47)
            ->with('Fcontent48', $Fcontent48)

        ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        // Content model 
        $Fcontent16 = ContentModel::find(16);
        $Fcontent17 = ContentModel::find(17);
        $Fcontent18 = ContentModel::find(18);
        $Fcontent19 = ContentModel::find(19);
        $Fcontent27 = ContentModel::find(27);
        $Fcontent49 = ContentModel::find(49);
        $Fcontent50 = ContentModel::find(50);
        $Fcontent51 = ContentModel::find(51);
        $Fcontent52 = ContentModel::find(52);
        $Fcontent53 = ContentModel::find(53);
        $Fcontent54 = ContentModel::find(54);
        $Fcontent55 = ContentModel::find(55);
        $Fcontent56 = ContentModel::find(56);
        $Fcontent57 = ContentModel::find(57);
        $Fcontent58 = ContentModel::find(58);
        $Fcontent59 = ContentModel::find(59);
        $Fcontent60 = ContentModel::find(60);
        $Fcontent61 = ContentModel::find(61);
        $Fcontent62 = ContentModel::find(62);
        $Fcontent63 = ContentModel::find(63);
        //imageModel
        $image42 = imageModel::find(42);
        $image43 = imageModel::find(43);
        $image44 = imageModel::find(44);
        $image45 = imageModel::find(45);
        $image46 = imageModel::find(46);
        $image47 = imageModel::find(47);
        $image48 = imageModel::find(48);
        $image49 = imageModel::find(49);
        $image50 = imageModel::find(50);
        $image51 = imageModel::find(51);
        $image52 = imageModel::find(52);
        $image53 = imageModel::find(53);
        $image54 = imageModel::find(54);
        $image55 = imageModel::find(55);

        return view('frontend.pages.about',
            
            compact(
                "image42",
                "image43",
                "image44",
                "image45",
                "image46",
                "image47",
                "image48",
                "image49",
                "image50",
                "image51",
                "image52",
                "image53",
                "image54",
                "image55"
            )
    
    )   
        ->with('Fcontent16', $Fcontent16)
        ->with('Fcontent17', $Fcontent17)
        ->with('Fcontent18', $Fcontent18)
        ->with('Fcontent19', $Fcontent19)
        ->with('Fcontent27', $Fcontent27)
        ->with('Fcontent49', $Fcontent49)
        ->with('Fcontent50', $Fcontent50)
        ->with('Fcontent51', $Fcontent51)
        ->with('Fcontent52', $Fcontent52)
        ->with('Fcontent53', $Fcontent53)
        ->with('Fcontent54', $Fcontent54)
        ->with('Fcontent55', $Fcontent55)
        ->with('Fcontent56', $Fcontent56)
        ->with('Fcontent57', $Fcontent57)
        ->with('Fcontent58', $Fcontent58)
        ->with('Fcontent59', $Fcontent59)
        ->with('Fcontent60', $Fcontent60)
        ->with('Fcontent61', $Fcontent61)
        ->with('Fcontent62', $Fcontent62)
        ->with('Fcontent63', $Fcontent63)
        ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact()
    {   
        //Image
        $image58 = imageModel::find(58);
        //Content
        $Fcontent651 = ContentModel::find(651);
        $Fcontent652 = ContentModel::find(652);
        $Fcontent653 = ContentModel::find(653);

        return view('frontend.pages.contact', 
        compact(
            "image58"
        ))
        ->with('Fcontent651', $Fcontent651)
        ->with('Fcontent652', $Fcontent652)
        ->with('Fcontent653', $Fcontent653)
        ;
    }

    /**
     * Display the specified resource.
     */
    public function product()
    {
        $image57 = imageModel::find(57);
        
        return view('frontend.pages.product', 
        compact(
            "image57"
        ))
        ;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function faq()
    {
        $image56 = imageModel::find(56);
        //Content
        $Fcontent64 = ContentModel::find(64);
        $Fcontent65 = ContentModel::find(65);
        $Fcontent66 = ContentModel::find(66);
        $Fcontent67 = ContentModel::find(67);
        $Fcontent68 = ContentModel::find(68);
        $Fcontent69 = ContentModel::find(69);
        $Fcontent70 = ContentModel::find(70);
        $Fcontent71 = ContentModel::find(71);
        $Fcontent72 = ContentModel::find(72);
        $Fcontent73 = ContentModel::find(73);

        return view('frontend.pages.faq', 
        compact(
            "image56"
        ))
        ->with('Fcontent64', $Fcontent64)
        ->with('Fcontent65', $Fcontent65)
        ->with('Fcontent66', $Fcontent66)
        ->with('Fcontent67', $Fcontent67)
        ->with('Fcontent68', $Fcontent68)
        ->with('Fcontent69', $Fcontent69)
        ->with('Fcontent70', $Fcontent70)
        ->with('Fcontent71', $Fcontent71)
        ->with('Fcontent72', $Fcontent72)
        ->with('Fcontent73', $Fcontent73)
        ;
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function bottombag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.bottombag', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function bottomgolfbag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.bottomgolfbag', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function foldbag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.foldbag', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function partspag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.partspag', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function pettoliumGass()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.pettoliumGass', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function polytubing()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.polytubing', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function sidebag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.sidebag', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function sidegolgbag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.sidegolgbag', compact("image42"));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function wickettledbag()
    {
        $image42 = imageModel::find(42);
        return view('frontend.pages.product.wickettledbag', compact("image42"));
    }
    /**
     * Update the specified resource in storage.
     */
    public function footer()
    {
        $Fcontent652 = ContentModel::find(652);
        return view('frontend.includes.footer')
        
        ->with('Fcontent652', $Fcontent652)
        ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
