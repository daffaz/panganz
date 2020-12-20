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
                        <th scope="col">Acara</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Konten</th>
                        <th scope="col">Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1 ?>
                    <?php foreach ($dataAcara as $d) : ?>
                        <tr>
                            <th scope="row"><?= $nomor ?></th>
                            <td><?= $d->acara ?></td>
                            <td><?= $d->judul ?></td>
                            <td><?= $d->konten ?></td>
                            <td><?= $d->harga ?></td>
                        </tr>
                        <?php $nomor++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>