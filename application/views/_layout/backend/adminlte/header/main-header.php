<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url($this->session->userdata('admin')->nama_role) ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>U</b>On</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Ujian</b> Online</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <?php //$this->load->view('_layout/backend/adminlte/header/main-header/notif')  ?>

        <li><a href="#" id="server-time"></a></li>

        <?php $this->load->view('_layout/backend/adminlte/header/main-header/user')  ?>

        <li>
          <a href="<?= base_url('admin')  ?>"><i class="fa fa-home"></i></a>
          <!-- <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a> -->
        </li>
      </ul>
    </div>
  </nav>
</header>
