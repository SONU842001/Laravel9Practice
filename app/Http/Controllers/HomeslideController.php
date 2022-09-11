<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeslideController extends Controller
{
    //
    public function homeSlider(){
        $homeslide = Home::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));

    }


    
}
