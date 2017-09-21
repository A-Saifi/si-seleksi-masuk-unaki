<?php
/**
 *
 */
class Jawaban_model extends CI_Model
{
    function insert($data)
    {
      $this->db->insert('jawaban', $data);
    }

    function get_by_soal($id_soal)
    {
      $this->db
        ->select('*')
        ->from('jawaban')
        ->where('soal_jawaban', $id_soal);

      return $this->db->get()->result();
    }

    function update($id_jawaban, $data)
    {
      $this->db
        ->where('id_jawaban', $id_jawaban)
        ->update('jawaban', $data);
    }
}

?>
