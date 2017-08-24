<?php
/**
 *
 */
class Admin_model extends CI_Model
{

  function login($username)
  {
    $this->db
      ->select('*')
      ->from('admin')
      ->where('username', $username)
      ->join('role', 'admin.role = role.id_role');

    return $this->db->get()->row();
  }

  function get_all()
  {
    $this->db
      ->select('*')
      ->from('admin')
      ->join('role', 'admin.role = role.id_role');      

    return $this->db->get()->result();
  }

  function insert($data)
  {
    $check = $this->db->get_where('admin', ['username' => $data['username']]);
    if ($check->num_rows() == 0) {
      $this->db->insert('admin', $data);
      return true;
    }else {
      return false;
    }
  }

  function delete($id_admin)
  {
    $response = $this->db->delete('admin',array('id_admin'=>$id_admin));
    if($response)
    {
        return "Data petugas berhasil dihapus";
    }
    else
    {
        return "Gagal menghapus petugas";
    }
  }

  function update($id_admin,$data)
  {
    $check = $this->db->get_where('admin', ['username' => $data['username']]);
    if ($check->num_rows()==0) {
      $this->db
        ->where('id_admin', $id_admin)
        ->update('admin', $data);
      return true;
    }elseif ($check->num_rows()==1) {
      if ($this->db->get_where('admin', ['id_admin' => $id_admin])->row()->username==$check->row()->username) {
        $this->db
          ->where('id_admin', $id_admin)
          ->update('admin', $data);
        return true;
      }else {
        return false;
      }
    }else {
      return false;
    }
  }

}

?>
