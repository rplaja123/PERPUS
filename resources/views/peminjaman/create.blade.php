@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            Form peminjaman buku
        </li>
    </ol>
</nav>
<div class="card card-body border-0">
    <form action="{{route('peminjaman.store')}}" method="POST">
        @csrf
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
        @endif
        <div class="form-group">
            <label for="name_book">
                Buku
            </label>
            @foreach ($books as $book)
            <input type="text" class="form-control" value="{{$book->name}}" readonly>
            <input type="hidden" id="" name="books" class="form-control" value="{{$book->id}}">
        </div>
        <div class="form-group">
            <label for="tgl_pinjam">Tanggal Peminjaman</label>
            <input type="date" name="tgl_pinjam" id="tgl_pinjam"  class="form-control">
        </div>
        <div class="form-group">
            <label for="tgl_pengembalian">Tanggal Pengembalian</label>
            <input type="date" name="tgl_kembali" id="tgl_pengembalian" class="form-control">
        </div>
        <div class="form-group">
            <label for="jumlah_pinjam">Jumlah buku</label>
            <input type="number" name="jumlah_pinjam" id="jumlah_pinjam" value="{{$book->stock}}" class="form-control">
        </div>
        <div class="mt-3 mb-3">
            <button class="btn btn-primary" type="submit">
                Simpan Pinjaman
            </button>
            <a href="{{route('books')}}" class="btn btn-light btn"> Cancel</a>
        </div>
        @endforeach
    </form>
</div>
@endsection