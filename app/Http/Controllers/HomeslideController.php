<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Intervention\Image\Facades\Image;

class HomeslideController extends Controller
{
    //
    public function homeSlider(){
        $homeslide = Home::find(1);
        return view('admin.home_slide.home_slide_all',compact('homeslide'));

    }

    public function updateSlide(Request $request)
    {
        $slide_id = $request->id;

        if($request->file('slider_image'))
        {
            $image = $request->file('slider_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(636,852)->save('upload/home_slide/'.$name_gen);
            $save_url = 'upload/home_slide/'.$name_gen;


            Home::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,
                'home_slides' => $save_url,

            ]);
            $notification = array(
            'message' => 'Home Slide Updated with Image Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
        }
        else{

            Home::findOrFail($slide_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'video_url' => $request->video_url,

            ]);
            $notification = array(
            'message' => 'Home Slide Updated Successfully without Image ',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

    }

}
