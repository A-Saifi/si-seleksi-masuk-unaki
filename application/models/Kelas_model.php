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
      $this->db->insert('kelas', $data);
      return "Data kelas berhasil ditambahkan";
    }

    function update($id_kelas, $data)
    {
      $this->db
        ->where('id_kelas', $id_kelas)
        ->update('kelas', $data);

      return "Data kelas berhasil diubah";
    }
}

?>
