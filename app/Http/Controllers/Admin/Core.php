<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Country;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class Core extends Controller{
    public function __construct(){

    }

    public function getArticles(){

       $article = Article::find(6);

       echo $article->text;

        return;
    }

    public function getArticle($id){

    }


}
