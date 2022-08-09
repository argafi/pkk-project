<?php

class Team_model
{
    private $table = 'team';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getDataTeam()
    {
        return $this->db->getAllData($this->table);
    }

    public function getTeamById($id)
    {
        return $this->db->getDataById($this->table, 'id_team', $id);
    }

    public function tambahDataTeam($data)
    {
        $query =  ("INSERT INTO $this->table VALUES (NULL, :team_name, :description, :negara, :status, :manajer, :pelatih,  :kapten)");
        $this->db->query($query);
        $this->db->bind('team_name', $data['nama-team']);
        $this->db->bind('description', $data['deskripsi-team']);
        $this->db->bind('negara', $data['negara']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('manajer', $data['manager']);
        $this->db->bind('pelatih', $data['pelatih']);
        $this->db->bind('kapten', $data['kapten']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataTeam($id)
    {
        $query = ("DELETE FROM $this->table WHERE id_team = :id_team");
        $this->db->query($query);
        $this->db->bind('id_team', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataTeam($data)
    {
        // var_dump($data);
        // die;
        $query =  ("UPDATE $this->table SET team_name = :team_name, description = :description, negara = :negara, status = :status, manajer = :manajer, pelatih = :pelatih, kapten = :kapten WHERE id_team = :id_team");
        $this->db->query($query);
        $this->db->bind('team_name', $data['nama-team']);
        $this->db->bind('description', $data['deskripsi-team']);
        $this->db->bind('negara', $data['negara']);
        $this->db->bind('status', $data['status']);
        $this->db->bind('manajer', $data['manager']);
        $this->db->bind('pelatih', $data['pelatih']);
        $this->db->bind('kapten', $data['kapten']);
        $this->db->bind('id_team', $data['id-team']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
