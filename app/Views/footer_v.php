<footer id="bagian-utama-footer" class="mt-lg-5 badan text-white">
    <div class="container">
        <div class="row mt-2 pb-4 baris-1">
            <div class="col-lg-4 baris-1-kolom-1-footer">
                <ul>
                    <li><a href="<?= base_url('kontak') ?>"> Kontak </a></li>
                    <li><a href="<?= base_url('bantuan') ?>"> Bantuan </a></li>
                </ul>
            </div>

            <div class="col-lg-4 mx-lg-auto baris-1-kolom-2">
                <p class="text-justify">Kami adalah milenial yang sangat tertarik pada inovasi dan ingin membantu orang mencapai tujuannya melalui kegiatan berbagi, belajar dari para ahli agar kedepan milenial muda indonesia berkualitas.</p>
            </div>

            <div class="col-lg-1 mr-lg-3 baris-1-kolom-3">
                <div class="garis"></div>
            </div>

            <div class="col-lg-3 baris-1-kolom-4">
                <h6 class="text-right">+62123456789</h6>
                <h6 class="text-right">panganz@gmail.com</h6>
            </div>
        </div>

        <div class="row baris-2">
            <div class="col-lg-4 mr-lg-auto baris-2-kolom-1">
                <a href="<?= base_url('/') ?>">
                    <h4 class="heading">PanganZ</h4>
                </a>
            </div>

            <div class="col-lg-8 ml-lg-auto baris-2-kolom-2">
                <h5 class="text-right">Copyright &copy; 2020</h5>
            </div>
        </div>
    </div>
</footer>
<!-- SCRIPT JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<script src="<?= base_url('src/js/main.js') ?>"></script>
<!-- TOUCHSWIPE -->
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery.touchswipe/1.6.4/jquery.touchSwipe.min.js'></script>
<!-- swipe start -->
<script type="text/javascript">
    $(".carousel").swipe({
        swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
            if (direction == 'left') $(this).carousel('next');
            if (direction == 'right') $(this).carousel('prev');
        },
        allowPageScroll: "vertical"
    });
</script>
<!-- swipe end -->
</body>

</html>
