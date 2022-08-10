<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/dashboard/header');
        $this->view('dashboard/index');
        $this->view('templates/dashboard/footer');
    }
    public function team()
    {
        $data['judul'] = 'Team';
        $data['team'] = $this->model('Team_model')->getDataTeam();
        $this->view('templates/dashboard/header', $data);
        $this->view('team/index', $data);
        $this->view('templates/dashboard/footer');
    }

    public function tambah_team()
    {
        if ($this->model('Team_model')->tambahDataTeam($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/dashboard/team');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/dashboard/team');
            exit;
        }
    }

    public function hapus_team($id)
    {
        if ($this->model('Team_model')->hapusDataTeam($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/dashboard/team');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/dashboard/team');
            exit;
        }
    }

    public function ubah_team($id)
    {
        $data['judul'] = 'Ubah Team';
        $data['team'] = $this->model('Team_model')->getTeamById($id);
        $this->view('templates/dashboard/header', $data);
        $this->view('team/ubahteam', $data);
        $this->view('templates/dashboard/footer');
    }

    public function proses_ubahteam()
    {
        if ($this->model('Team_model')->ubahDataTeam($_POST) > 0) {
            Flasher::setFlash('berhasil', 'diubah', 'success');
            header('Location: ' . BASE_URL . '/dashboard/team');
            exit;
        } else {
            Flasher::setFlash('gagal', 'diubah', 'danger');
            header('Location: ' . BASE_URL . '/dashboard/team');
            exit;
        }
    }
}
