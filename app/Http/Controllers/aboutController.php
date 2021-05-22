<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\about;
Use Image;




class aboutController extends Controller
{
       public function red_about(){
         $abo = DB::table('abouts')->OrderBy('id','desc')->get();
           
         return view ('about',compact('abo'));
       }

       public function add_about(Request $request){

      
        $request->validate([
          "title"=> "required",
          "description"=> "required",
          'file'=>'required|image|mimes:jpg,png,jpeg',
           ]);
            $imge = $request->file;
            $filename = $imge->getClientOriginalName();
            $imgesresize= image::make($imge->getRealPath());
            $imgesresize->resize(700,800);
            $imgesresize->save(public_path('pic/'.$filename ));

            $insert =  DB::table('abouts')->insert([
              'title'=> $request->title,
              'description'=> $request->description,
              'pic'=>  $filename,
                ]);
   
            if($insert){
                session()->flash('success','Your Data Has Been Inserted');
                 return redirect('about');
            }else{
              return redirect('about');
            }

             
       }

        public  function  about_delete($d_id){
                $delte  =  about::find($d_id);
                $image = $delte->pic;
                unlink('pic/'.$image);
               if( $delte->delete()){
                      
                  session()->flash('dan',"Your Data  Has Been Deleted");
                  return redirect('about');
               }else{
                session()->flash('w',"Something is worng");
                return redirect('about');
               }


        }

         // front end opreations 

          public function front_red(){
               $about_red = about::OrderBy('id','desc')->get();
                return response()->json($about_red);
          }
          public function get_about(){
            $get_about = about::OrderBy('id','desc')->limit(1)->get();

             return response()->json($get_about);
         
          }
}
