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
                                    <button type="button" onclick="add_person()" class="btn btn-outline-success float-right" data-bs-toggle="tooltip" data-bs-title="Tambah Data"><i data-feather="plus"></i></button>
                                    <button type="button" onclick="reload_table()" class="btn btn-outline-primary float-right" data-bs-toggle="tooltip" data-bs-title="Refresh Data"><i data-feather="refresh-cw"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-hover display table-responsive" id="table_navbar"  cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Gender</th>
                                            <th>Address</th>
                                            <th>Date of Birth</th>
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

    <!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title">Person Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="id"/> 
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input name="firstName" placeholder="First Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input name="lastName" placeholder="Last Name" class="form-control" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Gender</label>
                            <div class="col-md-9">
                                <select name="gender" class="form-control">
                                    <option value="">--Select Gender--</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <textarea name="address" placeholder="Address" class="form-control"></textarea>
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Date of Birth</label>
                            <div class="col-md-9">
                                <input name="dob" placeholder="yyyy-mm-dd" class="form-control datepicker" type="text">
                                <span class="help-block"></span>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->