<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="section">
    <div class="section-header">
        <h1>Data Pesanan</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?=base_url('dashboard');?>">Dashboard</a></div>
            <div class="breadcrumb-item">Pesanan</div>
        </div>
    </div>

    <div class="section-body">
        <h2 class="section-title">Informasi</h2>
        <p class="section-lead">
            Data-data berikut ini merupakan data pesanan anda yang tercatat melalui sistem kami.
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4>Basic DataTables</h4>
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th width="20">No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Tgl Lahir</th>
                                        <th>Email</th>
                                        <th>No. Whatsapp</th>
                                        <th>Provinsi</th>
                                        <th>Kota/Kabupaten</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>Alamat</th>
                                        <th>Kode Pos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n=1; foreach($orders as $order):?>
                                    <tr>
                                        <td><?= $n++; ?></td>
                                        <td><?= $order['fullname']; ?></td>
                                        <td><?= $order['date_birth']; ?></td>
                                        <td><?= $order['email']; ?></td>
                                        <td><?= $order['contact']; ?></td>
                                        <td><?= $order['province']; ?></td>
                                        <td><?= $order['district']; ?></td>
                                        <td><?= $order['sub_district']; ?></td>
                                        <td><?= $order['village']; ?></td>
                                        <td><?= $order['address']; ?></td>
                                        <td><?= $order['postal_code']; ?></td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>