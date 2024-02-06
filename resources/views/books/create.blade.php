@extends('layouts.app')

@section('content')
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">
	    	Form Tambah Buku
	    </li>
	  </ol>
	</nav>
	<div class="card card-body border-0">
		<form action="{{route('books.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="name">
					Judul Buku
				</label>
				<input type="text" name="name" class="form-control" placeholder="Judul Buku.." required>
			</div>
			<div class="form-group">
				<label for="">Category Buku</label>
				<select name="category_id" id="" class="form-control">
					<option value="">Pilih Kategori</option>
					@foreach($categorys as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="description">
					Deskripsi
				</label>
				<input type="text" name="description" class="form-control" placeholder="Deskripsi...." required>
			</div>
			<div class="form-group">
				<label for="description">
					Penerbit
				</label>
				<input type="text" name="penerbit" class="form-control" placeholder="Penerbit..." required>
			</div>
			<div class="form-group">
				<label for="tanggal_terbit">
					Tanggal Terbit
				</label>
				<input type="date" name="tanggal_terbit" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="stock">
					Jumlah Buku
				</label>
				<input type="number" name="stock" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="">Cover Buku</label>
				<input type="file" name="images" id="" class="form-control">
			</div>
			<div class="mt-3 mb-3">
				<button type="submit" class="btn btn-info">
					Tambah Buku
				</button>
				<a href="{{route('books')}}" class="btn btn-light">
					Cancel
				</a>
			</div>
		</form>
	</div>
@endsection