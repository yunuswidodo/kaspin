@extends('master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Masukan Barang</h4>
        <form class="forms-sample">
        <div class="form-group">
            <label for="namabarang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="namaBarang" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga">
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
        </form>
    </div>
    </div>
</div>
@endsection()
