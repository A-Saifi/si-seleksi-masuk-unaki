<!-- jQuery 3 -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/adminlte/') ?>dist/js/demo.js"></script>

<?php if (isset($data_table)): ?>
  <script src="<?= base_url('assets/adminlte/') ?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('assets/adminlte/') ?>bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <?php $this->load->view('_layout/backend/adminlte/footer/data-table/data-table')  ?>
<?php endif; ?>

<script>
$(document).ready(function () {
  $('.sidebar-menu').tree();

  <?php if ($this->input->get('form')!=null && isset($modal_crud)): ?>
    $("#tambah").modal('show');
  <?php endif; ?>
  <?php if ($this->input->get('edit')!=null && isset($modal_crud)): ?>
    $("#edit<?= $this->input->get('edit')  ?>").modal('show');
  <?php endif; ?>

})
</script>
