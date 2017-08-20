<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>
        <?php if (isset($title)) {
          echo $title;
        }else {
          echo "New Page";
        } ?>
      </title>



      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

      <?php $this->load->view('_layout/frontend/adminlte/header/link')  ?>

  </head>

  <body class="hold-transition skin-blue layout-top-nav layout-boxed">
    <div class="wrapper">

      <?php $this->load->view('_layout/frontend/adminlte/header/nav')  ?>

      <div class="content-wrapper">
