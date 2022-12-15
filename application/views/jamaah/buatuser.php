<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Buat Akun Untuk Jamaah</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'jamaah/buatuser/' . $jamaah['id_jamaah'] ?>" method="post" enctype="multipart/form-data">
                            <?php if ($this->session->flashdata('fk_id_jamaah')) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong style="font-weight: bold;">Maaf !</strong> <?php echo $this->session->userdata('fk_id_jamaah') ?>
                                    <button type="button" class="close my-2" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <h3>Data Jamaah</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">ID Jamaah</label>
                                        <input type="text" readonly name="fk_id_jamaah" value="<?php echo ($this->input->post('fk_id_jamaah') ? $this->input->post('id_jamaah') : $jamaah['id_jamaah']); ?>" class="form-control d-block" id="fk_id_jamaah" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Jamaah</label>
                                        <input type="text" readonly name="user_name" value="<?php echo ($this->input->post('user_name') ? $this->input->post('user_name') : $jamaah['nama_jamaah']); ?>" class="form-control" id="user_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nomor KTP</label>
                                        <input type="text" readonly name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $jamaah['nik']); ?>" class="form-control" id="nik" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Password</label>
                                        <input type="text" readonly name="user_password" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $jamaah['nik']); ?>" class="form-control" id="user_password" />
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
</div>