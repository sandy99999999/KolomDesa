<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{

    protected $user;

    function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        return view('User/Daftar');
    }

    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],

            'no_hp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        // $user = new UserModel();
        $this->user->insert([
            'username' => $this->request->getVar('username'),
            'password' => $this->request->getVar('password'),
            'email' => $this->request->getVar('email'),
            'nama' => $this->request->getVar('nama'),
            'no_hp' => $this->request->getVar('no_hp')
        ]);
        return redirect()->to('/login');
    }

    public function login()
    {
        $session = \Config\Services::session();
        return view('User/Login', ['error_message' => $session->getFlashdata('error_message')]);
    }

    public function login_process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $password_sh1 = sha1($password);

        $user_model = new \App\Models\UserModel();

        $user = $user_model->getUserLogin($username, $password_sh1);

        $session = \Config\Services::session();
        if ($user) {
            $session->set(['user' => $user]);

            return redirect()->to('/Dashboard_Admin');
        } else {
            $session->setFlashdata(['error_message' => 'Useername dan Password Tidak Sesuai.']);
            return redirect()->to('login');
        }
    }

    function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
