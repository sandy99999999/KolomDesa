<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */


// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Home
$routes->get('/', 'Home::index');
$routes->get('/pencarian', 'Home::Pencarian');
$routes->get('/Internasional', 'ListBerita::Internasional');
$routes->get('/Nasional', 'ListBerita::Nasional');
$routes->get('/Daerah', 'ListBerita::Daerah');
$routes->get('/Jajanan', 'ListBerita::Jajanan');
$routes->get('/Tradisi', 'ListBerita::Tradisi');
$routes->get('/Analisa', 'ListBerita::Analisa');
$routes->get('/Desa_Wisata', 'ListBerita::Desa_Wisata');
$routes->get('/Tokoh_Desa', 'ListBerita::Tokoh_Desa');
$routes->get('/Bum_Desa', 'ListBerita::Bum_Desa');
$routes->get('/Kabar_Desa', 'ListBerita::Kabar_Desa');
$routes->get('/Foto', 'ListBerita::Foto');
$routes->get('/Video', 'ListBerita::Video');

//Form Login
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Register::login');
$routes->post('/login/process', 'Register::login_process');
$routes->get('/logout', 'Register::logout');

//Admin
$routes->get('/Dashboard_Admin', 'Home::Dashboard_Admin');
$routes->get('/Tema_User', 'Home::Tema_User');

// Identitas Web
$routes->get('/PT', 'Web::Index');
$routes->get('/Tentang', 'Web::TentangKami');
$routes->get('Tentang/edit/(:num)', 'Web::Edit/$1');
$routes->post('Tentang/update/(:num)', 'Web::Update/$1');
$routes->get('/Redaksi', 'Web::Redaksi');
$routes->get('Redaksi/edit/(:num)', 'Web::Edit_Redaksi/$1');
$routes->post('Redaksi/update/(:num)', 'Web::Update_Redaksi/$1');
$routes->get('/Info_iklan', 'Web::Iklan');
$routes->get('Iklan/edit/(:num)', 'Web::Edit_Iklan/$1');
$routes->post('Iklan/update/(:num)', 'Web::Update_Iklan/$1');
$routes->get('/Pedoman', 'Web::Pedoman');
$routes->get('Pedoman/edit/(:num)', 'Web::Edit_Pedoman/$1');
$routes->post('Pedoman/update/(:num)', 'Web::Update_Pedoman/$1');
$routes->get('/Disclaimer', 'Web::Disclaimer');
$routes->get('Disclaimer/edit/(:num)', 'Web::Edit_Disclaimer/$1');
$routes->post('Disclaimer/update/(:num)', 'Web::Update_Disclaimer/$1');
$routes->get('/Kebijakan', 'Web::Kebijakan');
$routes->get('Kebijakan/edit/(:num)', 'Web::Edit_Kebijakan/$1');
$routes->post('Kebijakan/update/(:num)', 'Web::Update_Kebijakan/$1');
$routes->get('/PedomanGuna', 'Web::PedomanGuna');
$routes->get('PedomanGuna/edit/(:num)', 'Web::Edit_PedomanGuna/$1');
$routes->post('PedomanGuna/update/(:num)', 'Web::Update_PedomanGuna/$1');
$routes->get('/Panduan', 'Web::Panduan');
$routes->get('Panduan/edit/(:num)', 'Web::Edit_Panduan/$1');
$routes->post('Panduan/update/(:num)', 'Web::Update_Panduan/$1');
$routes->get('/Kontributor', 'Web::Kontributor');
$routes->get('Kontributor/edit/(:num)', 'Web::Edit_Kontributor/$1');
$routes->post('Kontributor/update/(:num)', 'Web::Update_Kontributor/$1');
$routes->get('/Copyright', 'Web::Copyright');
$routes->get('Copyright/edit/(:num)', 'Web::Edit_Copyright/$1');
$routes->post('Copyright/update/(:num)', 'Web::Update_Copyright/$1');

//Berita Admin
$routes->get('/cari', 'ListBerita::cari');
$routes->get('/berita_list', 'ListBerita::index');
$routes->get('berita/tambah', 'ListBerita::Tambah');
$routes->post('berita/simpan', 'ListBerita::Simpan');
$routes->get('berita/edit/(:num)', 'ListBerita::Edit/$1');
$routes->post('berita/update/(:num)', 'ListBerita::Update/$1');
$routes->get('berita/delete/(:num)', 'ListBerita::Delete/$1');
$routes->get('berita/detail/(:num)', 'ListBerita::Detail/$1');
$routes->get('berita/komentar/', 'ListBerita::komentar');

$routes->post('/komentar/(:num)', 'ListBerita::komentar_insert');

// Foto Admin
$routes->get('/Berita_Foto', 'Galeri::index_foto');
$routes->get('/Tambah_Foto', 'Galeri::create_foto');
$routes->post('/Foto/simpan', 'Galeri::store_foto');
$routes->get('/Foto/edit/(:num)', 'Galeri::Edit_foto/$1');
$routes->post('/Foto/update/(:num)', 'Galeri::Update_foto/$1');
$routes->get('/Foto/delete/(:num)', 'Galeri::delete_foto/$1');
$routes->get('/Foto/detail/(:num)', 'Galeri::Detail_foto/$1');

// Tag Berita
$routes->get('/Tag_Berita', 'Tag::index');
$routes->get('/Tambah_Tag', 'Tag::create');
$routes->post('/Tag/simpan', 'Tag::store');
$routes->get('Tag/edit/(:num)', 'Tag::Edit/$1');
$routes->post('Tag/update/(:num)', 'Tag::Update/$1');
$routes->get('Tag/delete/(:num)', 'Tag::delete/$1');

// Video Admin
$routes->get('/Playlist_Video', 'Galeri::index_video');
$routes->get('/Tambah_Video', 'Galeri::create_video');
$routes->post('/Video/simpan', 'Galeri::store_video');
$routes->get('/Video/edit/(:num)', 'Galeri::edit_video/$1');
$routes->post('/Video/update/(:num)', 'Galeri::update_video/$1');
$routes->get('/Video/delete/(:num)', 'Galeri::delete_video/$1');
$routes->get('/Video/detail/(:num)', 'Galeri::Detail_video/$1');

// Iklan
$routes->get('/Iklan_Berita', 'Iklan::index_iklan');
$routes->get('/Tambah_Iklan', 'Iklan::create');
$routes->post('/Iklan/simpan', 'Iklan::store');
$routes->get('Iklan/edit/(:num)', 'Iklan::Edit/$1');
$routes->post('Iklan/update/(:num)', 'Iklan::Update/$1');
$routes->get('Iklan/delete/(:num)', 'Iklan::delete/$1');


$routes->get('/Dashboard_User', 'Home::Dashboard_User');

// tutor
$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/pegawai/create', 'Pegawai::create');
$routes->post('/pegawai/simpan', 'Pegawai::store');
$routes->get('pegawai/edit/(:num)', 'Pegawai::Edit/$1');
$routes->post('pegawai/update/(:num)', 'Pegawai::Update/$1');
$routes->get('pegawai/delete/(:num)', 'Pegawai::delete/$1');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
