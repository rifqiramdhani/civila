//function swall alert hapus data
function hapusdata(title, url, id, nama) {
    Swal.fire({
        title: 'Apakah yakin?',
        text: "Ingin Menghapus " + nama,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#db3325',
        cancelButtonColor: '#f5a732',
        confirmButtonText: "Hapus",
        cancelButtonText: "Cancel",
    }).then((result) => {
        if (result.value) {
            $.ajax({
                url: url + id,
                type: 'GET',
                error: function (xhr, textStatus, error) {
                    console.log(xhr.responseText);
                    console.log(xhr.statusText);
                    console.log(textStatus);
                    console.log(error);
                },
                success: function (data) {
                    $("#" + id).remove();
                    Swal.fire({
                        title: title,
                        text: 'Data Berhasil Dihapus!',
                        icon: 'success'
                    })
                }
            });
        }
    })
}

function swalhref(link, titletext) {
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: " " + titletext,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Tidak'
    }).then((result) => {
        if (result.value) {
            window.location.href = link
        }
    })
}

