
//Option Provinsi & Kota
$(document).ready(function () {

    $('#Provinsi').on('change', function () {
        var id = $(this).val();
        $('#kota').find('option').not(':first').remove();
        $.ajax({
            url: '/get-home/' + id,
            type: 'GET',
            dataType: 'json',
            success: function (response) {


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

//menampilkan ulasan
$("#ulang").hide();
$("#ul").hide();
$(".src").click(function () {
    $("#ul").show();
});
//Ulasan Submit
$("#tbl1").hide();
// $("#tbl2").hide();

function aktif() {
    $("#tbl1").show();
    // $("#tbl2").hide();
}

function tidakAktif() {
    $("#tbl1").show();
    // $("#tbl2").hide();
}

var id = document.getElementById("id").value;
$(document).ready(function () {
    $('#option1').click(function () {
        var isi_ulasan = $(this).val();
        var nama_kota = $(inputKeyword2).val();
        $('#ulasan').submit(function (e) {

            e.preventDefault();
            // nama_ulasan = $('input[name=nama_ulasan]:checked').val();
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
                    isi_ulasan: isi_ulasan,
                    nama_kota: nama_kota,
                    id_user: id
                },

                success: function (response) {

                    toastr.success(response.message);
                }

            });

        });

    });
    $('#option2').click(function () {
        var isi_ulasan = $(this).val();
        var nama_kota = $(inputKeyword2).val();
        console.log(id);

        $('#ulasan').submit(function (e) {
            e.preventDefault();
            // nama_ulasan = $('input[name=nama_ulasan]:checked').val();
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
                    isi_ulasan: isi_ulasan,
                    nama_kota: nama_kota,
                    id_user: id

                },

                success: function (response) {
                    toastr.success(response.message);


                }

            });


        });

    });

});



$("#option1").click(function () {
    setTimeout(function () {
        $(".op").hide();
        $(".op1").hide();
    }, 1000);
    let data = document.querySelector('.dataTemp')
    data.innerHTML = '<h4 class="data1 p-3 mb-3">Proses <i class="fas fa-spinner fa-spin"></i></h4>',
        setTimeout(function () {
            $(".data1").hide();
            $("#tbl1").show();
        }, 1000);
});

$("#option2").click(function () {
    setTimeout(function () {
        $(".op").hide();
        $(".op1").hide();
    }, 1000);
    let data = document.querySelector('.dataTemp')
    data.innerHTML = '<h4 class="data1 p-3 mb-3">Proses <i class="fas fa-spinner fa-spin"></i></h4>',
        setTimeout(function () {
            $(".data1").hide();
            $("#tbl1").show();
        }, 1000);
});

$("#tbl1").click(function () {
    let data1 = document.querySelector('.th')
    data1.innerHTML = '<h5 class="mb-3">Terima Kasih</h5><h5>Telah memberikan ulasan anda</h5>',
        setTimeout(function () {
            $("#tbl1").hide();
            // $("#ul").hide();
            // $(".th").hide();
            // $(".ulang").show();
        }, 1000);

});

// $("#ulang").click(function () {

//     $("#ulang").hide();
//     $(".op").show();
//     $(".op1").show();


// });

