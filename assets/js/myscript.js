const flashdata = $('.flash-data').data('flashdata');

if(flashdata) {
    Swal.fire({
        title: 'Data Berhasil ',
        text: 'Berhasil ' + flashdata,
        type: 'success'
    });
}

//tombol-hapus
$('.tombol-hapus').on('click',function(e) {
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
        title: 'Apakah Anda Yakin?',
        text: "Data Mahasiswa Akan Dihapus!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!!'
      }).then((result) => {
        if (result.value) {
        document.location.href = href;
        }
      })
})