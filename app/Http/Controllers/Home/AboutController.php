<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Image;
class AboutController extends Controller
{
    public function AboutPage(){
        $aboutpage =About::find(1);
        return view('/admin.about_page.about_page_all',compact('aboutpage'));
    }
    //End Method
    public function UpdateAboutPage(Request $request){

        $about_id = $request->id;

        if ($request->file('about_image')) {
            $image = $request->file('about_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg

            Image::make($image)->resize(636,852)->save('upload/about_images/'.$name_gen);
            $save_url = 'upload/about_images/'.$name_gen;

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
                'about_image' => $save_url,

            ]); 
            $notification = array(
            'message' => 'About Us Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } else{

            About::findOrFail($about_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'short_description' => $request->short_description,
                'long_description' => $request->long_description,
            ]); 
            $notification = array(
            'message' => 'About Us Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

        } // end Else

     } // End Method 
     public function HomeAbout(){
        $aboutpage =About::find(1);
        return view('front-office.about_page',compact('aboutpage'));
     }
}
