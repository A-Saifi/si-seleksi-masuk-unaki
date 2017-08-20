<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <img src="<?= base_url('assets/images/avatars/') ?>hipster.png" class="user-image" alt="User Image">
    <span class="hidden-xs"><?= explode(' ',trim($this->session->userdata('admin')->nama))[0]  ?></span>
  </a>
  <ul class="dropdown-menu">
    <!-- User image -->
    <li class="user-header">
      <img src="<?= base_url('assets/images/avatars/') ?>hipster.png" class="img-circle" alt="User Image">

      <p>
        <?= ucwords(strtolower($this->session->userdata('admin')->nama)) ?>
        <small><?= ucwords(strtolower($this->session->userdata('admin')->nama_role)) ?></small>
      </p>
    </li>
    <!-- Menu Body -->
    <!-- <li class="user-body">
      <div class="row">
        <div class="col-xs-4 text-center">
          <a href="#">Peserta</a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="#">Ujian</a>
        </div>
        <div class="col-xs-4 text-center">
          <a href="#">Soal</a>
        </div>
      </div>
    </li> -->
    <!-- Menu Footer-->
    <li class="user-footer">
      <div class="pull-left">
        <a href="<?= base_url('admin/dashboard')  ?>" class="btn btn-default btn-flat">Dashboard</a>
      </div>
      <div class="pull-right">
        <a href="<?= base_url('admin/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
      </div>
    </li>
  </ul>
</li>
<!-- Control Sidebar Toggle Button -->
