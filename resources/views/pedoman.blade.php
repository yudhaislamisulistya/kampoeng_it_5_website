@extends('layouts.app')
@section('content')
    <!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg element-animate">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                <h2>Informasi Kampoeng IT5</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<section class="sample-text-area element-animate">
    <div class="container box_1170">
        <h3 class="text-heading">Pedoman / Panduan Kpmpetisi</h3>
        <table width="100%" class="table table-striped">
            <thead class="thead-inverse">
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Download</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">1</td>
                        <td>Format Abstrak</td>
                        <td>
                            <a href="{{asset('public/rulebook/Format_Abstrak.docs')}}" class="btn btn-primary btn-block">Download</a>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td>Rule Book Kompetisi</td>
                        <td>
                            <a href="{{asset('public/rulebook/rulebook.rar')}}" class="btn btn-primary btn-block">Download</a>
                        </td>
                    </tr>
                </tbody>
        </table>
    </div>
</section>
@endsection