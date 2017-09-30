<script type="text/javascript">
  $(function () {
    $('#dt1').DataTable()
    $('#dt2').DataTable()
    $('#dt3').DataTable()
    $('#dt4').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
