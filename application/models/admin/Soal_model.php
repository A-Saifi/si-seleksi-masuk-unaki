<?php
/**
 *
 */
class Soal_model extends CI_Model
{
    function insert($data)
    {
      $this->db->insert('soal', $data);
      return true;
    }

    function get_all()
    {
      $this->db
        ->select('*')
        ->from('soal');

      return $this->db->get()->result();
    }

    function get_by_id($id_soal)
    {
      $this->db
      ->select('*')
      ->from('soal')
      ->where('id_soal', $id_soal);

      return $this->db->get()->row();
    }

    function update($id_soal, $data)
    {
      $this->db
        ->where('id_soal', $id_soal)
        ->update('soal', $data);
      return true;
    }

    function delete($id_soal)
    {
      $response = $this->db->delete('soal',array('id_soal'=>$id_soal));
      if($response)
      {
          return "Data soal berhasil dihapus";
      }
      else
      {
          return "Gagal menghapus soal";
      }
    }

    function delete_picture($id_soal)
    {
      $data = ['gambar_soal' => ''];
      $this->db
        ->where('id_soal', $id_soal)
        ->update('soal', $data);
      return true;
    }

    function get_soal_ujian()
    {
      $this->db
        ->select('*')
        ->from('soal')
        ->join('soal_ujian', 'soal.id_soal = soal_ujian.soal_soal_ujian', 'left')
        ->where('soal_ujian.id_soal_ujian', null);

      return $this->db->get()->result();
    }
}

?>
