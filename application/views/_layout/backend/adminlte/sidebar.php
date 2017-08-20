<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url('assets/images/avatars/') ?>hipster.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?= explode(' ',trim($this->session->userdata('admin')->nama))[0] ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->

    <?php $this->load->view('_layout/backend/adminlte/sidebar/sidebar-menu')  ?>

  </section>
  <!-- /.sidebar -->
</aside>
