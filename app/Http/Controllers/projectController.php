<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\project;
use Image;

class projectController extends Controller
{
    public function red_project(){

         $project =  DB::table('projects')->OrderBy('id','desc')->get();

        return view('projects',compact('project'));
    }
    
    public function add_project(Request $request){
        $request->validate([
            'title'=> 'required',
            'description'=> 'required',
            'file'=> 'required',
            'project_date'=>'required'
        ]);

        // $imges = time().'.'.$request->file->extension();
        // $request->file->move(public_path('pic'),$imges);
        $imge = $request->file;
        $filename = $imge->getClientOriginalName();
        $imgesresize= image::make($imge->getRealPath());
        $imgesresize->resize(600,400);
        $imgesresize->save(public_path('pic/'.$filename ));
         
        $insert_project =  DB::table('projects')->insert([
            'title'=> $request->title,
            'description'=> $request->description,
            'pic'=> $filename,
            'date'=> $request->project_date,
        ]);

        if( $insert_project){
            session()->flash('success','Your Data Has Been Saved');
            return redirect('project');
        }else{
            session()->flash('w','Somethings has worng');
            return redirect('project');
        }

    }
    public function  delete_project($pro_id){
          $delete = project::find($pro_id);
           $imges = $delete->pic;
          unlink('pic/'.$imges);
          $delete_done =  $delete->delete();

          if($delete_done){
                session()->flash('dan','Your Data Has Been Deleted');
                return redirect('project');
                
          }else{
            session()->flash('w','Something worng ');
            return redirect('project');
            
          }
          
          
    }

    public function getproject(){
        $red_pro = DB::table('projects')->Orderby('id','desc')->get();
        return response()->json($red_pro);
         
    }
    // front end qaury 
    
    public function get_project(){
        $red_front  = DB::table('projects')->Orderby('id','desc')->limit(3)->get();

        return response()->json($red_front);
    }
}
