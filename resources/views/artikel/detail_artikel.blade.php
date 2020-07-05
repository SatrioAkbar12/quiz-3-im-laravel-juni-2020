@extends('layouts/master')

@section('head_title', 'Artikel')

@section('konten')
    <h1>Detail Artikel</h1>

    <ul class="list-group">
        <li class="list-group-item active">Detail</li>
        <li class="list-group-item">
            @foreach ($artikel as $a)
                <div class="row">
                    <div class="col-2">Judul artikel</div>
                    <div class="col-10">: {{$a->judul}}</div>
                </div>
                <div class="row">
                    <div class="col-2">Slug</div>
                    <div class="col-10">: {{$a->slug}}</div>
                </div>
                <div class="row">
                    <div class="col-2">Isi artikel</div>
                    <div class="col-10">:</div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <p style="white-space: pre-line">{{$a->isi}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                   <div class="col-1">Tags</div>
                   <div class="col-11">:</div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-wrap">
                            @foreach ($tag as $t)
                                <button class="btn btn-success">{{$t}}</button>
                                &nbsp;
                            @endforeach
                       </div>
                    </div>
                </div>
            @endforeach
        </li>
    </ul>

    &nbsp;

    <div class="d-flex justify-content-end">
        <a href="/artikel" class="btn btn-info">Kembali</a>
    </div>
    {{-- <form action="/artikel/{{$a->id_artikel}}" method="POST">
        @csrf
        @method('DELETE')
        <div class="d-flex justify-content-end">
            <a href="/artikel/{{$a->id_artikel}}/edit" class="btn btn-warning">Edit</a>
            &nbsp;&nbsp;
            <input type="submit" class="btn btn-danger" value="Hapus">
        </div>
    </form> --}}

    {{-- @endforeach --}}
@endsection
