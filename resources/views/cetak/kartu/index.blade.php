@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Cetak Kartu Anggota</li>
        </ol>
    </nav>
    <div class="card border-0 shadow-sm">

        <div class="card-body">
            <div class="alert alert-warning" role="alert">
                Silahkan Pilih data anggota yang ingin dicetak kartunya terimakasih
            </div>

            <div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nis</th>
                            <th>Nama Siswa</th>
                            <th>Alamat</th>
                            <th>Telp</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->nis}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->alamat}}</td>
                                <td>{{$user->no_handphone}}</td>
                                <td>
                                    <a href="{{route('cetak.detail', $user->id)}}" class="btn btn-info btn-sm">Detail</a>
                                    <a href="{{route('cetak.kartu',$user->id)}}" class="btn btn-warning btn-sm">Cetak Kartu</a>
                                </td>
                            </tr>
                            {{$users->links()}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
@endsection