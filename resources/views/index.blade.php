@extends('layout.main')
@section('container')
    <div class="text-center">
        <img src="img/logo.png" class="rounded" alt="..." width="300" height="auto">
    </div>
    <div class=" container mr-3 ">
        <div class="row p-md-5 p-sm-5 ">
            <div class="col-3 bg-primary text-white p-2">

            </div>
            <div class="col bg-dark text-white p-2 result2">

            </div>
            <div class="col-3 bg-primary text-white p-2 result5">
                <h5> Potensi Badai:</h5>
            </div>
        </div>
    </div>
    <div class=" container-fluid">
        <div class=" row p-md-5 p-sm-5 ">
            <div class="col-2">
                <select class="form-select form-select-sm input-keyword" id="Provinsi">
                    <option value="0" selected>Pilih Provinsi</option>
                    @foreach ($Provinsi['data'] as $p)
                        <option value="{{ $p->nama_provinsi }}">{{ $p->nama_provinsi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <select class="form-select form-select-sm input-keyword2" name="nama_provinsi" id="kota">
                    <option value='0' selected>Pilih</option>
                </select>
            </div>
            <div class="col-1">
                <button id="button-addon2" type="button" class="btn btn-primary"><span
                        data-feather="search"></span></button>
            </div>
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Cuaca Hari Ini</h1>
            <h2 class="result6"></h2>
            <div class=" container  p-md-5 p-sm-5 d-flex">
                <div class="col-md-8 fs-4 result"></div>
                <div class="col-md-8 fs-4 result8"></div>
            </div>
            {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Prediksi Cuaca Kedepan</h1>
            <h2 class="result7"></h2>
            <div class=" container p-md-5 p-sm-5 d-flex">
                <div class="col-md-8 fs-4 col-sm-8  result3"></div>
                <div class="col-md-8 fs-4 col-sm-8  result4"></div>
            </div>
            {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card mb-5  mt-3">
            <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
                <i class="fas fa-chevron-left"></i>
                <span class="pb-3">feedback</span>
                <i class="fas fa-times"></i>
            </div>
            <div class="mt-2 p-4 text-center">
                <h6 class="mb-3">Apakah Ramalah Hari Ini Sudah Akurat?</h6>
                <small class="px-3">Berikan Ulasan</small>
                <div class="d-flex  justify-content-around">
                    <form id="ulasan">
                        <div class="d-flex flex-row justify-content-center mt-5  g-2 row">
                            <div class="col pb-5">
                                <input type="radio" class="btn-check" value="Akurat" onclick="aktif()"
                                    name="nama_ulasan" id="option1" autocomplete="off" checked>
                                <label class="btn btn-success" for="option1">Akurat</label>
                                <span class="text-danger" id="akuratError"></span>
                            </div>
                            <div class="col pb-5">
                                <input type="radio" class="btn-check" value="Tidak Akurat" onclick="tidakAktif()"
                                    name="nama_ulasan" id="option2" autocomplete="off">
                                <label class="btn btn-danger" for="option2">Tidak</label>
                                <span class="text-danger" id="tidakError"></span>
                            </div>
                        </div>
                        <div class="pb-5 pb-sm-5">
                            <button type="submit" class="btn btn-primary btn-block save-data"
                                id="tbl1"><span>Send</span></button>
                        </div>
                    </form>
                </div>

                <div class="">
                    <p class="">Developer Tim</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type='text/javascript'>
        //Option Provinsi & Kota
        $(document).ready(function() {
            $('#Provinsi').on('change', function() {
                var id = $(this).val();
                $('#kota').find('option').not(':first').remove();
                $.ajax({
                    url: '/get-home/' + id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {


                        var len = 0;
                        if (response['data'].length > 0) {
                            len = response['data'].length;
                        }
                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var id = response['data'][i].nama_daerah;
                                var name = response['data'][i].nama_daerah;
                                var option = "<option value='" + id + "'>" + name +
                                    "</option>";
                                $('#kota').append(option);

                            }
                        }
                    }
                });
            });
        })

        //Ulasan Tombol
        $("#tbl1").hide();
        $("#tbl2").hide();

        function aktif() {
            $("#tbl1").show();
            $("#tbl2").hide();
        }

        function tidakAktif() {
            $("#tbl1").show();
            $("#tbl2").hide();
        }

        $(document).ready(function() {
            $('#option1').click(function() {
                var nama_ulasan = $(this).val();

                $('#ulasan').submit(function(e) {
                    e.preventDefault();



                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $.ajax({
                        dataType: 'json',
                        type: "POST",
                        url: "/dashboard/save-data",
                        data: {
                            nama_ulasan: nama_ulasan,
                        },

                        success: function(response) {
                            toastr.success(response.message);
                        }

                    });


                });

            });
            $('#option2').click(function() {
                var nama_ulasan = $(this).val();
                $('#ulasan').submit(function(e) {
                    e.preventDefault();

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });


                    $.ajax({
                        dataType: 'json',
                        type: "POST",
                        url: "/dashboard/save-data",
                        data: {
                            nama_ulasan: nama_ulasan,
                        },

                        success: function(response) {
                            toastr.success(response.message);
                        }

                    });


                });

            });

        });

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-bottom-center",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $(".save-data").click(function() {
            $("#option2").attr("onclick", "new_function_name()");
            $("#option1").attr("onclick", "new_function_name()");
            setInterval(function() {
                $("#option2").attr("onclick", "new_function_name()");
            }, 1000);

            $(".save-data").hide();
        }, 1000);

        $(".save-data1").click(function() {
            $("#option1").attr("onclick", "new_function_name()");
            $("#option2").attr("onclick", "new_function_name()");
            setInterval(function() {

                $(".save-data1").hide();
            }, 1000);

        });
    </script>
@endsection
