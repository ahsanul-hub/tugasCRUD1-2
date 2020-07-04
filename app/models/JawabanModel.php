<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
class JawabanModel {
    public static function get_all(){
        $items = DB::table('jawabans')->get();
        return $items;
    }

    public static function save($data){
        $new_item = DB::table('jawabans')->insert($data);
        return $new_item;
    }


}
