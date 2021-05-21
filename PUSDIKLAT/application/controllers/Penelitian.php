<?php

/**
 * summary
 */
class Penelitian extends CI_Controller
{
    /**
     * summary
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('penelitian_model');
    }

    public function index()
    {
    	$this->load->view('templates/header');
    	$this->load->view('templates/navbar');
    	$this->load->view('templates/footer');
    }

    public function tambah_penelitian()
    {
    	$this->load->view('templates/header');
    	$this->load->view('templates/navbar');
    	$this->load->view('templates/footer');
    }

    public function tambahDataPenelitian()
    {
        $nim = $this->input->post('nim', true);
        $nama = $this->input->post('nama', true);
        $instansi = $this->input->post('instansi', true);
        $prodi = $this->input->post('prodi', true);
        $no_telp = $this->input->post('no_telp', true);
        $email = $this->input->post('email', true);
        $nama_dosen = $this->input->post('nama_dosen', true);
        $no_telp_dosen = $this->input->post('no_telp_dosen', true);
        $email_dosen = $this->input->post('email_dosen', true);
        $judul = $this->input->post('judul', true);
        $abstrak = $this->input->post('abstrak', true);
        $no_surat_penelitian = $this->input->post('no_surat_penelitian', true);
        $surat_penelitian = $_FILES['surat_penelitian'];
        $khs = $_FILES['khs'];

        if ($surat_penelitian = '') {
        } else {
            $config['upload_path'] = './surat_penelitian';
            $config['allowed_types'] = 'pdf';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('surat_penelitian')) {
                echo 'Unggah Berkas Gagal';
                die();
            } else {
                $surat_penelitian = $this->upload->data('file_name');
            }
        }
        if ($khs = '') {
        } else {
            $config2['upload_path'] = './khs';
            $config2['allowed_types'] = 'pdf';
            $this->upload->initialize($config2);
            $this->load->library('upload', $config2);
            if (!$this->upload->do_upload('khs')) {
                echo 'Unggah Berkas Gagal';
                die();
            } else {
                $khs = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nim' => $nim,
            'nama' => $nama,
            'instansi' => $instansi,
            'prodi' => $prodi,
            'no_telp' => $no_telp,
            'email' => $email,
            'nama_dosen' => $nama_dosen,
            'no_telp_dosen' => $no_telp_dosen,
            'email_dosen' => $email_dosen,
            'judul' => $judul,
            'abstrak' => $abstrak,
            'no_surat_penelitian' => $no_surat_penelitian,
            'surat_penelitian' => $surat_penelitian,
            'khs' => $khs
        );
        $this->session->set_flashdata('flashMessage', 'Pendaftaran Berhasil!');
        $this->penelitian_model->tambahDataPenelitian($data);
        redirect('home/penelitian');
    }
}