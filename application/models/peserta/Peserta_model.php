<?php
/**
 *
 */
class Peserta_model extends CI_Model
{

  function login($username)
  {
    return $this->db
      ->select('*')
      ->from('peserta')
      ->where('username_peserta', $username)
      ->join('kelas', 'peserta.kelas_peserta = kelas.id_kelas')
      ->get()
      ->row();
  }
}
 ?>
