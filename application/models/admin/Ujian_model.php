<?php
/**
 *
 */
class Ujian_model extends CI_Model
{

  function get_all()
  {
    $this->db
      ->select('*')
      ->from('ujian')
      ->join('kategori_ujian', 'kategori_ujian.id_kategori_ujian = ujian.kategori_ujian');

    return $this->db->get()->result();
  }

  function insert($data){
    $this->db->insert('ujian', $data);
    return "Data ujian berhasil disimpan";
  }

  function update($id_ujian, $data)
  {
    $this->db
      ->where('id_ujian', $id_ujian)
      ->update('ujian', $data);

    return "Data ujian berhasil diubah";
  }

  function delete($id_ujian)
  {
    $response = $this->db->delete('ujian',['id_ujian' => $id_ujian]);
    if($response)
    {
        return "Data ujian berhasil dihapus";
    }
    else
    {
        return "Gagal menghapus data ujian";
    }
  }

  function get_by_id($id_ujian)
  {
    $this->db
      ->select('*')
      ->from('ujian')
      ->join('kategori_ujian', 'kategori_ujian.id_kategori_ujian = ujian.kategori_ujian')
      ->where('id_ujian', $id_ujian);

    return $this->db->get()->row();
  }

}

?>
