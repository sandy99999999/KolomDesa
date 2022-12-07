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
$routes->get('/Galeri', 'ListBerita::Galeri'); 

$routes->get('/Dashboard_Admin', 'Home::Dashboard_Admin');
$routes->get('/Tema', 'Home::Tema');
$routes->get('/Tema_User', 'Home::Tema_User');

$routes->get('/IdentitasWeb', 'Home::IdentitasWeb');
$routes->get('/MenuWebsite', 'Home::MenuWebsite');
$routes->get('/HalamanBaru', 'Home::HalamanBaru');


// Tag Berita
$routes->get('/Tag_Berita', 'Tag::index');
$routes->get('/Tambah_Tag', 'Tag::create');
$routes->post('/Tag/simpan', 'Tag::store');
$routes->get('Tag/edit/(:num)', 'Tag::Edit/$1');
$routes->post('Tag/update/(:num)', 'Tag::Update/$1');
$routes->get('Tag/delete/(:num)', 'Tag::delete/$1');

$routes->get('/Tag_Berita', 'Home::Tag_Berita');
$routes->get('/Sensor_Berita', 'Home::Sensor_Berita');
$routes->get('/Berita_Foto', 'Home::Berita_Foto');
$routes->get('/GaleriFoto_Berita', 'Home::GaleriFoto_Berita');
$routes->get('/Playlist_Video', 'Home::Playlist_Video');
$routes->get('/Video', 'Home::Video');
$routes->get('/Tag_Video', 'Home::Tag_Video');
$routes->get('/Komentar_Video', 'Home::Komentar_Video');
$routes->get('/Iklan_Atas', 'Home::Iklan_Atas');
$routes->get('/Iklan_Home', 'Home::Iklan_Home');
$routes->get('/Iklan_Sidebar', 'Home::Iklan_Sidebar');
$routes->get('/Logo_Website', 'Home::Logo_Website');
$routes->get('/Template_Website', 'Home::Template_Website');
$routes->get('/Backround_Website', 'Home::Backround_Website');
$routes->get('/Agenda', 'Home::Agenda');
$routes->get('/Sekilas_Info', 'Home::Sekilas_Info');
// $routes->get('/Jejak_Pendapat', 'Home::Jejak_Pendapat');
$routes->get('/Dashboard_User', 'Home::Dashboard_User');

// database berita user
$routes->get('/berita', 'ListBerita::index');
$routes->get('/cari', 'ListBerita::cari');
$routes->get('berita/tambah', 'ListBerita::Tambah');
$routes->post('berita/simpan', 'ListBerita::Simpan');
$routes->get('berita/edit/(:num)', 'ListBerita::Edit/$1');
$routes->post('berita/update/(:num)', 'ListBerita::Update/$1');
$routes->post('Komentar_Berita/(:num)', 'ListBerita::Komentar/$1');
$routes->get('berita/delete/(:num)', 'ListBerita::Delete/$1');
$routes->get('berita/detail/(:num)', 'ListBerita::Detail/$1');
// $routes->post('Komentar_Berita/(:num)', 'ListBerita::Komentar/$1'); 

//Form Login
$routes->get('/register', 'Register::index');
$routes->post('/register/process', 'Register::process');
$routes->get('/login', 'Register::login');
$routes->post('/login/process', 'Register::login_process');
$routes->get('/logout', 'Register::logout');

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
