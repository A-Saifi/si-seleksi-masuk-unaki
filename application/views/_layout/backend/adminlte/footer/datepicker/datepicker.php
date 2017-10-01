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
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePicker24Hour: true,
      locale: {
            format: 'MM/DD/YYYY H:mm'
        }
    })
  })
</script>
