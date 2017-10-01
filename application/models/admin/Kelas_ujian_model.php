<?php
/**
 *
 */
class Kelas_ujian_model extends CI_Model
{

  function insert($data)
  {
    $this->db->insert('kelas_ujian', $data);
    return "ujian berhasil ditambahkan ke dalam kelas";
  }

  function get_by_kelas($id_kelas)
  {
    $this->db
      ->select('*')
      ->from('kelas_ujian')
      ->join('ujian', 'kelas_ujian.ujian_kelas_ujian=ujian.id_ujian')
      ->where('kelas_ujian.kelas_kelas_ujian', $id_kelas);

    return $this->db->get()->result();
  }

  function get_by_id($id_kelas_ujian)
  {
    $this->db
      ->select('*')
      ->from('kelas_ujian')
      ->where('kelas_ujian.id_kelas_ujian', $id_kelas_ujian);

    return $this->db->get()->row();
  }

  function delete($id_kelas_ujian)
  {
    $response = $this->db->delete('kelas_ujian',array('id_kelas_ujian'=>$id_kelas_ujian));
    if($response)
    {
        return "Ujian berhasil diurungkan";
    }
    else
    {
        return "Gagal";
    }
  }
}

?>
