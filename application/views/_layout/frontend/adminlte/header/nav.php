<header class="main-header">
  <nav class="navbar navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <a href="../../index2.html" class="navbar-brand"><b>Ujian</b>Online</a>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <?php $this->load->view('_layout/frontend/adminlte/header/nav/nav-link')  ?>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <?php //$this->load->view('_layout/frontend/adminlte/header/nav/notif')  ?>
          <li><a href="#" id="server-time"></a></li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">

              <?php if ($this->session->userdata('peserta')==null): ?>
                <!-- Menu Toggle Button -->
                <a href="<?= base_url('login')  ?>" class="dropdown-toggle">
                  <!-- The user image in the navbar-->
                <i class="fa fa-user"></i>
                <span class="hidden-xs">Login</span>
                </a>
              <?php else: ?>
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                <img src="<?= base_url('assets/adminlte/'); ?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= explode(' ',trim(ucwords(strtolower($this->session->userdata('peserta')->nama_peserta))))[0] ?></span>
                </a>
                <?php $this->load->view('_layout/frontend/adminlte/header/nav/usermenu')  ?>
              <?php endif; ?>

          </li>
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>
