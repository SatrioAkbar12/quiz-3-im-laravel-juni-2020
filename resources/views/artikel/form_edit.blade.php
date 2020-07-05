@extends('layouts/master')

@section('head_title', 'Buat Artikel')

@section('konten')
    <h1>Edit Artikel</h1>

    @foreach ($artikel as $a)
        <form action="/artikel/{{$a->id_artikel}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="judul_artikel">Judul Artikel :</label>
                <input type="text" name="judul" id="judul_artikel" class="form-control" placeholder="Judul Artikel ..." value="{{$a->judul}}" required>
            </div>
            <div class="form-group">
                <label for="isi_artikel">Isi Artikel :</label>
                <textarea name="isi" id="isi_artikel" class="form-control" rows="10" placeholder="Isi Artikel ..." required>{{$a->isi}}</textarea>
            </div>
            <div class="form-group">
                <label for="tag_artikel">Tag Artikel :</label>
                <input type="text" name="tag" id="tag_artikel" class="form-control" placeholder="Contoh : tag 1,tag 2,tag 3,..." value="{{$a->tag}}" required>
            </div>
            <input type="submit" class="btn btn-success" value="Simpan">
            <a href="/artikel" class="btn btn-danger">Batal</a>
        </form>
    @endforeach

@endsection
