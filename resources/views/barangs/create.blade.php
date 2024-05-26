@extends('layouts.app')

@section('content')
<div class="container-sm my-5">
    <div class="row justify-content-center">
        <div class="container-sm mt-5">
            <div class="p-5 bg-warning rounded-3 border col-xl-6 mx-auto">
                <div class="mb-3 text-center">
                    <i class="bi bi-box-seam fs-1 text-danger"></i>
                    <h2 style="font-weight: bold">Tambah Barang</h2>
                </div>
                <hr>
                <form action="{{ route('barangs.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kode_barang" class="form-label">Kode Barang</label>
                            <input class="form-control" type="text" name="kode_barang" id="kode_barang" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang</label>
                            <input class="form-control" type="text" name="nama_barang" id="nama_barang" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="deskripsi_barang" class="form-label">Deskripsi Barang</label>
                            <input class="form-control" type="text" name="deskripsi_barang" id="deskripsi_barang" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga_barang" class="form-label">Harga</label>
                            <input class="form-control" type="text" name="harga_barang" id="harga_barang" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan_id" class="form-label">Satuan</label>
                            <select name="satuan_id" id="satuan_id" class="form-select" required>
                                @foreach ($satuans as $satuan)
                                <option value="{{ $satuan->id }}">{{ $satuan->nama_satuan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-danger btn-lg mt-3"><i class="bi bi-arrow-left"></i>Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3"><i class="bi bi-check me-2"></i>Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

