@extends('master')
@section('content')
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Data Barang</h4>
                </div>
                <div>
                @auth
                    <a href="{{route('add')}}"><button type="button" class="btn btn-primary btn-icon-text btn-rounded" href="index.html">
                      <i class="ti-clipboard btn-icon-prepend"></i>add 
                    </button></a>
                @endauth
                </div>
              </div>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            ID
                          </th>
                          <th>
                            Nama Barang
                          </th>
                          <th>
                            Jenis
                          </th>
                          <th>
                            Jumlah
                          </th>
                          <th>
                            Harga
                          </th>
                          @auth
                          <th class="text-center">
                            Action
                          </th>
                          @endauth
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($data as $d)
                        <tr>
                          <td class="py-1">
                            {{$d->id}}
                          </td>
                          <td>
                            {{$d->nama_barang}}
                          </td>
                          <td>
                           {{$d->jenis}}
                          </td>
                          <td>
                            {{$d->jumlah}}
                          </td>
                          <td>
                            {{$d->harga}}
                          </td>
                          <td class="text-center">
                          @auth
                          @if(Auth::user()->id == '1')
                          <a href="{{route('edit', [$d->id])}}"> <button type="button" class="btn-sm btn-inverse-warning btn-fw">edit</button></a>
                          <a href="{{route('delete', [$d->id])}}"><button type="button" class="btn-sm btn-inverse-danger btn-fw">Delete</button></a>
                          @elseif(Auth::user()->id == '2')
                          <a href="{{route('edit', [$d->id])}}"> <button type="button" class="btn-sm btn-inverse-warning btn-fw">edit</button></a>
                          @endif
                          @endauth
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
@endsection
