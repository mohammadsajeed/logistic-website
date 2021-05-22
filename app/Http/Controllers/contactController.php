<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contact;
     
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class contactController extends Controller
{
    public function contact_red(){
          $contact = DB::table('contacts')->Orderby('id','desc')->get();
          

         return view('contact' , compact('contact'));
    }

    public function add_contact(Request $request){
        $request->validate([
            'phone'=> 'required',
            'email'=> 'required',
            'address'=> 'required',

        ]);

        $insert = DB::table('contacts')->insert([
            'phone'=> $request->phone,
            'email'=> $request->email,
            'address'=> $request->address,
        ]);
        if($insert){
            session()->flash('success','Your Data Has Been Saved');
             return redirect('contact');
        }else{
            session()->flash('w','Something is worng');
            return redirect('contact');
        }
        
    }
     public function delete_contcat($id){
         $delete = contact::find($id);

         $de  =  $delete->delete();
         if($de){
                 session()->flash('dan','Data has been deleted');
                  return  redirect('contact');
         }else{
            session()->flash('w','Somethings worng');
            return  redirect('contact');

         }
      
         
     }

     public function getcontact(){
         $red = DB::table('contacts')->OrderBy('id','desc')->limit(1)->get();
         return response()->json($red);
     }
     function sendemail(Request $request){

        return "this email ";
        
        $name = $request->name;
        $email = $request->email;
        $subject = $request->subject;
        $message = $request->message;

        // $data = ['content'=>'Anything'];
        // $message = view('email.temp', $data)->render();

          
        require 'PHPMailer/vendor/autoload.php';
        $mail = new PHPMailer(true);
        $mail->SMTPDebug = 0;                                      
        $mail->isSMTP();                                          
        $mail->Host       = env('EMAIL_HOST');                        
        $mail->SMTPAuth   = true;                                  
        $mail->Username   = env('EMAIL_USERNAME');                  
        $mail->Password   = env('EMAIL_PASSWORD');                              
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
        $mail->Port       = 465;
        $mail->setFrom($email, $name); 
        $mail->addAddress('mohammad.sajeed@rta.af');
        $mail->isHTML(true);  
        $mail->Subject =  $subject;
        $mail->Body    = $message;
        $dt = $mail->send();
        if($dt){
               session()->flash('success','Your Email has been sent');
               return'ok ' ;
        } else{
            return ' no';
        }
     



    }



}

    
