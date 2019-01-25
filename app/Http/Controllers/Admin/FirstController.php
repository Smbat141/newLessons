<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function show(){
        $data = [
            'title' => 'Laravel lessons',
            'caption' => 'Laravel',
        ];
        if(view()->exists('layouts.welcome')){
            return view('layouts.welcome',$data);
        }

    }
}
