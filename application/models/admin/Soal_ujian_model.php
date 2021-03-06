<?php
/**
 *
 */
class Soal_ujian_model extends CI_Model
{
  function insert($data)
  {
    $this->db->insert('soal_ujian', $data);
    return "soal berhasil ditambahkan ke ujian";
  }

  function get_by_ujian($id_ujian)
  {
    $this->db
      ->select('*')
      ->from('soal_ujian')
      ->join('soal', 'soal.id_soal = soal_ujian.soal_soal_ujian')
      ->where('soal_ujian.ujian_soal_ujian', $id_ujian);

    return $this->db->get()->result();
  }

  function get_by_ujian_soal($id_ujian, $id_soal)
  {
    $this->db
      ->select('*')
      ->from('soal_ujian')
      ->where('ujian_soal_ujian', $id_ujian)
      ->where('soal_soal_ujian', $id_soal);

    return $this->db->get()->row();
  }

  function delete($id_soal_ujian)
  {
    $response = $this->db->delete('soal_ujian',array('id_soal_ujian'=>$id_soal_ujian));
    if($response)
    {
        return "Soal berhasil diurungkan";
    }
    else
    {
        return "Gagal";
    }
  }
}

?>
