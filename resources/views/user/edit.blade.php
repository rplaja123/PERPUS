@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            Form Edit Data Anggota
        </li>
    </ol>
</nav>
<div class="card card-body border-0">
    <form action="{{route('user.update', $user->id)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="nis">
                Nis
            </label>
            <input type="text" name="nis" class="form-control" value="{{$user->nis}}" placeholder="Nis.." required>
        </div>
        <div class="form-group">
            <label for="name">
                Nama Anggota
            </label>
            <input type="text" name="name" class="form-control" value="{{$user->name}}" placeholder="Nama Anggota...." required>
        </div>
        <div class="form-group">
            <label for="description">
                Email
            </label>
            <input type="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email..." required>
        </div>
        <div class="form-group">
            <label for="no_handphone">
                No Handphone
            </label>
            <input type="text" name="no_handphone" class="form-control" value="{{$user->no_handphone}}" required>
        </div>
        <div class="form-group">
            <label for="alamat">
                Alamat
            </label>
            <input type="text" name="alamat" class="form-control" value="{{$user->alamat}}" required>
        </div>

        <div class="mt-3 mb-3">
            <button type="submit" class="btn btn-info">
                Tambah Anggota
            </button>
            <a href="{{route('user')}}" class="btn btn-light">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
