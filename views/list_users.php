<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<section class="section">
    <div class="section-header">
        <h1>Data Pengguna</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?=base_url('dashboard');?>">Dashboard</a></div>
            <div class="breadcrumb-item">Pengguna</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <a href="#" class="btn btn-lg btn-icon icon-left btn-secondary"><i class="fas fa-user-plus"></i>
                            Secondary</a>
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>No WA</th>
                                        <th>Username</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n=1; foreach($users as $user): ?>
                                    <tr>
                                        <td><?= $n++; ?></td>
                                        <td><?= $user['fullname']; ?></td>
                                        <td><?= $user['email']; ?></td>
                                        <td><?= $user['contact']; ?></td>
                                        <td><?= $user['username']; ?></td>
                                        <td>
                                            <div
                                                class="badge <?=$user['type']=='member'?'badge-primary':'badge-success';?>">
                                                <?= ucwords($user['type']); ?></div>
                                        </td>
                                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>