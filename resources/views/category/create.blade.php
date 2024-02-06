@extends('layouts.app')

@section('content')
    <div class="card border-0">
        <div class="card-body">
            <h3>Form tambah category</h3>

            <form action="{{route('category.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama Category</label>
                    <input type="text" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nomor Rak</label>
                    <input type="number" name="no_rak" id="" class="form-control">
                </div>
                <button  class="btn btn-outline-info">
                    Tambah Category
                </button>
            </form>
        </div>
    </div>
@endsection
