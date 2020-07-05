@extends('layouts/master')

@section('head_title', 'Kumpulan Artikel')

@section('konten')
    <div class="jumbotron">
        <h1>Kumpulan Artikel</h1>
    </div>

    <a href="/artikel/create" class="btn btn-primary">Buat Artikelmu</a>

    @if(count($artikel) != 0)
        @foreach ($artikel as $a)
            <ul class="list-group">
                <li class="list-group-item">{{$a->judul}}</li>
            </ul>
        @endforeach
    @else
        <p></p>
        <h4>Belum ada artikel yang tersimpan</h4>
    @endif
@endsection

@push('scripts')
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })
    </script>
@endpush
