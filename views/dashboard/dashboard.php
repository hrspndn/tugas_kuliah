<?php
include "views/layout/header.php"; ?>
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <br />
        <?php if ($_SESSION) : ?>
            <?php if ($_SESSION['id_role'] == 1) : ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Input Data Mahasiswa</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Masukan</a>
                                <div class="small text-white"><i class="fas fa-users"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Edit Data Mahasiswa</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Masukan</a>
                                <div class="small text-white"><i class="fas fa-users"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Data Mahasiswa</div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="#">Lihat</a>
                                <div class="small text-white"><i class="fas fa-users"></i></div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
            <div class="col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Data Mahasiswa</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="#">Lihat</a>
                        <div class="small text-white"><i class="fas fa-users"></i></div>
                    </div>
                </div>
            </div>
            <?php include "views/layout/footer.php"; ?>