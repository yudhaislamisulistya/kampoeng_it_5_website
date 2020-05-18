@extends('layouts.adminmember')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #202240; color: white;">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Daftar Post</h4>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{route('admin_post_buat')}}" class="btn btn-primary">Tambah</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Buat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datapost as $d)
                                        <tr>
                                            <td>{{$d->id}}</td>
                                            <td>{{$d->title}}</td>
                                            <td>{{$d->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin_post_hapus', $d->id)}}" class="btn btn-primary">Ubah</a>
                                                <a href="{{route('admin_post_hapus', $d->id)}}" class="btn btn-danger">Hapus</a>
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