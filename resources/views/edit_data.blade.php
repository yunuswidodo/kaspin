@extends('master')
@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
        <h4 class="card-title">Masukan Barang</h4>
        <form class="forms-sample" method="post" action="{{route('update', [$data->id])}}">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="namabarang">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" id="namaBarang" placeholder="Name" value="{{$data->nama_barang}}">
        </div>
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis" value="{{$data->jenis}}">
        </div>
        <div class="form-group">
            <label for="jumlah">Jumlah</label>
            <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah" value="{{$data->jumlah}}">
        </div>
        <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga" value="{{$data->harga}}">
        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </div>
        </form>
    </div>
    </div>
</div>
@endsection()
