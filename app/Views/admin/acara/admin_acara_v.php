<section>
  <?php if (!empty($session)) : ?>
    <div class="alert alert-<?= $session['status'] ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
      <?= $session['message'] ?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif ?>
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
            <form action="<?php echo base_url('SangatRahasia/adminTambahAcara') ?>" method="post">
              <div class="form-group">
                <label for="acara">Acara</label>
                <input class="form-control" type="text" name="acara" id="acara" placeholder="Masukkan nama acara..." required>
              </div>
              <div class="form-group">
                <label for="judul">Judul</label>
                <input class="form-control" type="text" name="judul" id="judul" placeholder="Masukkan judul acara..." required>
              </div>
              <div class="form-group">
                <label for="konten">Konten</label>
                <input class="form-control" type="text" name="konten" id="konten" placeholder="Masukkan konten acara..." required>
              </div>
              <div class="form-group">
                <label for="harga">Harga (Rp)</label>
                <input class="form-control" type="text" name="harga" id="harga" placeholder="ex Rp30.000 / Gratis" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah data</button>
              </div>
            </form>
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
            <th scope="col">Action</th>
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
              <td>
                <a><i class="fa fa-edit text-info mr-2"></i></a>
                <a href="<?= base_url('SangatRahasia/adminDeleteAcara/' . $d->id) ?>" onclick="return confirm('Yakin ingin menghapus artikel?')"><i class="fa fa-trash text-danger"></i></a>
              </td>
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
</section>