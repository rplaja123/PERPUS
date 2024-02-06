@extends('layouts.cetak')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card border-0">
            <div class="card-body">
                <div class="d-flex mb-3">

                    <div class="mx-auto text-center">
                        <h6>KARTU PERPUSTAKAAN</h6>
                        <h4>SDN JATIMULYA 08</h4>
                        <h6>Alamat Nanti sebelah sini</h6>
                    </div>
                </div>
                <div class="pt-3">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td><h5 class="text-muted">Nama</h5></td>
                                <td><h5 class="text-muted">: {{$users->name}}</h5></td>
                            </tr>
                            <tr>
                                <td><h5 class="text-muted">Nis</h5></td>
                                <td><h5 class="text-muted">: {{$users->nis}}</h5></td>
                            </tr>
                            <tr>
                                <td><h5 class="text-muted">Alamat</h5></td>
                                <td><h5 class="text-muted">: {{$users->alamat}}</h5></td>
                            </tr>
                            <tr>
                                <td><h5 class="text-muted">E-mail</h5></td>
                                <td><h5 class="text-muted">: {{$users->email}}</h5></td>
                            </tr>
                            <tr>
                                <td><h5 class="text-muted">No. Handphone</h5></td>
                                <td><h5 class="text-muted">: {{$users->no_handphone}}</h5></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection