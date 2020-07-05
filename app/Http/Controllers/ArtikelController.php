<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function index(){
        $artikel = ArtikelModel::get_all();

        return view('artikel/index', ['artikel' => $artikel]);
    }

    public function create(){
        return view('artikel/form_artikel');
    }

    public function store(Request $request){
        $store = ArtikelModel::insert_artikel($request);

        return redirect('/artikel');
    }

    public function detail($id){
        $artikel = ArtikelModel::get_with_idArtikel($id);

        foreach($artikel as $a)
            $tag = explode(",", $a->tag);


        // dd($tag);

        return view('artikel/detail_artikel', ['artikel' => $artikel,'tag' => $tag]);
    }

    public function edit($id){
        $artikel = ArtikelModel::get_with_idArtikel($id);

        return view('artikel/form_edit', ['artikel' => $artikel]);
    }

    public function update(Request $request){
        $update = ArtikelModel::update_artikel($request);

        return redirect('/artikel');
    }

    public function delete($id){
        $delete = ArtikelModel::delete_artikel($id);

        return redirect('/artikel');
    }
}
