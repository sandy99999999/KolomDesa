<?= $this->extend('Admin/Tema_Admin'); ?>
<?= $this->section('content'); ?>

<script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>

<div class="right_col" role="main">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Tentang Kami</h3>
            </div>
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url('Kebijakan/update/' . $kebijakan->id_web) ?>">
                    <?= csrf_field(); ?>

                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 ">Isi</label>
                        <div class="col-md-9 col-sm-9 ">
                            <textarea id="editor" class="form-control" name="kebijakan_privasi" style='height:260px' value="<?= $kebijakan->kebijakan_privasi; ?>"></textarea>
                        </div>
                    </div>
                    <style>
                        .ck-editor__editable_inline {
                            min-height: 400px;
                        }
                    </style>
                    <script>
                        ClassicEditor
                            .create(document.querySelector('#editor'))
                            .catch(error => {
                                console.error(error);
                            });
                    </script>

                    <div class="form-group">
                        <input type="submit" value="Update" class="btn btn-info" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection() ?>