<section>
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Organisasi</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Berita</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1 ?>
                    <?php foreach ($dataTerkini as $d) : ?>
                        <tr>
                            <th scope="row"><?= $nomor ?></th>
                            <td><?= $d->judul ?></td>
                            <td><?= $d->organisasi ?></td>
                            <td><?= $d->nama ?></td>
                            <td><?= $d->tanggal ?></td>
                            <td><?= $d->berita . '... ' ?></td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
