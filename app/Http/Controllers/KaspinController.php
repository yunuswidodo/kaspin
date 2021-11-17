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
}
