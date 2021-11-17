<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class KaspinController extends Controller
{
    public function home(){
        $data = barang::all();
        return view('home', ['data'=>$data]);
    }

    public function add(){
        return view('add_data');
    }

    public function store(Request $request){
        $data = new Barang;

        $data->nama_barang=$request->nama_barang;
        $data->jenis=$request->jenis;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->save();
        return redirect()->route('home');
    }


    public function edit($id){
        $data = barang::find($id);
        return view('edit_data', ['data' => $data]);
    }


    public function update(Request $request, $id){
        $data = barang::find($id);
        $data->nama_barang=$request->nama_barang;
        $data->jenis=$request->jenis;
        $data->jumlah=$request->jumlah;
        $data->harga=$request->harga;
        $data->save();
        return redirect()->route('home');
    }

    public function delete($id){
        $data = barang::find($id);
        $data->delete();
        return redirect()->route('home');
    }
}
