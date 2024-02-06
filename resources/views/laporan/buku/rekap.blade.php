@extends('layouts.cetak')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="text-center">
            <P>
                <b>
                    <h3>SDN JATIMULYA 08
                        <br>
                        Jl.K.H.NOER ALI KALIMALANG, JATIMULYA, Kec. Tambun Selatan,
                    </h3>
                    <hr>
                </b>
            </P>
        </div>
        <u>
            <h4>Rekap laporan buku</h4>
        </u>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Categori</th>
                    <th>Nama Buku</th>
                    <th>Penerbit</th>
                    <th>Tanggal Terbit</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bukus as $buku)
                    <tr>
                        <td>{{$buku->category->first()->name}}</td>
                        <td>{{$buku->name}}</td>
                        <td>{{$buku->penerbit}}</td>
                        <td>{{$buku->tanggal_terbit}}</td>
                        <td>{{$buku->stock}}</td>
                    </tr>
                @endforeach

            </tbody>
            <tr>
                <td colspan="5" class=>Jumlah buku : {{count($bukus)}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection