     <?= $this->extend('Admin/Tema_Admin'); ?>
     <?= $this->section('content'); ?>

     <div class="right_col" role="main">
         <div class="card">
             <div class="card-header">
                 <h3>List Video</h3>
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
                 <a href="<?= base_url('/Tambah_Video'); ?>" class="btn btn-primary">Tambah</a>
                 <hr />
                 <table class="table table-bordered">
                     <tr>
                         <th>No</th>
                         <th>Judul</th>
                         <th>List Video</th>
                         <th>Tanggal</th>
                         <th>Action</th>
                     </tr>
                     <?php
                        $no = 1;
                        foreach ($video as $row) {
                        ?>
                         <tr>
                             <td><?= $no++; ?></td>
                             <td><?= $row->judul_video; ?></td>
                             <td><img src="<?= $row->list_video; ?>" width="40"></td>
                             <td>
                                 <?= $row->created_at; ?>"
                             </td>
                             <td>
                                 <a title="Edit" href="<?= base_url("Video/edit//$row->id_video"); ?>" class="btn btn-info">Edit</a>
                                 <a title="Delete" href="<?= base_url("Video/delete/$row->id_video") ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ?')">Delete</a>
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