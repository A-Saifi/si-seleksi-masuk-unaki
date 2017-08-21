<?php
/**
 *
 */
class Kelas_model extends CI_Model
{
    function get_status_kelas()
    {
        $this->db
            ->select('COLUMN_TYPE')
            ->from('INFORMATION_SCHEMA.COLUMNS')
            ->where('TABLE_NAME', 'kelas')
            ->where('COLUMN_NAME', 'status_kelas');

        return $this->db->get()->row();
    }

    function get_all()
    {
      $this->db
        ->select('*')
        ->from('kelas')
        ->order_by('tahun_kelas', 'asc');

      return $this->db->get()->result();
    }

    function insert($data)
    {
      $check = $this->db->get_where('kelas', ['kode_kelas' => $data['kode_kelas']]);
      if ($check->num_rows() == 0) {
        $this->db->insert('kelas', $data);
        return true;
      }else {
        return false;
      }
    }

    function update($id_kelas, $data)
    {
      $check = $this->db->get_where('kelas', ['kode_kelas' => $data['kode_kelas']]);
      if ($check->num_rows()==0) {
        $this->db
          ->where('id_kelas', $id_kelas)
          ->update('kelas', $data);
        return true;
      }elseif ($check->num_rows()==1) {
        if ($this->db->get_where('kelas', ['id_kelas' => $id_kelas])->row()->kode_kelas==$check->row()->kode_kelas) {
          $this->db
            ->where('id_kelas', $id_kelas)
            ->update('kelas', $data);
          return true;
        }else {
          return false;
        }
      }else {
        return false;
      }
    }

    function delete($id_kelas)
    {
      $response = $this->db->delete('kelas',['id_kelas' => $id_kelas]);
      if($response)
      {
          return "Data kelas berhasil dihapus";
      }
      else
      {
          return "Gagal menghapus data kelas";
      }
    }

    function get_kelas($id_kelas)
    {
      $this->db
        ->select('*')
        ->from('kelas')
        ->where('id_kelas', $id_kelas);

      return $this->db->get()->row();
    }

    function get_peserta($id_kelas)
    {
      $this->db
        ->select('*')
        ->from('kelas')
        ->join('peserta', 'peserta.kelas_peserta = kelas.id_kelas')
        ->where('kelas.id_kelas', $id_kelas)
        ->order_by('peserta.id_peserta');

      return $this->db->get()->result();
    }

}

?>
