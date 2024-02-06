@extends('layouts.app')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">
	    	Form edit Buku
	    </li>
	  </ol>
	</nav>
	<div class="card card-body border-0">
	<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PATCH')

    <div class="form-group">
        <label for="name">Nama Buku:</label>
        <input type="text" id="name" name="name" value="{{ $book->name }}" required class="form-control">
    </div>

    <div class="form-group">
        <label for="description">Deskripsi:</label>
        <textarea id="description" name="description" required class="form-control">{{ $book->description }}</textarea>
    </div>

    <div class="form-group">
        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" value="{{ $book->penerbit }}" required class="form-control">
    </div>

    <div class="form-group">
        <label for="tanggal_terbit">Tanggal Terbit:</label>
        <input type="date" id="tanggal_terbit" name="tanggal_terbit" value="{{ $book->tanggal_terbit }}" required class="form-control">
    </div>

    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" value="{{ $book->stock }}" required class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Update Buku</button>
</form>
@endsection