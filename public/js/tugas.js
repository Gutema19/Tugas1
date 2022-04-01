function ntvalid() {

    if ($('.home-textinput.input').val() != 0) {
        return true;
    } else {
        return false;
    }
}

function btvalid() {

    if ($('.home-textinput1.input').val() != 0) {
        return true;
    } else {
        return false;
    }
}

function filevalid() {

    $('.home-textinput1.input').change(function (e) {
        e.preventDefault();

        var ukuran = $('.home-textinput1.input').prop('files')[0].size;

        if (eval(ukuran) > 100000000) {
            Swal.fire({
                title: 'Informasi',
                text: 'Berkas yang anda unggah lebih dari 100 MB',
                icon: 'info',
                confirmButtonText: 'Oke',
                confirmButtonColor: '#201E6F'
            })

            $('.home-textinput1.input').val('');
        }

    });
}

function dtgs() {
    var nt = $('.home-textinput.input').val();
    var bt = $('.home-textinput1.input').prop('files')[0];
    var form_data = new FormData();
    form_data.append('namatgs', nt);
    form_data.append('filetgs', bt);

    $.ajax({
        type: "POST",
        url: "/store_tugas",
        data: form_data,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function (response) {
            isProcessing = true;
            let timerInterval
            Swal.fire({
                title: 'Informasi',
                text: 'Berkas anda sedang diunggah',
                icon: 'info',
                timer: 20000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 10000)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            })
        },
        success: function (server_response) {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Yeay',
                text: 'Berkas anda berhasil diunggah',
                icon: 'success',
                confirmButtonText: 'Kembali',
            })
            $('.home-textinput.input').val('');
            $('.home-textinput1.input').val('');
            isProcessing = false;
        },
        error: function (response) {
            Swal.fire({
                title: 'Yah',
                text: 'Berkas anda gagal diunggah',
                icon: 'error',
                confirmButtonText: 'Kembali',
                confirmButtonColor: '#92110C'
            })
        }
    });
}

$(document).ready(function () {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    filevalid();
    $("#formtgs").submit(function (e) {
        e.preventDefault();



        if (ntvalid() == true && btvalid() == true) {
            Swal.fire({
                title: 'Konfirmasi',
                text: "Anda yakin ingin mengunggah berkas anda ?",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#201E6F',
                cancelButtonColor: '#92110C',
                confirmButtonText: 'Unggah',
                cancelButtonText: 'Kembali',
                footer: 'Kemungkinan anda pernah mengunggah berkas ini sebelumnya'
            }).then((result) => {
                if (result.isConfirmed) {
                    dtgs();
                }
            })
        } else {
            Swal.fire({
                title: 'Gagal',
                text: 'Nama dan atau berkas anda tidak valid',
                icon: 'error',
                confirmButtonText: 'Kembali',
                confirmButtonColor: '#92110C'
            })
        }
    });




});