<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class ArtikelModel{
    public static function get_all(){
        $table = DB::table('artikel');
        $data = $table->get();

        return $data;
    }

    public static function get_with_idArtikel($id){
        $table = DB::table('artikel');
        $data = $table->where('id_artikel', $id);

        return $data;
    }

    public static function insert_artikel($data){
        $slug = str_replace(" ", "-", strtolower($data->judul));
        $time = date('Y/m/d H:i:s', time());

        $table = DB::table('artikel');
        $insert = $table->insert([
            'id_akun' => '',
            'judul' => $data->judul,
            'isi' => $data->isi,
            'slug' => $slug,
            'tag' => $data->tag,
            'created_at' => $time,
            'updated_at' => $time
        ]);

        return $insert;
    }

    public static function update_artikel($data){
        $slug = str_replace(" ", "-", strtolower($data->judul));
        $time = date('Y/m/d H:i:s', time());

        $table = DB::table('artikel');
        $update = $table->where('id_artikel', $data->id_artikel)->update([
            'judul' => $data->judul,
            'isi' => $data->isi,
            'slug' => $slug,
            'tag' => $data->tag,
            'updated_at' => $time
        ]);

        return $update;
    }

    public static function delete_artikel($id_artikel){
        $table = DB::table('artikel');
        $delete = $table->where('id_artikel', $id_artikel)->delete();

        return $delete;
    }
}
