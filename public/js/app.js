
//Option Provinsi & Kota
$(document).ready(function () {
    $('#Provinsi').on('change', function () {
        var id = $(this).val();
        $('#kota').find('option').not(':first').remove();
        // $('#sel').attr('value', id);
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



$(document).ready(function () {
    $('#option1').click(function () {
        var nama_ulasan = $(this).val();

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
                    nama_ulasan: nama_ulasan,
                },

                success: function (response) {
                    toastr.success(response.message);
                }

            });


        });

    });
    $('#option2').click(function () {
        var x = document.getElementById("datalok");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }

        function showPosition(position) {
            x.innerHTML = "<div name='lat' value='" + position.coords.latitude + "'>Latitude: " + position.coords.latitude; +"</div>";
            x.innerHTML += "<div name'long' value='" + position.coords.longitude + "'>Longitude: " + position.coords.longitude; +"</div> ";
        }
        var nama_ulasan = $(this).val();
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
                    nama_ulasan: nama_ulasan,
                    long: long,
                    lat: lat,
                },

                success: function (response) {
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
    let data = document.querySelector('.opsi')
    data.innerHTML = '<select class="form-select" aria-label="Default select example"><option option selected >Pilih Alasan</option ><option value="Tidak Sesuai dengan cuaca saat ini">Tidak Sesuai dengan cuaca saat ini</option><option value="2">Pada Lokasi Saya tidak sesuai pada prediksi hari ini</option></select>',
        setTimeout(function () {
            $("#tbl1").Show();
        }, 1000);
});




// $("#option2").click(function () {
//     setTimeout(function () {
//         $(".op").hide();
//         $(".op1").hide();
//     }, 1000);
//     let data = document.querySelector('.dataTemp')
//     data.innerHTML = '<h4 class="data1 p-3 mb-3">Proses <i class="fas fa-spinner fa-spin"></i></h4>',
//         setTimeout(function () {
//             $(".data1").hide();
//             $("#tbl1").show();
//         }, 1000);
// });

$("#tbl1").click(function () {
    let data1 = document.querySelector('.th')
    data1.innerHTML = '<h5 class="data1 mb-3">Terima Kasih</h5><h5>Telah memberikan ulasan anda</h5>',
        setTimeout(function () {
            $("#tbl1").hide();
        }, 1000);

});

//Api Gempa
$(document).ready(function () {
    fetch("https://cuaca-gempa-rest-api.vercel.app/quake/")
        .then(response => response.json())
        .then(response => {
            let result = document.querySelector('#map')
            result.innerHTML = `<img src="${response.data.shakemap}"></h2>`
            let text = document.querySelector('#text')
            text.innerHTML =
                `<h5><span> Tanggal : ${response.data.tanggal}</span></h5>
                        <h5><span> Waktu : ${response.data.jam}</span></h5> 
                        <h5><span> Kedalaman : ${response.data.kedalaman}</span></h5> 
                        <h5><span> Wilayah : ${response.data.wilayah}</span></h5> 
                        <h5><span> Potensi : ${response.data.potensi}</span></h5> 
                        <h5><span> Dirasakan : ${response.data.dirasakan}</span></h5> `
        })
});