<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static function insertData($data){
        $value=DB::table('city')->where('name', $data['name'])->get();
        if($value->count() == 0){
           DB::table('city')->insert($data);
        }
    }
}
