<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card">
      <div class="card-header">
        <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus-circle"></i> Tambah data</button>
      </div>
      <!-- MODAL -->
        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah acara</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('SangatRahasia/tambahAcara') ?>" method="post">
                  <div class="form-group">
                    <label for="acara">Acara</label>
                    <input class="form-control" type="text" name="acara" id="acara" placeholder="Masukkan nama acara...">
                  </div>
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukkan judul acara...">
                  </div>
                  <div class="form-group">
                    <label for="konten">Konten</label>
                    <input class="form-control" type="text" name="konten" id="konten" placeholder="Masukkan konten acara...">
                  </div>
                  <div class="form-group">
                    <label for="harga">Harga (Rp)</label>
                    <input class="form-control" type="text" name="harga" id="harga" placeholder="ex Rp30.000 / Gratis">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah data</button>
              </div>
            </div>
          </div>
        </div>
        <!-- END MODAL -->
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
