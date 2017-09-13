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
}

?>
