<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\DB;
use App\Models\Service;

class serviceController extends Controller
{
     public function red_service(){
         $service =  DB::table('services')->OrderBy('id','desc')->get();
          return  view('service',compact('service'));

     }
     public function add_service(Request $request){

         $request->validate([
             "title"=> "required",
             "description"=> "required",
         ]);
          $insert = DB::table('services')->insert([
              "title"=> $request->title,
              "description"=> $request->description,

          ]);
          if($insert){
              session()->flash('success','Your Data Has Been Inserted.');
              return redirect('service');
          }else{
              session()->flash('w','Please Check Your Data');
          }
          

     }

     public function service_delete($service_id){
         $service_delete =  Service::find($service_id);
         $d=  $service_delete->delete();
         if($d){
            session()->flash('dan','Your Data has Been Deleted');
            return redirect('service');
         }else{
            session()->flash('w','sometings worning');
            return redirect('service');
         }


     }


     public  function getservice(){
        $red_services = DB::table('services')->Orderby('id','desc')->get();
        return response()->json($red_services);
     }

    public function get_service($ser_id){
          $service_details = Service::find($ser_id);
       
         return response()->json($service_details);
          
    }
    public function  red_service_front(){
          $service_front =  DB::table('services')->Orderby('id','desc')->get();

            return response()->json($service_front);

       
    }

}
