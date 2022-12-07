     <?= $this->extend('Admin/Tema_Admin'); ?>
     <?= $this->section('content'); ?>

     <div class="right_col" role="main">
         <div class="card">
             <div class="card-header">
                 <h3>List Foto</h3>
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
                 <a href="<?= base_url('/Tambah_Foto'); ?>" class="btn btn-primary">Tambah</a>
                 <hr />
                 <table class="table table-bordered">
                     <tr>
                         <th>No</th>
                         <th>Judul Foto</th>
                         <th>List Foto</th>
                         <th>Tanggal</th>
                         <th>Action</th>
                     </tr>
                     <?php
                        $no = 1;
                        foreach ($foto as $row) {
                        ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $row->judul_foto; ?></td>
                             <td><img src="<?= base_url ('Berita/'. $row->list_foto); ?>" width="40"></td>
                             <td><?= $row->created_at; ?></td>
                             <td>
                                 <a title="Edit" href="<?= base_url("Foto/edit/$row->id_foto"); ?>" class="btn btn-info fa fa-edit"></a>
                                 <a title="Delete" href="<?= base_url("Foto/delete/$row->id_foto") ?>" class="btn btn-danger fa fa-trash" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')"></a>
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