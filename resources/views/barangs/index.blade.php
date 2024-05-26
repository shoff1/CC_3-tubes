<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
    @vite('resources/sass/app.scss')
</head>

<body style="background-color: wheat;">
    @extends('layouts.app')
    @section('content')
        <div class="container mt-4">
            <div class="row mb-0">
                <div class="col-lg-9 col-xl-10">
                    <h4 class="mb-3 text-center" style="color: black; font-weight: bold;">Daftar Barang</h4>


                </div>
                <div class="col-lg-3 col-xl-2">
                    <div class="d-grid gap-2">
                        <a href="{{ route('barangs.create') }}" class="btn btn-primary btn-danger">Tambah Barang</a>
                    </div>
                </div>
            </div>
            <hr>
            <div class="table-responsive border p-3 rounded-3">
                <table class="table table-bordered table-hover table-striped mb-0" style="border-color: black;">
                    <thead>
                        <tr style="text-align: center;">
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Deskripsi Barang</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barangs as $barang)
                            <tr style="text-align: justify;">
                                <td>{{ $barang->kode_barang }}</td>
                                <td>{{ $barang->nama_barang }}</td>
                                <td>{{ $barang->satuan->nama_satuan }}</td>
                                <td>Rp {{ $barang->harga_barang }}</td>
                                <td>{{ $barang->deskripsi_barang }}</td>

                                <td>@include('barangs.action')</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
    @vite('resources/js/app.js')
</body>

</html>
