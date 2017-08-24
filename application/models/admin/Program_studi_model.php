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
    $check = $this->db->get_where('program_studi', ['kode_program_studi' => $data['kode_program_studi']]);
    if ($check->num_rows() == 0) {
      $this->db->insert('program_studi', $data);
      return true;
    }else {
      return false;
    }
  }

  function update($id_program_studi, $data)
  {
    $check = $this->db->get_where('program_studi', ['kode_program_studi' => $data['kode_program_studi']]);
    if ($check->num_rows()==0) {
      $this->db
        ->where('id_program_studi', $id_program_studi)
        ->update('program_studi', $data);
      return true;
    }elseif ($check->num_rows()==1) {
      if ($this->db->get_where('program_studi', ['id_program_studi' => $id_program_studi])->row()->kode_program_studi==$check->row()->kode_program_studi) {
        $this->db
          ->where('id_program_studi', $id_program_studi)
          ->update('program_studi', $data);
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }
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
