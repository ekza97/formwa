<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php if(user(__session('iduser'))->type=="super_user"):?>
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Member</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>News</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Reports</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Online Users</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>
<section class="section">
    <div class="section-header">
        <h1>Data Anda</h1>
    </div>

    <div class="section-body">
        <h2 class="section-title"><a href="<?=base_url('l/').user(__session('iduser'))->link;?>"
                target="_blank"><?=base_url('l/').user(__session('iduser'))->link;?></a><span
                class="btn btn-sm btn-secondary copy ml-3">Copy</span>
        </h2>
        <p class="section-lead">Diatas merupakan alamat form order anda</p>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4>Input Text</h4>
                    </div> -->
                    <div class="card-body">
                        <form action="<?=base_url('dashboard/update');?>" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="hidden" name="id" value="<?=__session('iduser');?>">
                                        <input type="text" class="form-control" name="fullname"
                                            value="<?=user(__session('iduser'))->fullname;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-envelope"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control phone-number" name="email"
                                                value="<?=user(__session('iduser'))->email;?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Whatsapp</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fab fa-whatsapp"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control phone-number" name="contact"
                                                value="<?=user(__session('iduser'))->contact;?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success float-right"><i class="fas fa-save"></i> Ubah
                                Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>