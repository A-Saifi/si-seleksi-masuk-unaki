<?php
/**
 *
 */
class Login extends Pengunjung
{

  function index()
  {
    if ($this->session->userdata('peserta')==null) {

    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $this->load->view('_layout/frontend/login');

    if (!empty($username)) {
      $this->auth($username,$password);
    }

  }else {
    redirect(base_url());
  }
  }

  private function auth($username,$password)
  {
    $this->load->model('peserta/Peserta_model');
    $peserta = $this->Peserta_model->login($username);

    if ($peserta->password_peserta == md5($password)) {
      $this->session->set_userdata('peserta', $peserta);
      redirect(base_url('dashboard'));
    }else {
      $this->alert('Password salah', base_url('login?'.md5('username').'='.$username));
    }
  }
}

?>
