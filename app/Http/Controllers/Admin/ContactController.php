<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller{
    protected $request;

    public function __construct(Request $request){
        $this->request=$request;
    }

    public function show(){
        $data = [
            'title' => 'Laravel lessons',
        ];

        return view('layouts.contacts',$data);
    }
}
