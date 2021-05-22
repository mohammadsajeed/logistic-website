<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ad;
use Image;

class adController extends Controller
{
      public function red_advisor(){
          $adv_red =  ad::OrderBy('id','desc')->get();

          
        return view('adviser',compact('adv_red'));
      }
      public function add_adviser(Request $requst){
          $requst->validate([
              'adv_name'=> ' required',
              'ad_position'=> ' required',
              'file'=> ' required',
          ]);

        $image = $requst->file;
        $filename = $image->getClientOriginalName();
        $imageresize = image::make($image->getRealPath());
        $imageresize->resize(300,350);
        $imageresize->save(public_path('pic/'. $filename));
        
        $insert = DB::table('ads')->insert([
            'name'=> $requst->adv_name,
            'pic'=>   $filename,
            'posetion'=> $requst->ad_position,
        ]);

        if($insert){
            session()->flash('success','Your data has been inserted');
             return redirect('advisor');
        }else{
            session()->flash('w','Somethin worng ');
             return redirect('advisor');
        }

        

      }

       public function  delete_ad($id){
         $delete = ad::find($id);
         $pictah =  $delete->pic;
         unlink('pic/'.$pictah);
         $deleted =  $delete->delete();
         if($delete){
            session()->flash("den","Data Has Been Deleted");
              return redirect('advisor');
         }else{
            session()->flash("w","somethings worng");
            return redirect('advisor');
         }

       }

       public function web_red(){
         $web_red = ad::OrderBy('id','desc')->get();
         return response()->json($web_red);

        
       }
       // front in  opration functions 

       public  function get_team_front(){
        $team = ad::OrderBy('id','desc')->limit(5)->get();
         return response()->json($team);
       
        
       }

       
}
