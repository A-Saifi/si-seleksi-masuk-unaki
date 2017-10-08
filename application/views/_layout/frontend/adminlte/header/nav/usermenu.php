<ul class="dropdown-menu">
  <!-- The user image in the menu -->
  <li class="user-header">
    <img src="<?= base_url('assets/adminlte/'); ?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

    <p>
      <?= ucwords(strtolower($this->session->userdata('peserta')->nama_peserta))  ?>
      <small>Peserta Ujian</small>
    </p>
  </li>
  <!-- Menu Body -->
  <!-- <li class="user-body">
    <div class="row">
      <div class="col-xs-4 text-center">
        <a href="#">Followers</a>
      </div>
      <div class="col-xs-4 text-center">
        <a href="#">Sales</a>
      </div>
      <div class="col-xs-4 text-center">
        <a href="#">Friends</a>
      </div>
    </div>
  </li> -->
  <!-- Menu Footer-->
  <li class="user-footer">
    <div class="pull-left">
      <a href="<?= base_url('dashboard') ?>" class="btn btn-default btn-flat">Dashboard</a>
    </div>
    <div class="pull-right">
      <a href="<?= base_url('logout') ?>" class="btn btn-default btn-flat">Log out</a>
    </div>
  </li>
</ul>
