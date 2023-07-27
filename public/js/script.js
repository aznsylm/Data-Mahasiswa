$(function() {

    $('.tombolTambah').on('click', function(){
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#nama').val('');
        $('#nim').val('');
        $('#jurusan').val('');
        $('#instagram').val('');
        $('#id').val('');
    });

    $('.tampilUbah').on('click', function() {
        $('#formModalLabel').html('Edit Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Edit Data');
        $('.modal-body form').attr('action', 'https://localhost/mvc/public/mahasiswa/ubah');
        
        const id = $(this).data('id');
        console.log(id);

        $.ajax({
            url: 'https://localhost/mvc/public/mahasiswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#jurusan').val(data.jurusan);
                $('#instagram').val(data.instagram);
                $('#id').val(data.id);
            }
        });

    });

});