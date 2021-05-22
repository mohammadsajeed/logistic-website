<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class testController extends Controller
{
    
    public function index(){
        $store =  Http::get("https://jsonplaceholder.typicode.com/posts");
        

        return $store;
    }
}
