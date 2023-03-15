<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Kategori</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'kategori/edit/' . $kategori['id_kategori'] ?>"
                            method="post" enctype="multipart/form-data">
                            <h3>Data kategori</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kategori</label>
                                        <input type="text" name="nama_kategori"
                                            value="<?php echo ($this->input->post('nama_kategori') ? $this->input->post('nama_kategori') : $nama_kategori['nama_kategori']); ?>"
                                            class="form-control" id="nama_kategori" />
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info pull-right">Simpan</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>