<?= $this->extend('Admin/Tema_Admin'); ?>
<?= $this->section('content'); ?>

<div class="right_col" role="main">

    <div class="card">
        <div class="card-header">
            <h3>Daftar Komentar</h3>
        </div>
        <div class="card-body">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('message'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
            <!-- <a href="<?= base_url('/berita/tambah'); ?>" class="btn btn-primary">Tambah Berita</a>
            <div class="col-lg-4 ">
                <form action="" method="GET">
                    <div class="input-group">
                        <div class="input-group-append">
                            <button class="input-group-text bg-transparent text-primary" name="cari">
                                <i class="fa fa-search" type="submit"></i>
                            </button>
                        </div>
                        <input type="text" class="form-control" type="submit" name="cari" placeholder="Cari...">
                    </div>
                </form>
            </div> -->
            <div class="col-lg-6 ">
            </div>
            <hr />
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Nama Pengirim</th>
                    <th>Isi</th>
                    <th>Tanggal</th>
                    <!-- <th>Aksi</th> -->
                </tr>

                <?php foreach ($komentar as $row) { ?>
                    <tr>
                        <td class="align-middle"><?= $nomor++; ?></td>
                        <td class="align-middle"><?= $row->id_berita; ?></td>
                        <td class="align-middle"><?= $row->nama_pengirim; ?></td>
                        <td class="align-middle"><?= $row->isi_komentar; ?></td>
                        <td class="align-middle"><?= $row->created_at; ?></td>

                        <!-- <td>
                            <a title="Edit" href="<?= base_url("berita/edit/$row->id_berita"); ?>" class="btn btn-info fa fa-edit"></a>
                            <a title="Delete" href="<?= base_url("berita/delete/$row->id_berita") ?>" class="btn btn-danger fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"></a>
                        </td> -->
                    </tr>
                <?php } ?>
            </table>
            <?= $pager->links('list_berita', 'bootstrap_pagination') ?>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection() ?>