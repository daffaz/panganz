<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
                    <?php foreach ($dataTrending as $d) : ?>
                        <tr>
                            <th scope="row"><?= $nomor ?></th>
                            <td><?= $d->judul ?></td>
                            <td><?= $d->organisasi ?></td>
                            <td><?= $d->nama ?></td>
                            <td><?= $d->tanggal ?></td>
                            <td><?= $d->berita . ' ' . $d->berita2 ?></td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>