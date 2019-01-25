<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user(){
        return Article::belongsTo('App\User');
    }

    public function getTextAttribute($value){
        return 'es boyov em '.$value;
    }
}
