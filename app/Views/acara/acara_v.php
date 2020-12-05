<section id="acara" class="mt-5 mb-5">
    <div class="min-vh-100">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12">
                    <h1 class="heading h1 mt-5 text-center"><strong>Ikuti acara ini yuk!</strong></h1>
                </div>
            </div>
            <div class="row mt-1">
                <?php $nomor = 1 ?>
                <?php foreach ($dataAcara as $d) : ?>
                    <div class="col-lg-4 mt-4">
                        <div class="shadow card border-0" style="width: 23rem;">
                            <a href="<?= base_url('Acara/detail/' . $d->id) ?>">
                                <div class="card-judul" style="position:relative">
                                    <img class="card-img-top" src="<?= base_url('src/img/acara' . $nomor . '.svg') ?>" alt="Card image cap">
                                    <h1 class="h1 heading text-white card-judul-gambar"><strong><?= $d->acara ?></strong></h1>
                                </div>
                            </a>
                            <div class="card-body">
                                <h3 class="text-center heading mt-n2"><strong><?= $d->judul ?></strong></h3>
                                <p class="card-text heading text-center"><?= $d->konten ?></p>
                            </div>
                        </div>
                    </div>
                    <?php $nomor++;
                    if ($nomor == 7) $nomor = 1 ?>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>