@extends('layouts.adminmember')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #202240; color: white;">
                        <h4>Daftar TIM</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($datatim as $d)
                            <div class="col-md-4">
                                <div class="card text-left">
                                    <div class="card-header">
                                        <h4 class="lead">{{$d->name_lomba}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{$d->team_name}}</h4>
                                        <span class="d-block">Status Tim : {{$d->status_team}}</span>
                                        <span class="d-block">Kode Undangan : <a
                                                href="https://wa.me/?text=Kode Undangan : {{$d->code_undangan}}"
                                                class="badge badge-cyan">{{$d->code_undangan}}</a></span>
                                        <span class="d-block mb-2">Status bayar : {{$d->status}}</span>
                                        @if ($d->status_team == "Ketua")
                                        @if ($d->status == 'Belum Akftif')
                                        <a href="{{route('member_team_hapus', $d->id_user)}}"
                                            class="btn btn-primary disabled"><i class="fas fa-eye"></i></a>
                                        @else
                                        <form action="{{route('member_team_show', $d->code_undangan)}}" method="post" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-primary d-inline"><i
                                                class="fas fa-eye"></i></button>
                                        </form>
                                        @endif
                                        @endif
                                        <a href="{{route('member_team_hapus', $d->id_user)}}" class="btn btn-danger"><i
                                                class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
