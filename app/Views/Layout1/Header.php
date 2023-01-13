<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
        <div class="title-box-d">
            <h3 class="title-d">Pencarian</h3>
        </div>
        <span class="close-box-collapse right-boxed bi bi-x"></span>
        <div class="box-collapse-wrap form">
            <form action="<?php echo base_url('/pencarian') ?>" method="GET">
                <div class="col-12">
                    <input type="text" class="form-control rounded-pill ml-6" placeholder="Cari Berita, Tokoh, Desa Wisata.." name="cari">
                    <!-- <button><i class="fa fa-search"></i></button> -->
                </div>
            </form>
        </div>
    </div><!-- End Property Search Section -->

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="<?= base_url('/') ?>"><span class="text-danger">Kolom</span><span class="color-b">Desa</span></a>

            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Berita</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="<?= base_url() ?>/Nasional">Nasional</a>
                            <a class="dropdown-item " href="<?= base_url() ?>/Daerah">Daerah</a>
                            <a class="dropdown-item " href="<?= base_url() ?>/Desa">Desa</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Budaya</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="<?= base_url() ?>/Jajanan">Jajanan</a>
                            <a class="dropdown-item " href="<?= base_url() ?>/Tradisi">Tradisi</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url('/Analisa') ?>">Inovasi Desa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url() ?>/Desa_Wisata">Desa Wisata</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url() ?>/Bum_Desa">BUM Desa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="<?= base_url() ?>/Kabar_Desa">Kabar Desa</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item " href="<?= base_url() ?>/Foto">Foto</a>
                            <a class="dropdown-item " href="<?= base_url() ?>/Video">Video</a>
                        </div>
                    </li>
                </ul>
            </div>

            <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-search"></i>
            </button>

        </div>
    </nav><!-- End Header/Navbar -->