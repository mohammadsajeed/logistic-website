<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;
use Image;
use Illuminate\Support\Facades\DB;


class sliderController extends Controller
{
    public function add_slider(Request $request){

        $request->validate([
            "title"=> "required",
            "description"=>  "required",
            "file"=>  "required",
        ]);
        // $img = time().'.'.$request->file->extension();
        // $request->file->move(public_path('pic'),$img);
        $imge = $request->file;

        $filename= $imge->getClientOriginalName();
        $imgesresize = image::make($imge->getRealPath());
        $imgesresize->resize(1900,1200);
        $imgesresize->save(public_path('pic/'.$filename));

         $insert = DB::table('sliders')->insert([
           "title" =>  $request->title ,
           "description" =>  $request->description,
           "pic" =>  $filename,
         ]);

           session()->flash("success","Your data has been inserted");
             return redirect('slider');  
             if($errors->any()){
               session()->flash('errors', $errors);
             }    
              
        
    }

    public function red_slider(){
         
        $red_slider = DB::table('sliders')->OrderBy('id','desc')->get();

         return  view('slider',compact('red_slider'));

        
    }
     public function slider_delete($slider_id){
         $slider = slider::find($slider_id);
         $slider->delete();
         $imges = $slider->pic;
          unlink('pic/'.$imges);
         session()->flash("den","Data Has Been Deleted");
         return redirect('slider');
     }

     // front end query 
     public function get_slider(){
      $red_slider_front = DB::table('sliders')->OrderBy('id','desc')->limit(1)->get();
       return response()->json($red_slider_front);
     }
}
