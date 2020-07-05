<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class UserModel{
    public static function get_with_id($id){
        $table = DB::table('user');
        $user = $table->where('id', $id)->get();

        return $user;
    }
}
