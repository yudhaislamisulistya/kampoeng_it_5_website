@extends('layouts.adminmember')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #202240; color: white;">
                        <h4>Daftar Peserta</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Waktu Daftar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datapeserta as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->name}}</td>
                                            <td>{{$d->email}}</td>
                                            <td>{{$d->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin_peserta_hapus', $d->id)}}" class="btn btn-danger">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center text-muted">
            All Rights Reserved by KABAMAFIKOMUMI
        </footer>
    </div>

@endsection