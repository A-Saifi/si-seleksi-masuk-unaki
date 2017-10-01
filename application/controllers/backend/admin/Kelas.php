<?php
/**
 *
 */
class Kelas extends Admin
{
   function index()
   {
      $this->load->library('backend/admin/check_kelas');

      $this->load->model('admin/Kelas_model');
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
          'num_sidebar' => 3,
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

       $this->load->model('admin/Kelas_model');
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

       $this->load->model('admin/Kelas_model');
       if ($this->Kelas_model->update($this->input->post('id_kelas'), $data)) {
         $this->alert('Data kelas berhasil diubah', base_url('admin/kelas'));
       }else {
         $this->alert('Kode kelas sudah dipakai, gunakan kode kelas sebelumnya atau kode kelas lain', base_url('admin/kelas?edit='.$this->input->post('id_kelas')));
       }
     }else {
       $this->alert("Tidak ada data kelas yang dapat diubah", base_url('admin/kelas'));
     }
   }

   function hapus()
   {
     $this->load->library('backend/admin/check_kelas');
     if ($this->input->get('id')!=null) {
       if ($this->check_kelas->can_delete($this->input->get('id'))) {
         $this->load->model('admin/Kelas_model');
         $this->alert($this->Kelas_model->delete($this->input->get('id')), base_url('admin/kelas'));
       }else {
         $this->alert('Kelas tidak dapat dihapus', base_url('admin/kelas'));
       }
     }else {
       $this->alert('Tidak ada kelas yang dapat dihapus', base_url('admin/kelas'));
     }
   }

   function detail()
   {
     $id_kelas = $this->input->get('kelas');
     if (!empty($id_kelas)) {
       $this->load->model('admin/Kelas_model');
       $kelas = $this->Kelas_model->get_kelas($id_kelas);
       $peserta = $this->Kelas_model->get_peserta($id_kelas);

       $this->load->model('admin/Program_studi_model');
       $program = $this->Program_studi_model->get_active();

       $this->load->model('admin/Ujian_model');
       $ujian = $this->Ujian_model->get_all();

       $this->load->model('admin/Kelas_ujian_model');
       $ujian_kelas = $this->Kelas_ujian_model->get_by_kelas($id_kelas);

       $data = [
         'title' => 'Detail: '.$kelas->nama_kelas,
         'num_sidebar' => 3,
         'data_table' => 'yes',
         'kelas' => $kelas,
         'peserta' => $peserta,
         'program' => $program,
         'ujian' => $ujian,
         'ujian_kelas' => $ujian_kelas,
         'modal_crud' => 'yes'
       ];

       $this->load->library('backend/admin/penghitung');
       $this->layout->load_backend_admin('kelas/detail', $data);
     }else {
       $this->alert('Pilih kelas terlebih dahulu', base_url('admin/kelas'));
     }
   }

   // Menampilkan form dan Simpan ujian yang dipilih
   function simpan()
   {
     $kelas = $this->input->get('kelas');
     $ujian = $this->input->get('ujian');
     $tanggal = $this->input->post('tanggal');

     if (!empty($kelas) && !empty($ujian)) {
       if (!empty($tanggal)) {
         # code simpan here
         $waktu = explode('-', $tanggal);
         $mulai = strtotime($waktu[0]);
         $akhir = strtotime($waktu[1]);

         $kelas_ujian = [
           'kelas_kelas_ujian' => $kelas,
           'ujian_kelas_ujian' => $ujian,
           'waktu_mulai_kelas_ujian' => $mulai,
           'waktu_akhir_kelas_ujian' => $akhir
         ];

         $this->load->model('admin/Kelas_ujian_model');
         $this->alert(
           $this->Kelas_ujian_model->insert($kelas_ujian),
           base_url('admin/Kelas/detail').'?kelas='.$kelas
         );
       }else {
         # code tampil form here
         $this->load->model('admin/Kelas_model');
         $kelas_detail = $this->Kelas_model->get_kelas($kelas);

         $this->load->model('admin/Ujian_model');
         $ujian_detail = $this->Ujian_model->get_by_id($ujian);

         $this->load->model('admin/Soal_ujian_model');
         $soal = $this->Soal_ujian_model->get_by_ujian($ujian);

         $pilihan = ['A','B','C','D'];

         $data = [
           'title' => 'Ujian Kelas: '.$ujian_detail->nama_ujian,
           'num_sidebar' => 3,
           'data_table' => 'yes',
           'kelas' => $kelas_detail,
           'ujian' => $ujian_detail,
           'soal' => $soal,
           'pilihan' => $pilihan,
           'panjang_teks' => 125,
           'datepicker' => 'yes',
           'lihat_soal' => 'yes'
         ];

         $this->load->library('backend/admin/jawaban');
         $this->layout->load_backend_admin('kelas/simpan', $data);
       }
     }else {
       $this->alert('Pilih kelas terlebih dahulu', base_url('admin/kelas'));
     }
   }

   // Menghapus ujian pada kelas
   function urungkan()
   {
     $ujian_kelas = $this->input->get(md5('ujian_kelas'));
     if (!empty($ujian_kelas)) {
       # code hapus here...
       $this->load->model('admin/Kelas_ujian_model');
       $kelas = $this->Kelas_ujian_model->get_by_id($ujian_kelas)->kelas_kelas_ujian;

       $this->alert(
         $this->Kelas_ujian_model->delete($ujian_kelas), 
         base_url('admin/kelas/detail?kelas=').$kelas);
     }else {
       $this->alert('Pilih kelas terlebih dahulu', base_url('admin/kelas'));
     }
   }
}

?>
