<?php

class Team extends Controller
{
    public function index()
    {
        $data['judul'] = 'Team';
        $data['team'] = $this->model('Team_model')->getDataTeam();
        $this->view('templates/dashboard/header', $data);
        $this->view('team/index', $data);
        $this->view('templates/dashboard/footer');
    }
    public function tambah()
    {
        if ($this->model('Team_model')->tambahDataTeam($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/team');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/team');
            exit;
        }
    }
    public function hapus($id)
    {
        if ($this->model('Team_model')->hapusDataTeam($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/team');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/team');
            exit;
        }
    }
    public function ubah($id)
    {
        $data['judul'] = 'Ubah Team';
        $data['team'] = $this->model('Team_model')->getTeamById($id);
        $this->view('templates/dashboard/header', $data);
        $this->view('team/ubahteam', $data);
        $this->view('templates/dashboard/footer');
    }

    public function prosesubah()
    {
        if ($this->model('Team_model')->ubahDataTeam($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/team');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/team');
            exit;
        }
    }
}
