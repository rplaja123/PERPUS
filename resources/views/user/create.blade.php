@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            Form Tambah Anggota
        </li>
    </ol>
</nav>
<div class="card card-body border-0">
    <form action="{{route('user.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="nis">
                Nis
            </label>
            <input type="text" name="nis" class="form-control" placeholder="Nis.." required>
        </div>
        <div class="form-group">
            <label for="name">
                Nama Anggota
            </label>
            <input type="text" name="name" class="form-control" placeholder="Nama Anggota...." required>
        </div>
        <div class="form-group">
            <label for="description">
                Email
            </label>
            <input type="email" name="email" class="form-control" placeholder="Email..." required>
        </div>
        <div class="form-group">
            <label for="no_handphone">
                No Handphone
            </label>
            <input type="text" name="no_handphone" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat">
                Alamat
            </label>
            <input type="text" name="alamat" value="" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="level">Akses</label>
            <select name="roles" id="level" class="form-control">
                <option value="">Pilih akses</option>
                @foreach ($roles as $role)
                    <option value="{{$role->id}}">{{$role->name}}</option>
                @endforeach
            </select>       
        </div>
        <div class="form-group">
            <label for="alamat">
                Password
            </label>
            <input type="password" name="password" class="form-control" required>
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
