<section class="mt-5 overflow-hidden">
    <div class="min-vh-100">
        <div class="row">
            <div class="container">
                <div class="d-flex justify-content-center mt-5">
                    <img class="img-fluid" src="<?= base_url('src/img/artikel/detail_artikel/' . $dataTrending->gambar) ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-12">
                    <h1 class="heading my-5 py-3 font-weight-bold"><?= $dataTrending->judul ?></h1>
                </div>
                <div class="col-12">
                    <h2 class="badan font-weight-bold"><?= $dataTrending->organisasi ?></h2>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <h4 class="badan text-secondary"><?= $dataTrending->nama ?></h4>
                    <h4 class="badan text-secondary"><?= date('l, F Y', strtotime($dataTrending->tanggal)) ?></h4>
                </div>
                <hr>
            </div>
        </div>
        <!-- ARTIKEL KONTEN  -->
        <div class="row mt-5">
            <div class="container">
                <div class="col-12">
                    <span class="h1 badan d-inline"><?= substr($dataTrending->berita, 0, 1) ?></span>
                    <p class="badan text-justify d-inline"><?= substr($dataTrending->berita, 1) ?></p>
                </div>
                <div class="col-12 d-flex justify-content-center my-4">
                    <img class="img-fluid w-50" src="<?= base_url('src/img/artikel/detail_artikel/' . $dataTrending->gambar) ?>">
                </div>
                <div class="col-12 mt-5">
                    <p class="badan text-justify"><?= $dataTrending->berita2 ?></p>
                </div>
            </div>
        </div>
        <!-- ARTIKEL TERKAIT -->
        <div class="row mt-5">
            <div class="container">
                <div class="col-12 d-flex justify-content-between">
                    <h3 class="heading font-weight-bold">Artikel terkait</h3>
                    <h3 class="heading text-secondary">#Trending</h3>
                </div>
                <hr>
            </div>
        </div>
        <div class="container">
            <div class="row my-2 overflow-auto" style="height: 200px">
                <?php for ($i = 0; $i < count($dataTrendingAll); $i++) : ?>
                    <div class="col-12 d-flex my-3">
                        <img class="img-fluid w-25" src="<?= base_url('src/img/artikel/detail_artikel/' . $dataTrendingAll[$i]->gambar) ?>">
                        <div class="bg-hijau w-100 pl-5 py-3">
                            <a href="<?= base_url('Artikel/detailTrending/' . $dataTrendingAll[$i]->id) ?>">
                                <h3 class="text-white heading font-weight-bold"><?= $dataTrendingAll[$i]->judul ?></h3>
                            </a>
                            <h5 class="text-muted heading">#Trending</h5>
                            <h6 class="badan text-white mt-3"><?= substr($dataTrendingAll[$i]->berita, 0, 150) . '...' ?></h6>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
    </div>
</section>