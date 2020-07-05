@extends('layouts/master')

@section('head_title', 'Kumpulan Artikel')

@section('konten')
    <div class="jumbotron">
        <h1>Kumpulan Artikel</h1>
    </div>

    <a href="/artikel/create" class="btn btn-primary">Buat Artikelmu</a>
    <p>&nbsp;</p>

    @if(count($artikel) != 0)
        @foreach ($artikel as $a)
            <div class="list-group">
                <a href="/artikel/{{$a->id_artikel}}" class="list-group-item list-group-item-action">
                    <h5>{{$a->judul}}</h5>
                    <div class="d-flex justify-content-end">
                        <strong>{{$a->created_at}}</strong>
                    </div>
                </a>
            </div>
        @endforeach
    @else
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
