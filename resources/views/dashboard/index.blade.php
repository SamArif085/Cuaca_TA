@extends('dashboard.layout.main')
@section('container')
    <div class=" container mr-3 ">
        <div class="row p-md-5 p-sm-5 ">
            <div class="col-2 bg-primary text-white p-3">
                Halo {{ auth()->user()->name }}
            </div>
            <div class="col bg-dark text-white p-3">
                Cuaca Hari Ini :
            </div>
            <div class="col-2 bg-info text-white p-3">
                Potensi Badai:
            </div>
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Prediksi Cuaca Hari Ini</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in
                previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your
                liking.</p>
            {{-- <button class="btn btn-primary btn-lg" type="button">Example button</button> --}}
        </div>
    </div>
    <div class="col p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Prediksi Cuaca Kedepan</h1>
            <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in
                previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to
                your
                liking.</p>
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
                <h6 class="mb-0">Your feedback help us to improve.</h6>
                <small class="px-3">Please let us know about your chat experience.</small>
                <div class="d-flex flex-row justify-content-center mt-2">
                    <img src="https://img.icons8.com/emoji/48/000000/angry-face-emoji--v2.png" />
                    <img src="https://img.icons8.com/fluent/48/000000/sad.png" />
                    <img src="https://img.icons8.com/color/48/000000/happy.png" />
                    <img src="https://img.icons8.com/emoji/48/000000/smiling-face.png" />
                    <img src="https://img.icons8.com/color/48/000000/lol.png" />
                </div>
                <div class="form-group mt-4">
                    <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                </div>
                <div class="mt-2">
                    <button type="button" class="btn btn-primary btn-block"><span>Send feedback</span></button>
                </div>
                <p class="mt-3">Continue without sending feedback</p>
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


    {{-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div> --}}
    </div>



    </div>
@endsection
