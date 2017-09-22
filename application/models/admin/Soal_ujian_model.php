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

  function get_all()
  {
    $this->db
      ->select('*')
      ->from('soal_ujian')
      ->join('soal', 'soal.id_soal = soal_ujian.soal_soal_ujian');

    return $this->db->get()->result();
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
