<ul class="sidebar-menu" data-widget="tree">

  <li class="header">MENU</li>

  <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 1); } ?>">
    <a href="<?= base_url('admin/dashboard')  ?>">
      <i class="fa fa-dashboard"></i> <span>Dashboard</span>
    </a>
  </li>

  <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 2); } ?>">
    <a href="<?= base_url('admin/petugas')  ?>">
      <i class="fa fa-suitcase"></i> <span>Petugas</span>
    </a>
  </li>

  <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 3); } ?>">
    <a href="<?= base_url('admin/program')  ?>">
      <i class="fa fa-graduation-cap"></i> <span>Program Studi</span>
    </a>
  </li>

  <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 4); } ?>">
    <a href="<?= base_url('admin/peserta')  ?>">
      <i class="fa fa-users"></i> <span>Peserta Ujian</span>
    </a>
  </li>

  <li class="treeview <?php if (isset($num_sidebar)) { echo $this->sidebar->active_tree($num_sidebar, 5, 9); } ?>">
    <a href="#">
      <i class="fa fa-book"></i> <span>Ujian</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">

      <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 5); } ?>">
        <a href="#"><i class="fa fa-tags"></i> Kategori Ujian</a>
      </li>

      <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 6); } ?>">
        <a href="#"><i class="fa fa-question-circle"></i> Soal Ujian</a>
      </li>

      <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 7); } ?>">
        <a href="#"><i class="fa fa-key"></i> Jawaban Ujian</a>
      </li>

      <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 8); } ?>">
        <a href="#"><i class="fa fa-list-alt"></i> Hasil Ujian</a>
      </li>

    </ul>
  </li>

  <!-- <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 9); } ?>">
    <a href="">
      <i class="fa fa-envelope"></i> <span> Kotak Pesan</span>
    </a>
  </li> -->

  <li class="<?php if (isset($num_sidebar)) { echo $this->sidebar->active($num_sidebar, 10); } ?>">
    <a href="#">
      <i class="fa fa-file-pdf-o"></i> <span> Laporan</span>
    </a>
  </li>

  <li>
    <a href="<?= base_url('admin/logout')  ?>">
      <i class="fa fa-sign-out"></i> <span> Sign out</span>
    </a>
  </li>

  <?php //$this->load->view('_layout/backend/adminlte/sidebar/sidebar-menu/example')  ?>

</ul>
