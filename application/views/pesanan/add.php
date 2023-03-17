<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <h3>Data Pesanan</h3>
                        <form action="<?php echo site_url() . 'pesanan/add' ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nomor Pesanan</label>
                                        <input type="text" name="nomor_pesanan" value="<?php echo $this->input->post('nomor_pesanan'); ?>" class="form-control" id="nomor_pesanan" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Pelanggan</label>
                                        <input type="text" name="nama_pelanggan" value="<?php echo $this->input->post('nama_pelanggan'); ?>" class="form-control" id="nama_pelanggan" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Alamat</label>
                                        <input type="text" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tanggal Pesanan</label>
                                        <input type="date" name="tanggal_pesanan" value="<?php echo $this->input->post('tanggal_pesanan'); ?>" class="form-control" id="tanggal_pesanan" />
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>