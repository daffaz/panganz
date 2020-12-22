<section>
    <div class="card">
        <div class="card-header">
            <button class="btn btn-success font-weight-bold" data-toggle="modal" data-target="#tambahData"><i class="fas fa-plus-circle"></i> Tambah data</button>
        </div>
        <!-- MODAL -->
        <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah artikel lawas</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo base_url('SangatRahasia/adminTambahArtikelLawas') ?>" method="post">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input required class="form-control" type="text" name="judul" id="judul" placeholder="Masukkan judul artikel...">
                            </div>
                            <div class="form-group">
                                <label for="organisasi">Organisasi</label>
                                <input required class="form-control" type="text" name="organisasi" id="organisasi" placeholder="Masukkan nama organisasi...">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input required class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan nama penulis...">
                            </div>
                            <div class="form-group">
                                <label for="berita1">Berita 1</label>
                                <textarea required class="form-control" name="berita1" id="berita1" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="berita2">Berita 2</label>
                                <textarea required class="form-control" name="berita2" id="berita2" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <select id="gambar" name="gambar" class="form-control">
                                    <option selected disabled>=== Silahkan pilih gambar ====</option>
                                    <option>artikel1.svg</option>
                                    <option>artikel2.svg</option>
                                    <option>artikel3.svg</option>
                                    <option>artikel4.svg</option>
                                    <option>artikel5.svg</option>
                                    <option>artikel6.svg</option>
                                </select>
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
                        <th scope="col">Judul</th>
                        <th scope="col">Organisasi</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Berita</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1 ?>
                    <?php foreach ($dataLawas as $d) : ?>
                        <tr>
                            <th scope="row"><?= $nomor ?></th>
                            <td>
                                <a href=""><i class="fa fa-edit text-info mr-2"></i></a>
                                <a href="<?= base_url('SangatRahasia/adminDeleteLawas/' . $d->id) ?>" onclick="return confirm('Yakin ingin menghapus artikel?')"><i class="fa fa-trash text-danger"></i></a>
                            </td>
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