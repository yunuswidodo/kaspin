@extends('master')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h4 class="font-weight-bold mb-0">Data Log</h4>
                </div>
                <div>
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
                            Nama Aktivitas
                          </th>
                          <th>
                            Jabatan
                          </th>
                          <th>
                            time
                          </th>
                        </tr>
                      </thead>
                       <tbody>
                       @foreach($data as $d)
                        <tr>
                          <td class="py-1">
                            {{$d->id}}
                          </td>
                          <td>
                            {{$d->description}}
                          </td>
                          @if($d->causer_id=='1')
                           <td>  
                           <label class="badge badge-success">admin</label>
                           </td>
                           @else
                           <td>
                           <label class="badge badge-warning">staff</label>
                           </td> 
                          @endif
                          <td class="py-1">
                            {{$d->created_at}}
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