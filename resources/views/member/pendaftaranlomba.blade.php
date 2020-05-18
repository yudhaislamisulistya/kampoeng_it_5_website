@extends('layouts.adminmember')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color: #202240; color: white;">
                        <div class="row">
                            <div class="col-6">
                                <h4 class="d-inline">Daftar Lomba - {{$datalistlomba->name_lomba}}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="mt-3 form-horizontal" method="POST" action="{{route('member_lomba_buat_post')}}">
                            @csrf
                            <input type="hidden" name="kodelomba" value="{{$datalistlomba->code}}">
                            <div class="form-group mb-4">
                                <label for="exampleFormControlSelect1">Kode Undangan</label>
                                <input value="{{$randomString}}" name="kodeundangan" type="text" class="form-control"
                                    id="inputHorizontalSuccess" placeholder="" readonly>
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlSelect1">Nama TIM / Panggung</label>
                                <input name="namatim" type="text" class="form-control" id="inputHorizontalSuccess"
                                    placeholder="ICLABS">
                            </div>
                            <div class="form-group mb-4">
                                <label for="exampleFormControlSelect1">Asal Sekolah / Universitas / Instansi</label>
                                <input name="asal" type="text" class="form-control" id="inputHorizontalSuccess"
                                    placeholder="Universitas Muslim Indonesia">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer text-center text-muted">
            All Rights Reserved by KABAMAFIKOMUMI
        </footer>
    </div>
    @endsection
