<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
                        <!-- <div class="login-brand">
                            <img src="<?php echo base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle">
                        </div> -->

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Form Pemesanan via Whatsapp</h4>
                            </div>

                            <div class="card-body">
                                <form action="<?=base_url('link/order');?>" method="POST" class="needs-validation"
                                    novalidate="">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="fullname">Nama Lengkap</label>
                                            <input type="hidden" name="users_id" value="<?= $this->uri->segment(3);?>">
                                            <input id="fullname" type="text" class="form-control" name="fullname"
                                                required autofocus>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan nama lengkap dengan benar
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="contact">Nomor Whatsapp</label>
                                            <input id="contact" type="text" class="form-control" name="contact"
                                                required>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan nomor whatsapp dengan benar
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Tanggal Lahir</label>
                                            <input type="text" class="form-control datepicker" name="date_birth"
                                                required>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan tanggal lahir dengan benar
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email" required>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan email dengan benar
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label>Daerah</label>
                                            <textarea name="area" class="form-control" cols="30" rows="10"
                                                required></textarea>
                                            <div class="invalid-feedback">
                                                Silahkan masukkan daerah dengan benar
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">
                                            <i class="fab fa-whatsapp"></i>
                                            Lanjutkan Pemesanan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; FormWa 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/popper.js"></script>
    <script src="<?= base_url(); ?>assets/modules/tooltip.js"></script>
    <script src="<?= base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/stisla.js"></script>


    <script src="<?= base_url(); ?>assets/modules/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
</body>

</html>