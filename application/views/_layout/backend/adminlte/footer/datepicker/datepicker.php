<script>
  $(function () {
    $('#datepicker').datepicker({
      startDate: 'today',
      autoclose: true
    })
    $('.timepicker').timepicker({
      defaultTime: 'current',
      showMeridian: false,
      showSeconds: true,
      showInputs: false
    })
  })
</script>
