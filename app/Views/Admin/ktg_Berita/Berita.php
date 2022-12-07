<?= $this->extend('Admin/Tema_Admin');?>
<?= $this->section('content'); ?>
            
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>CKEditor </h3>
                <p class="text-subtitle text-muted">Allow your users to provide formatted content with a powerful WYSIWYG editor.</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url()?>/DashboardAdmin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">CKEditor</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Classic Editor</h4>
                    </div>
                    <div class="card-body">
                        <div id="editor">
                            <p>This is some sample content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>