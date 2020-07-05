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
            <ul class="list-group">
                <li class="list-group-item">
                    <h4>{{$a->judul}}</h4>
                    <h6 class="text-right">{{$a->created_at}}</h6>
                </li>
                <li class="list-group-item">
                    <form action="/artikel/{{$a->id_artikel}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="d-flex justify-content-start">
                            <a href="/artikel/{{$a->id_artikel}}" class="btn btn-info">Lihat Selengkapnya</a>
                            &nbsp;&nbsp;
                            <a href="/artikel/{{$a->id_artikel}}/edit" class="btn btn-warning">Edit</a>
                            &nbsp;&nbsp;
                            <input type="submit" class="btn btn-danger" value="Hapus">
                        </div>
                    </form>
                </li>
            </ul>
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
