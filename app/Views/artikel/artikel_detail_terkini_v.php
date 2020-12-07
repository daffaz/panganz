<section class="mt-5 overflow-hidden">
    <div class="min-vh-100">
        <div class="row">
            <div class="container">
                <div class="d-flex justify-content-center mt-5">
                    <img class="img-fluid" src="<?= base_url('src/img/artikel/detail_artikel/' . $dataTerkini->gambar) ?>">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-12">
                    <h1 class="heading my-5 py-3 font-weight-bold"><?= $dataTerkini->judul ?></h1>
                </div>
                <div class="col-12">
                    <h2 class="badan font-weight-bold"><?= $dataTerkini->organisasi ?></h2>
                </div>
                <div class="col-12 d-flex justify-content-between">
                    <h4 class="badan text-secondary"><?= $dataTerkini->nama ?></h4>
                    <h4 class="badan text-secondary"><?= date('l, F Y', strtotime($dataTerkini->tanggal)) ?></h4>
                </div>
                <hr>
            </div>
        </div>
        <!-- ARTIKEL KONTEN  -->
        <div class="row mt-5">
            <div class="container">
                <div class="col-12">
                    <span class="h1 badan d-inline"><?= substr($dataTerkini->berita, 0, 1) ?></span>
                    <p class="badan text-justify d-inline"><?= substr($dataTerkini->berita, 1) ?></p>
                </div>
                <div class="col-12 d-flex justify-content-center my-4">
                    <img class="img-fluid w-50" src="<?= base_url('src/img/artikel/detail_artikel/' . $dataTerkini->gambar) ?>">
                </div>
                <div class="col-12 mt-5">
                    <p class="badan text-justify"><?= $dataTerkini->berita2 ?></p>
                </div>
            </div>
        </div>
        <!-- ARTIKEL TERKAIT -->
        <div class="row mt-5">
            <div class="container">
                <div class="col-12 d-flex justify-content-between">
                    <h3 class="heading font-weight-bold">Artikel terkait</h3>
                    <h3 class="heading text-secondary">#Terkini</h3>
                </div>
                <hr>
            </div>
        </div>
        <div class="container">
            <div class="row my-2 overflow-auto" style="height: 200px">
                <?php for ($i = 0; $i < count($dataTerkiniAll); $i++) : ?>
                    <div class="col-12 d-flex my-3">
                        <img class="img-fluid w-25" src="<?= base_url('src/img/artikel/detail_artikel/' . $dataTerkiniAll[$i]->gambar) ?>">
                        <div class="bg-hijau w-100 pl-5 py-3">
                            <h3 class="text-white heading font-weight-bold"><?= $dataTerkiniAll[$i]->judul ?></h3>
                            <h5 class="text-muted heading">#Terkini</h5>
                            <h6 class="badan text-white mt-3"><?= substr($dataTerkiniAll[$i]->berita, 0, 150) . '...' ?></h6>
                        </div>
                    </div>
                <?php endfor ?>
            </div>
        </div>
    </div>
    </div>
</section>