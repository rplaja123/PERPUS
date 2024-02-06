@extends('layouts.app')

@section('content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
            Data Buku
        </li>
    </ol>
</nav>

<div class="card card-body border-0">
    <div class="mt-3 mb-3">
        <a class="btn btn-info" href="{{route('user.create')}}">
            Tambah user Baru
        </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nis</th>
                <th>Name</th>
                <th>Email</th>
                <th>No Handphone</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{$user->nis}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->no_handphone}}</td>
                    <td>{{$user->alamat}}</td>
                    <td>
                        <form action="{{route('user.destroy', $user->id)}}" method="post" type="hidden">
                            @csrf
                            @method('DELETE')

                            <a href="{{route('user.edit', $user->id)}}" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <button type="submit" class="btn btn-danger btn-sm">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty

            @endforelse
        </tbody>
    </table>
    {{$users->links()}}
</div>

@endsection