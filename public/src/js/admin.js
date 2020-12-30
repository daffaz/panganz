$(document).ready(function() {
    $(document).on('click', '#edit', function() {
        $('.modal-body #id').val($(this).data('id'));
        $('.modal-body #acara').val($(this).data('acara'));
        $('.modal-body #judul').val($(this).data('judul'));
        $('.modal-body #konten').val($(this).data('konten'));
        $('.modal-body #harga').val($(this).data('harga'));
        // + ARTIKEL
        $('.modal-body #judul').val($(this).data('judul'));
        $('.modal-body #organisasi').val($(this).data('organisasi'));
        $('.modal-body #nama').val($(this).data('nama'));
        $('.modal-body #berita').val($(this).data('berita'));
        $('.modal-body #berita2').val($(this).data('berita2'));
        $('.modal-body #gambar').val($(this).data('gambar'));
      });
});