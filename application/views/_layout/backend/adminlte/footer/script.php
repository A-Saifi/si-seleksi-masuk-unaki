<!-- jQuery 3 -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<?php if (isset($datepicker)): ?>
<!-- date-range-picker -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/moment/min/moment.min.js"></script>
<script src="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?= base_url('assets/adminlte/') ?>bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?= base_url('assets/adminlte/') ?>plugins/timepicker/bootstrap-timepicker.min.js"></script>
<?php endif; ?>
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

<?php if (isset($datepicker)): ?>
    <?php $this->load->view('_layout/backend/adminlte/footer/datepicker/datepicker')  ?>
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
