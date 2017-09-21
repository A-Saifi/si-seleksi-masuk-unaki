$(document).ready(function() {

  $('INPUT[type="file"]').change(function () {
      var ext = this.value.match(/\.(.+)$/)[1];
      switch (ext.toLowerCase()) {
          case 'jpg':
          case 'jpeg':
          case 'png':
          case 'gif':
              $('#gambar_soal').attr('disabled', false);
              break;
          default:
              alert('File dengan ekstensi "'+ext+'" tidak diperbolehkan');
              this.value = '';
      }
  });


});
