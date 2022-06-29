@extends('layout.main')
@section('container')
    <div class="text-center">
        <img src="img/logo.png" class="rounded" alt="..." width="300" height="auto">
    </div>
    <div class=" container mr-3 ">
        <div class="row p-md-5 p-sm-5 ">
            <div class=" col-lg-3 bg-primary text-white p-2">
                <div class=" text-center">
                    <h5> Hello</h5>
                </div>
            </div>
            <div class=" col-lg bg-dark text-white p-2">
                <div class="result2 text-center"></div>
            </div>
            <div class="col-lg-3 bg-primary text-white p-2">
                <div class="result5 text-center">
                    <h5> Potensi Badai:</h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class=" col p-md-5 p-sm-5 d-lg-flex ">
            <div class="row col-lg-2  form-group">
                <select class="form-select form-control form-select input-keyword" id="Provinsi">
                    <option value="0" type="button" selected id="sel">Pilih Provinsi</option>
                    @foreach ($Provinsi['data'] as $p)
                        <option value="{{ $p->nama_provinsi }}">{{ $p->nama_provinsi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="row col-lg-1  form-group">
            </div>
            <div class="row col-lg-2  form-group">
                <select class="form-select form-select input-keyword2" name="nama_provinsi" id="kota">
                    <option value='0' id="sel1">Pilih</option>
                </select>
            </div>
            {{-- <div class="col-1">
                <button id="button-addon2" type="button" class="btn btn-primary"><span
                        data-feather="search"></span></button>
            </div> --}}
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="d-lg-flex">
                <div class="col-lg-8 p-md-5 p-sm-5">
                    <h1 class="display-5 fw-bold">Cuaca Hari Ini</h1>
                    <h2 class="result6"></h2>
                    <div class="result   fs-4"></div>
                </div>
                <div class=" fs-4 result8"></div>
            </div>
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <div class="">
                <div class="col-lg-8 p-md-5 p-sm-5">
                    <h1 class="display-5 fw-bold">Prediksi Cuaca Kedepan</h1>
                    <h2 class="result7"></h2>
                </div>
                <div class=" col-lg-10 p-md-5 p-sm-5 d-lg-flex">
                    <div class=" col-lg-8 col-sm-8  result3"></div>
                    <div class=" col-lg-8 col-sm-8  result4"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
