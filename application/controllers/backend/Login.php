<?php
/**
 *
 */
class Login extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper(['url', 'html']);

    if ($this->session->userdata('admin')!=null) {
      $this->alert('Anda telah login', base_url('admin'));
    }

  }

  function index()
  {
    $this->load->model('admin/Role_model');
    $role = $this->Role_model->show_role();
    $this->load->view('_layout/backend/login', ['role' => $role]);
  }

  function auth()
  {
    $this->load->model('admin/Admin_model');
    $auth = $this->Admin_model->login($this->input->post('username'));

    if ($auth==null) {

      $this->alert('Username tidak terdaftar', base_url('login'));

    }else {

      if ($auth->password==md5($this->input->post('password'))) {

        $this->check_role($auth, $this->input->post('role'));

      }else {

        $this->alert('Password salah', base_url('backend/login?username='.$this->input->post('username')));

      }

    }

  }

  function check_role($auth, $id_role)
  {
    $this->load->model('admin/Role_model');
    $role = $this->Role_model->search_role($id_role);

    if ($role!=null) {

      if ($role->id_role==$auth->role) {

        $this->session->set_userdata(strtolower($role->nama_role), $auth);
        redirect(base_url(strtolower($role->nama_role)));

      }else {

        $this->alert('Role tidak sesuai', base_url('admin/login?username='.$auth->username));

      }

    }else {
      $this->alert('Role tidak ada', base_url('admin/login'));
    }
  }

  function alert($pesan, $url)
  {
    echo "<script>
          alert('".$pesan."');
          window.location.href='".$url."';
          </script>";
  }

}

?>
