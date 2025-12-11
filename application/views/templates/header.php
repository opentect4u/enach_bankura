<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bankura ARDB-eNach</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/ti-icons/css/themify-icons.css">
  <!-- <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/select.dataTables.min.css"> -->
  <!-- End plugin css for this page -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/mdi/css/materialdesignicons.min.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/images/favicon.ico" />
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.all.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.1/dist/sweetalert2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom-style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<script>
  function triggerSweetAlert(title, msg, status){
    Swal.fire({
      title: title,
      text: msg,
      icon: status
    });
  }
</script>

<body>
    <div class="container-scroller">
        <?php $this->load->view('templates/topbar'); ?>
        <div class="container-fluid page-body-wrapper">
            <?php $this->load->view('templates/sidebar'); ?>
            <div class="main-panel">
                <div class="content-wrapper">
                  <div class="row" id="loader" style="display: none;">
                    <div class="col-md-12">
                        <div class="loading img-center"></div>
                    </div>
                  </div>
                  <div id="display-content">