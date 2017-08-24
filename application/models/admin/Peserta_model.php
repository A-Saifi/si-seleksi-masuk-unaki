<?php
/**
 *
 */
class Peserta_model extends CI_Model
{
  function get_all()
  {
    $this->db
      ->select('*')
      ->from('peserta');

    return $this->db->get()->result();
  }

  function insert($data)
  {
    $check = $this->db->get_where('peserta', ['username_peserta' => $data['username_peserta']]);
    if ($check->num_rows() == 0) {
      $this->db->insert('peserta', $data);
      return true;
    }else {
      return false;
    }
  }

  function get_peserta($username_peserta)
  {
    $this->db
      ->select('*')
      ->from('peserta')
      ->join('kelas', 'kelas.id_kelas = peserta.kelas_peserta')
      ->join('program_studi', 'program_studi.id_program_studi = peserta.program_studi_peserta')
      ->where('username_peserta', $username_peserta);

    return $this->db->get()->row();
  }

  function update_data($id_peserta,$data)
  {
    $this->db
      ->where('id_peserta', $id_peserta)
      ->update('peserta', $data);

    return "Data peserta berhasil diubah";
  }

  function update_login($id_peserta,$data)
  {
    $check = $this->db->get_where('peserta', ['username_peserta' => $data['username_peserta']]);
    if ($check->num_rows()==0) {
      $this->db
        ->where('id_peserta', $id_peserta)
        ->update('peserta', $data);
      return true;
    }elseif ($check->num_rows()==1) {
      if ($this->db->get_where('peserta', ['id_peserta' => $id_peserta])->row()->username_peserta==$check->row()->username_peserta) {
        $this->db
          ->where('id_peserta', $id_peserta)
          ->update('peserta', $data);
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }
  }

}

?>
