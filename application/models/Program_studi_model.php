<?php
/**
 *
 */
class Program_studi_model extends CI_Model
{
  function get_status_program_studi()
  {
      $this->db
          ->select('COLUMN_TYPE')
          ->from('INFORMATION_SCHEMA.COLUMNS')
          ->where('TABLE_NAME', 'program_studi')
          ->where('COLUMN_NAME', 'status_program_studi');

      return $this->db->get()->row();
  }

  function get_all()
  {
    $this->db
      ->select('*')
      ->from('program_studi');

    return $this->db->get()->result();
  }

  function insert($data)
  {
    $this->db->insert('program_studi', $data);

    return "Data program studi berhasil ditambahkan";
  }

  function update($id_program_studi, $data)
  {
    $this->db
      ->where('id_program_studi', $id_program_studi)
      ->update('program_studi', $data);

    return "Data program studi berhasil diubah";
  }

  function get_active()
  {
    $this->db
      ->select('*')
      ->from('program_studi')
      ->where('status_program_studi', 'active');

    return $this->db->get()->result();
  }

}

?>
