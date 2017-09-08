<?php
/**
 *
 */
class Kategori_ujian_model extends CI_Model
{
  function get_all()
  {
    $this->db
      ->select('*')
      ->from('kategori_ujian');

    return $this->db->get()->result();
  }

  function insert($data)
  {
    $this->db->insert('kategori_ujian', $data);
    return true;
  }

  function update($id_kategori_ujian, $data)
  {
    $this->db
      ->where('id_kategori_ujian', $id_kategori_ujian)
      ->update('kategori_ujian', $data);
    return true;
  }
}
  ?>
