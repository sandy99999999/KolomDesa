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
          <th>id Berita</th>
          <th>Nama Pengirim</th>
          <th>email</th>
          <th>Isi Komentar</th>
        </tr>

      </table>

    </div>
    <?= print_r($komentar) ?>
  </div>
</div>
<?php $this->endSection() ?>