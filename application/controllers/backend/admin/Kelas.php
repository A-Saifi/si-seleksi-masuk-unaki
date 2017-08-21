<?php
/**
 *
 */
class Kelas extends Admin
{
   function index()
   {
      $this->load->library('backend/admin/check_kelas');

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
         'kode_kelas' => $this->input->post('kode_kelas'),
         'nama_kelas' => $this->input->post('nama_kelas'),
         'tahun_kelas' => $this->input->post('tahun_kelas'),
         'status_kelas' => $this->input->post('status_kelas'),
       ];

       $this->load->model('Kelas_model');
       if ($this->Kelas_model->insert($data)) {
         $this->alert("Data kelas berhasil ditambahkan", base_url('admin/kelas'));
       }else {
        $this->alert("Kode kelas telah dipakai silahkan gunakan kode kelas lain", base_url(
          'admin/kelas?form=yes&kode_kelas='.$data['kode_kelas'].
          '&nama_kelas='.$data['nama_kelas'].
          '&tahun_kelas='.$data['tahun_kelas'].
          '&status_kelas='.$data['status_kelas']));
       }
     }else {
       $this->alert("Tidak ada data kelas yang dapat ditambahkan, slihakan isi data terlebih dahulu", base_url('admin/kelas?form=yes'));
     }
   }

   function ubah()
   {
     if ($this->input->post('id_kelas')!=null) {
       $data = [
         'kode_kelas' => $this->input->post('kode_kelas'),
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

   function hapus()
   {
     $this->load->library('backend/admin/check_kelas');
     if ($this->input->get('id')!=null) {
       if ($this->check_kelas->can_delete($this->input->get('id'))) {
         $this->load->model('Kelas_model');
         $this->alert($this->Kelas_model->delete($this->input->get('id')), base_url('admin/kelas'));
       }else {
         $this->alert('Kelas tidak dapat dihapus', base_url('admin/kelas'));
       }
     }else {
       $this->alert('Tidak ada kelas yang dapat dihapus', base_url('admin/kelas'));
     }
   }

   function peserta()
   {
     if ($this->input->get('kelas')!=null) {
       $this->load->model('Kelas_model');
       $kelas = $this->Kelas_model->get_kelas($this->input->get('kelas'));
       $peserta = $this->Kelas_model->get_peserta($this->input->get('kelas'));

       $this->load->model('Program_studi_model');
       $program = $this->Program_studi_model->get_active();

       $data = [
         'title' => 'Peserta',
         'num_sidebar' => 4,
         'data_table' => 'yes',
         'kelas' => $kelas,
         'peserta' => $peserta,
         'program' => $program
       ];

       $this->layout->load_backend_admin('kelas/peserta', $data);
     }else {
       $this->alert('Pilih kelas terlebih dahulu', base_url('admin/kelas'));
     }
   }
}

?>
