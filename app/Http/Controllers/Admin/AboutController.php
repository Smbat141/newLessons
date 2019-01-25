<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use DB;

class AboutController extends Controller
{
    public function show(){

        $page = DB::select('SELECT `name`,`text` FROM `pages` WHERE alias = ?',['about']);

        //dump($page);

        return view('layouts.about')->withPage($page[0])->withTitle('Laravel lessons');
    }
}
