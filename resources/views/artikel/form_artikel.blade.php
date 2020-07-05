@extends('layouts/master')

@section('head_title', 'Buat Artikel')

@section('konten')
    <h1>Buat Artikel Barumu</h1>

    <form action="/artikel" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul_artikel">Judul Artikel :</label>
            <input type="text" name="judul" id="judul_artikel" class="form-control" placeholder="Judul Artikel ..." required>
        </div>
        <div class="form-group">
            <label for="isi_artikel">Isi Artikel :</label>
            <textarea name="isi" id="isi_artikel" class="form-control" rows="10" placeholder="Isi Artikel ..." required></textarea>
        </div>
        <div class="form-group">
            <label for="tag_artikel">Tag Artikel :</label>
            <textarea name="tag" id="tag_artikel" class="form-control" placeholder="contoh tag 1,contoh tag 2,contoh tag 3,..." required></textarea>
        </div>
        <input type="submit" class="btn btn-success" value="Simpan">
        <a href="/artikel" class="btn btn-danger">Batal</a>
    </form>
@endsection
