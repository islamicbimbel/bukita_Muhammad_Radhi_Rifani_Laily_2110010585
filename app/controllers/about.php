<?php
class About extends Controller
{
    public function __construct()
    {
        if ($_SESSION['session_login'] != 'sudah_login') {
            Flasher::setMessage('Login', 'Tidak ditemukan.', 'danger');
            header('location: ' . base_url . '/login');
            exit;
        }
    }
    
    public function index()
    {
        $data['title'] = 'Halaman About';
        $data['nama'] = 'Muhammad Radhi Rifani Laily';
        $data['alamat'] = 'Jl. Barito Gg. 12 Baru No. 96';
        $data['no_hp'] = '085350204600';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}