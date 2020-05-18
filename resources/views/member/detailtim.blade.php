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
                                <h4 class="d-inline">Detail TIM</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($datalengkaptim as $dlt)
                            <div class="col-md-4">
                                <div class="card text-left">
                                    <div class="card-header">
                                        <h4>{{$dlt->status_team}}</h4>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{$dlt->name}}</h4>
                                        <p class="card-text">Tanggal Invite : {{$dlt->created_at}}</p>
                                        <a href="{{route('member_team_hapus_anggota', ['id' => $dlt->id_user, 'code_undangan' => $dlt->code_undangan])}}"
                                            class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="card text-left">
                            <div class="card-header">
                                <h4>Tahapan - Tahapan</h4>
                                
                            </div>
                            <div class="card-body">
                                <ol>
                                    <li>Setiap anggota tim membuat akun pada situs Kampoeng IT (http://www.kampoeng-it.id/) dan mengisi data diri dengan lengkap.</li>
                                    <li>Selanjutnya ketua tim membuat tim sesuai dengan kompetisi yang akan diikuti, lalu aggota tim akan bergabung dengan menggunakan unique code dari tim yang telah dibuat</li>
                                    <li>Melakukan pembayaran biaya pendaftaran sebesar nominal yang tertera pada buku panduan ke nomor rekening berikut
                                        <ul>Nomor Rekening : 78910766885</ul>
                                        <ul>Jenis Bank     : BCA</ul>
                                        <ul>Atas Nama      : Aslan Poetra Ramadhan</ul>
                                    </li>
                                    <li>Ketua tim melengkapi dan mengunggah data pada akun techphoria berupa : 
                                        <ul>Bukti pembayaran</ul>
                                        <ul>Kartu Tanda Mahasiswa (bisa menggunakan identitas lain berupa KTP/SIM) </ul>
                                        <ul>Transkrip akademik atau rencana studi pada sistem informasi universitas sebagai bukti status akademik peserta aktif </ul>
                                    </li>
                                    <li>Extensi File Dalam Bentuk .rar / .zip dengan Format [NAMATIM]_[ASALKAMPUS]_[KIT5].rar </li>
                                    <li>Konfirmasi Bisa Melalui Akun Whastapp <a href="https://api.whatsapp.com/send?phone=+6285340472927&text=Konfirmas%20Pendaftaran%20{{$datalengkaptim[0]->code_lomba}}%0ANama%20Tim%20:%20{{$datalengkaptim[0]->team_name}}%0AKetua%20:%20{{$datalengkaptim[0]->name}}" class="badge badge-primary">Konfirmasi Sekarang</a></li>
                                </ol>
                                @if ($datalengkaptim[0]->status == 'Belum Aktif')
                                    <form action="{{route('member_lomba_konfirmasi', $datalengkaptim[0]->code_undangan)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" name="file" class="custom-file-input" id="inputGroupFile01">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                @else
                                    <div class="alert alert-success text-center" role="alert">
                                        <strong>TIM Anda Telah Dikonfirmasi</strong>
                                    </div>
                                @endif
                            </div>
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
