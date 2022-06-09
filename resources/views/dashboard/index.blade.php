@extends('dashboard.layout.main')
@section('container')
    <div class=" container mr-3 ">
        <div class="row p-md-5 p-sm-5 ">
            <div class="col-3 bg-primary text-white p-2">
                <h5>Halo {{ auth()->user()->name }}</h5>
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
                <div class="d-flex justify-content-between">
                    <form id="ulasan">
                        <div class="d-flex flex-row justify-content-center mt-5 g-2 row">
                            <div class="col pb-5">
                                <input type="radio" class="btn-check" value="Akurat" onclick="aktif()"
                                    name="nama_ulasan" id="option1" autocomplete="off" checked>
                                <label class="btn btn-success" for="option1">Akurat</label>
                                <span class="text-danger" id="akuratError"></span>
                            </div>

                        </div>
                        <div class="pb-5 pb-sm-5">
                            <button type="submit" class="btn btn-primary btn-block save-data"
                                id="tbl1"><span>Send</span></button>
                        </div>
                    </form>
                    <form id="ulasan1">
                        <div class="d-flex flex-row justify-content-center mt-5 g-2 row">
                            <div class="col pb-5">
                                <input type="radio" class="btn-check" value="Tidak Akurat" onclick="tidakAktif()"
                                    name="nama_ulasan" id="option2" autocomplete="off">
                                <label class="btn btn-danger" for="option2">Tidak</label>
                                <span class="text-danger" id="tidakError"></span>
                            </div>
                        </div>
                        <div class="pb-5 pb-sm-5">
                            <button type="submit" class="btn btn-primary btn-block save-data1"
                                id="tbl2"><span>Send</span></button>
                        </div>
                    </form>
                </div>

                <div class="">
                    <p class="">Developer Tim</p>
                </div>
            </div>
        </div>
    </div>



    <div id="feedback-form-wrapper">
        <div id="floating-icon">
            <button type="button" class="btn btn-primary btn-sm rounded-0" data-toggle="modal" data-target="#myModal">
                Feedback
            </button>

        </div>
        <div id="feedback-form-modal">
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Feedback Form</h5>
                            {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true" data-feather="x-circle"></span>
                            </button> --}}
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group container-fluid">
                                    <label for="exampleFormControlTextarea1">Seberapa besar kemungkinan Anda ingin
                                        merekomendasikan untuk kami?</label>
                                    <div class="rating-input-wrapper d-flex justify-content-between mt-2">
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">1</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">2</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">3</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">4</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">5</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">6</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">7</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">8</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">9</span></label>
                                        <label><input type="radio" name="rating" /><span
                                                class="border rounded px-3 py-2">10</span></label>
                                    </div>
                                    <div class="rating-labels d-flex justify-content-between mt-1 p-1">
                                        <label>Kurang</label>
                                        <label>Sangat Bagus</label>
                                    </div>
                                </div>
                                <div class="form-group col p-3">
                                    <label for="input-one">Apa yang membuat anda kurang nyaman dengan layanan kami?</label>
                                    <input type="text" class="form-control" id="input-one" placeholder="">
                                </div>
                                <div class="form-group col p-3">
                                    <label for="input-two">Dapatkah anda dapat memberikan saran pada kami?</label>
                                    <textarea class="form-control" id="input-two" rows="3"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type='text/javascript'>
        $(document).ready(function() {
            $('#Provinsi').on('change', function() {
                var id = $(this).val();
                $('#kota').find('option').not(':first').remove();
                $.ajax({
                    url: '/get-kota/' + id,
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

        // $(".save-data").click(function(event) {
        //     event.preventDefault();

        //     let Aktif = $("#option1").val();

        //     let _token = $('meta[name="csrf-token"]').attr('content');
        //     $.ajax({
        //         url: "/dashboard/save-data",
        //         type: "POST",
        //         data: {
        //             Aktif = Aktif,
        //             _token: _token
        //         },
        //         dataType: "json",
        //         success: function(response) {
        //             console.log(response);

        //         },
        //     });
        // });

        $("#tbl1").hide();
        $("#tbl2").hide();

        function aktif() {
            $("#tbl1").show();
            $("#tbl2").hide();
        }

        function tidakAktif() {
            $("#tbl2").show();
            $("#tbl1").hide();
        }


        $('#ulasan').submit(function(e) {
            e.preventDefault();

            let nama = $("#option1").val();
            let jenis_kelamin = $("#option2").val();

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
                    nama: nama,
                },

                success: function(response) {
                    toastr.success(response.message);
                }
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

        $('#ulasan1').submit(function(e) {
            e.preventDefault();

            let jenis_kelamin = $("#option2").val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $.ajax({
                dataType: 'json',
                type: "POST",
                url: "/dashboard/save-data1",
                data: {
                    jenis_kelamin: jenis_kelamin,

                },

                success: function(response) {
                    toastr.success(response.message);
                }
            });

        });
    </script>
@endsection
