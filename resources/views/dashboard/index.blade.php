@extends('dashboard.layout.main')
@section('container')
    <div class=" container mr-3 ">
        <div class="row p-md-5 p-sm-5 ">
            <div class="col-3 bg-primary text-white p-2">
                <h5>Halo {{ auth()->user()->name }}</h5>
            </div>
            <div class="col bg-dark text-white p-2 result2">


            </div>
            <div class="col-3 bg-primary text-white p-2 result4">
                <h5> Potensi Badai:</h5>
            </div>
        </div>
    </div>
    <div class=" container-fluid">
        <div class=" row p-md-5 p-sm-5">
            <div class="col-2">
                <select class="form-select form-select-sm input-keyword" id="Provinsi">
                    <option value="0" selected>Open this select menu</option>
                    @foreach ($Provinsi['data'] as $p)
                        <option value="{{ $p->nama_provinsi }}">{{ $p->nama_provinsi }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <select class="form-select form-select-sm input-keyword2" name="nama_provinsi" id="kota">
                    <option value='0' selected>Open this select menu</option>
                </select>
            </div>
            {{-- <div class="col-2">
                <select class="form-select form-select-sm input-keyword2">
                    <option selected>Open this select menu</option>
                    @php
                        $Kota = DB::table('kota')->get();
                    @endphp

                    @foreach ($Kota as $k)
                        <option value="{{ $k->nama_daerah }}">{{ $k->nama_daerah }}</option>
                    @endforeach
                </select>
            </div> --}}
            <div class="col-1">
                <button id="button-addon2" type="button" class="btn btn-primary"><span
                        data-feather="search"></span></button>
            </div>
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Cuaca Hari Ini</h1>
            <p class="col-md-8 fs-4 result"></p>
            {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Prediksi Cuaca Kedepan</h1>
            <p class="col-md-8 fs-4 result3"></p>
            {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="card mt-5 pb-5">
            <div class="d-flex flex-row justify-content-between p-3 adiv text-white">
                <i class="fas fa-chevron-left"></i>
                <span class="pb-3">feedback</span>
                <i class="fas fa-times"></i>
            </div>
            <div class="mt-2 p-4 text-center">
                <h6 class="mb-0">Apakah Ramalah Hari Ini Sudah Akurat?</h6>
                <small class="px-3">Berikan Ulasan</small>
                <div class="d-flex flex-row justify-content-center mt-2 g-2 row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                        <label class="btn btn-success" for="option1">Akurat</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                        <label class="btn btn-danger" for="option2">Tidak</label>
                    </div>
                </div>
                <div class="form-group mt-4">
                    <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="mt-2">
                    <button type="button" class="btn btn-primary btn-block"><span>Send</span></button>
                </div>
                <p class="mt-3">Developer Tim</p>
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



    </div>





    </div>
@endsection

@section('scripts')
    <script type='text/javascript'>
        // const searchButton = document.querySelector('#button-addon2');
        // const inputKeyword = document.querySelector('.input-keyword');
        // const inputKeyword2 = document.querySelector('.input-keyword2');

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
            }); // $.ajax({
            //     url: '{{ url('/getkota') }}',
            //     type: 'GET',
            //     data: {
            //         nama_provinsi: nama_provinsi
            //     },
            //     success: function(data) {
            //         $('#Kota').html(data);
            //     }
            // })

        })


        // searchButton.addEventListener('click', function() {

        //     fetch("https://cuaca-gempa-rest-api.vercel.app/weather/" + inputKeyword.value + "/" + inputKeyword2
        //             .value)
        //         .then(response => response.json())
        //         .then(response => {
        //             let result = document.querySelector('.result')

        //             result.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>
    //                         <h5><span> Temperature : ${response.data.params[5].times[0].celcius}</span></h5>
    //                          <h5><span> Kecepatan Angin : ${response.data.params[8].times[0].kph} km/jam</span></h5>
    //                          <h5> Kelembapan : ${response.data.params[0].times[0].value}</h5>`
        //             let result2 = document.querySelector('.result2')

        //             result2.innerHTML = `<h5> Cuaca Hari Ini : ${response.data.params[6].times[0].name}</h5>`

        //             let result3 = document.querySelector('.result3')

        //             result3.innerHTML = `<h2 style="margin-bottom: 15px;">${response.data.description}, ${response.data.domain}</h2>
    //                         <h5><span> Prediksi Besok </span></h5>
    //                         <h5><span> Temperature : ${response.data.params[5].times[4].celcius}</span></h5>
    //                         <h5><span> Kecepatan Angin : ${response.data.params[8].times[4].kph} km/jam</span></h5>
    //                         <h5> Cuaca Hari Ini : ${response.data.params[6].times[4].name}</h5>
    //                         <br>
    //                         <h5><span> Prediksi Lusa </span></h5>
    //                         <h5><span> Temperature : ${response.data.params[5].times[8].celcius}</span></h5>
    //                         <h5><span> Kecepatan Angin : ${response.data.params[8].times[8].kph} km/jam</span></h5>
    //                         <h5> Cuaca Hari Ini : ${response.data.params[6].times[8].name}</h5>`




        //             var badai = response.data.params[5].times[0].celcius;

        //             if (badai > 28) {
        //                 let badai = document.querySelector('.result4')
        //                 badai.innerHTML = `<h5> Potensi Badai :  Waspada </h5>`
        //             } else {
        //                 let badai = document.querySelector('.result4')
        //                 badai.innerHTML = `<h5> Potensi Badai : Tidak Ada </h5>`
        //             }

        //         })
        //     inputKeyword.value = null;

        // })
    </script>
@endsection
