<?php
/**
 *
 */
class Kelas extends Admin
{
   function index()
   {
      $this->load->model('Kelas_model');
      $status_row = $this->Kelas_model->get_status_kelas();
      $status =
            explode(",",
            str_replace("'", "",
            substr(
                $status_row->COLUMN_TYPE, 5, (
                    strlen(
                        $status_row->COLUMN_TYPE)-6
                        )
                    )
                )
            );

      $kelas = $this->Kelas_model->get_all();

      $data = [
          'title' => 'Kelas',
          'num_sidebar' => 4,
          'data_table' => 'yes',
          'icheck' => 'yes',
          'status' => $status,
          'kelas' => $kelas,
          'modal_crud' => 'yes'
      ];

      $this->layout->load_backend_admin('kelas/index', $data);
   }

   function tambah()
   {
     if ($this->input->post('nama_kelas')!=null) {
       $data = [
         'nama_kelas' => $this->input->post('nama_kelas'),
         'tahun_kelas' => $this->input->post('tahun_kelas'),
         'status_kelas' => $this->input->post('status_kelas'),
       ];

       $this->load->model('Kelas_model');
       $this->alert($this->Kelas_model->insert($data), base_url('admin/kelas'));
     }else {
       $this->alert("Tidak ada data kelas yang dapat ditambahkan, slihakan isi data terlebih dahulu", base_url('admin/kelas?form=yes'));
     }
   }

   function ubah()
   {
     if ($this->input->post('id_kelas')!=null) {
       $data = [
         'nama_kelas' => $this->input->post('nama_kelas'),
         'tahun_kelas' => $this->input->post('tahun_kelas'),
         'status_kelas' => $this->input->post('status_kelas'),
       ];

       $this->load->model('Kelas_model');
       $this->alert($this->Kelas_model->update($this->input->post('id_kelas'), $data),base_url('admin/kelas'));
     }else {
       $this->alert("Tidak ada data kelas yang dapat diubah", base_url('admin/kelas'));
     }
   }
}

?>
