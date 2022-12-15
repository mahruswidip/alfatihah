<!--Modal Form Login with Avatar Demo-->
<link rel="stylesheet" type="text/css" href="<?php echo site_url('assets/'); ?>datatables/lib/css/dataTables.bootstrap.min.css ?>" />
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered cascading-modal modal-avatar modal-sm" role="document">
        <!--Content-->
        <div class="modal-content" style="background-color: #d4edda; color: #155724;">

            <div class="modal-body text-center mb-1">
                <h3 style="font-weight: bold;">
                    <?php
                    echo $this->session->flashdata('success');
                    ?>
                </h3>
            </div>

        </div>
        <!--/.Content-->
    </div>
</div>

<div class="alert alert-warning alert-dismissible fade show" style="display : <?php echo $this->session->userdata('alert') != '' ? 'block' : 'none'; ?>" role="alert">
    <strong>Anda tidak memiliki Izin</strong> <br> Masuk sebagai Kantor Pusat atau Admin untuk melakukan perintah :)
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <div class="row justify-content-between">
                    <div class="col-md-9">
                        <h3 class="card-title ">Data Jamaah</h3>
                    </div>
                    <div class="col-auto">
                        <a href="<?php echo site_url('jamaah/bukatambah'); ?>" class="btn btn-success"><span class="fa fa-plus"></span></a>
                        <?php
                        if ($this->session->userdata('user_level') == '1') {
                            echo '<a href="' . site_url('jamaah/export') . '" class="btn btn-info"><span class="fa fa-download"></span>&nbsp; Export</a>';
                        } else {
                            echo '';
                        } ?>

                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table" id="tablejamaah">
                        <thead>
                            <tr>
                                <th>Nomor Paspor</th>
                                <th>Foto</th>
                                <th>Nama Jamaah</th>
                                <th>Nomor HP</th>
                                <th class="col-2">Alamat</th>
                                <th>Input Oleh</th>
                                <th>Updated At</th>
                                <th>QR Code</th>
                                <th>Aksi</th>
                                <th>Buat User</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.10.16/b-1.5.1/b-html5-1.5.1/datatables.min.css" />
<script src="<?php echo site_url('assets/'); ?>js/core/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('assets/'); ?>datatables/datatables.min.js"></script>
<script type="text/javascript" src="<?php echo site_url('assets/'); ?>datatables/lib/js/dataTables.bootstrap.min.js"></script>
<script>
    $(document).ready(function() {

        var user_level = "<?php echo $this->session->userdata('user_level'); ?>";

        $('#tablejamaah').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [
                [7, 'asc']
            ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax": {
                "url": "<?php echo site_url('jamaah/view') ?>", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [
                [5, 10, 50],
                [5, 10, 50]
            ], // Combobox Limit
            "columns": [{
                    "data": "nomor_paspor"
                },
                {
                    "render": function(data, type, row) { // Tampilkan jenis kelamin
                        return '<img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/' ?>' + row.jamaah_img + '">';
                    }
                },
                {
                    "render": function(data, type, row) { // Tampilkan jenis kelamin
                        return '<a href="<?php echo base_url() . 'jamaah/detail/' ?>' + row.id_jamaah + '">' + row.nama_jamaah + '</a>';
                    }
                },
                {
                    "data": "nomor_telepon"
                },
                {
                    "data": "alamat"
                },
                {
                    "render": function(data, type, row) { // Tampilkan jenis kelamin
                        var html = ""

                        if (row.created_by == 1) {
                            html = 'Admin Super'
                        } else if (row.created_by == 2) {
                            html = 'Kantor Cabang Malang'
                        } else if (row.created_by == 3) {
                            html = 'Kantor Cabang Probolinggo'
                        } else if (row.created_by == 4) {
                            html = 'Kantor Cabang Situbondo'
                        } else if (row.created_by == 5) {
                            html = 'Kantor Cabang Jember'
                        } else if (row.created_by == 6) {
                            html = 'Kantor Cabang Jakarta'
                        } else {
                            html = 'Kantor Cabang Pasuruan'
                        }
                        return html; // Tampilkan jenis kelaminnya
                    }
                },
                {
                    "data": "updated_at"
                },
                {
                    "render": function(data, type, row) { // Tampilkan jenis kelamin
                        var qr = ""

                        if (row.qr_code_benar == "") {
                            qr = '<a href="<?php echo base_url() . 'jamaah/updateqr/' ?>' + row.id_jamaah + '"' + 'class="btn btn-dark"><span class="fa fa-qrcode"></span></a>'
                        } else {
                            qr = '<img class="img-fluid" style="max-width: 100px; max-height: 100px;" src="<?php echo base_url() . 'assets/images/qr_uuid/' ?>' + row.qr_code_benar + '">'
                        }
                        return qr;
                    }
                },
                {
                    "render": function(data, type, row) {
                        if (user_level != "1") {
                            return '<a href="<?php echo base_url() . 'jamaah/edit/' ?>' + row.id_jamaah + '"' + 'class="btn btn-info"><span class="fa fa-edit"></span></a>' + '</a>' + '<a href="<?php echo base_url() . 'jamaah/remove/' ?>' + row.id_jamaah + '"' + 'class="btn btn-danger"><span class="fa fa-trash"></span></a>' + '</a>'

                        } else {
                            return '<a href="<?php echo base_url() . 'jamaah/cetak_id_card/' ?>' + row.id_jamaah + '"' + 'class="btn btn-warning"><span class="fa fa-print"></span></a>' + '</a>' + '<a href="<?php echo base_url() . 'jamaah/edit/' ?>' + row.id_jamaah + '"' + 'class="btn btn-info"><span class="fa fa-edit"></span></a>' + '</a>' + '<a href="<?php echo base_url() . 'jamaah/remove/' ?>' + row.id_jamaah + '"' + 'class="btn btn-danger"><span class="fa fa-trash"></span></a>' + '</a>';
                        }
                    }
                },
                {
                    "render": function(data, type, row) {
                        if (row.is_user == "0") {
                            user = '<a href="<?php echo base_url() . 'jamaah/buatuser/' ?>' + row.id_jamaah + '"' + 'class="btn btn-primary"><span class="fa fa-user"></span></a>' + '</a>';
                        } else {
                            user = '';
                        }
                        return user;
                    }
                }
            ],
        });
    });
</script>