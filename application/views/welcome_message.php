<!-- import component head -->
<?php $this->load->view('component/_head') ?>
<!-- end import component head -->
    <div id="app">
    <!-- Import component Sidebar -->
        <?php $this->load->view('component/_sidebar') ?>
    <!-- End import component Sidebar -->
    <!-- Main Body -->
        <div id="main" class='layout-navbar'>
            <!-- Import component Navbar -->
                <?php $this->load->view('component/_navbar') ?>
            <!-- End import component Navbar -->

            <!-- Main Element -->
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row mb-3">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Tabel Data Tender</h3>
                                <!-- <p class="text-subtitle text-muted">Powerful interactive tables with datatables (jQuery required)</p> -->
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Tabel Data Tender</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Basic Tables start -->
                    <section class="section">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="button" class="btn btn-outline-success float-right" data-bs-toggle="tooltip" data-bs-title="Tambah Data"><i data-feather="plus"></i></button>
                                    <button type="button" class="btn btn-outline-primary float-right" data-bs-toggle="tooltip" data-bs-title="Refresh Data"><i data-feather="refresh-cw"></i></button>
                                </div>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table table-hover " id="table_tender">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Kode RUP</th>
                                            <th>Kode Tender</th>
                                            <th>Nama Tender</th>
                                            <th>Satuan Kerja</th>
                                            <th>Jenis Pengadaan</th>
                                            <th>Metode Pengadaan</th>
                                            <th>Nilai Pagu</th>
                                            <th>Nilai HPS</th>
                                            <th>Tanggal</th>
                                            <th>Tahapan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- Basic Tables end -->
                </div>
            <!-- Main Element -->
    
            <!-- Import component Footer -->
            <?php $this->load->view('component/_footer') ?>
            <!-- End import component Footer -->
            </div>
        </div>
    <!-- End Main Body -->
    </div>
    <!-- Import component Jquery -->
    <?php $this->load->view('component/_jquery') ?>
    <!-- End import component Jquery -->
    <!-- Import component AJAX -->
    <?php $this->load->view('component/ajax') ?>
    <!-- End import component AJAX -->