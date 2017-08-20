<?php
/**
 *
 */
class Role_model extends CI_Model
{

  function show_role()
  {
    $this->db
      ->select('*')
      ->from('role');

    return $this->db->get()->result();
  }

  function search_role($id_role)
  {
    $this->db
      ->select('*')
      ->from('role')
      ->where('id_role', $id_role);

    return $this->db->get()->row();
  }

}

?>
