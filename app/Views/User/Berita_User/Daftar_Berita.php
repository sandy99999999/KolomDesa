<?= $this->extend('Admin/Tema_Admin'); ?>
<?= $this->section('content'); ?>

<div class="right_col" role="main">
    <div class="card">
        <div class="card-header">
            <h3>Daftar Berita</h3>
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
            <a href="<?= base_url('/berita/tambah'); ?>" class="btn btn-primary">Tambah Berita</a>
            <hr />

            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Judul Berita</th>
                    <th>Tanggal Posting</th>
                    <th>Aksi</th>
                </tr>

                <?php $no = 1;
                foreach ($list_berita as $row) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->judul_berita; ?></td>
                        <td><?= $row->created_at; ?></td>

                        <td>
                            <a title="Edit" href="<?= base_url("berita/edit/$row->id_berita"); ?>" class="btn btn-info fa fa-edit"></a>
                            <a title="Delete" href="<?= base_url("berita/delete/$row->id_berita") ?>" class="btn btn-danger fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"></a>
                        </td>
                    </tr>
                <?php } ?>
            </table>
            <section class="section">
                <div class="card">


                    <nav aria-label="Page navigation example">
                        <ul class="pagination pagination-primary  justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>

                </div>
            </section>
        </div>
    </div>
</div>
</div>
</div>

<?= $this->endSection() ?>