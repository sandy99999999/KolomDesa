     <?= $this->extend('Admin/Tema_Admin'); ?>
     <?= $this->section('content'); ?>

     <div class="right_col" role="main">
         <div class="card">
             <div class="card-header">
                 <h3>List Iklan</h3>
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
                 <a href="<?= base_url('/Tambah_Iklan'); ?>" class="btn btn-primary">Tambah</a>
                 <hr />
                 <table class="table table-bordered">
                     <tr>
                         <th>No</th>
                         <th>Judul Iklan</th>
                         <th>Kategori Iklan</th>
                         <th>List Iklan</th>
                         <th>Tanggal</th>
                         <th>Action</th>
                     </tr>
                     <?php
                        $no = 1;
                        foreach ($iklan as $row) {
                        ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $row->judul_iklan; ?></td>
                             <td><?= $row->kategori_iklan; ?></td>
                             <td><img src="<?= base_url('Iklan/' . $row->gambar_iklan); ?>" width="40"></td>
                             <td><?= $row->created_at; ?></td>
                             <td>
                                 <a title="Edit" href="<?= base_url("Foto/edit/$row->id_iklan"); ?>" class="btn btn-info fa fa-edit"></a>
                                 <a title="Delete" href="<?= base_url("Foto/delete/$row->id_iklan") ?>" class="btn btn-danger fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"></a>
                             </td>

                         </tr>
                     <?php
                        }
                        ?>
                 </table>
             </div>
         </div>
     </div>
     <?php $this->endSection() ?>