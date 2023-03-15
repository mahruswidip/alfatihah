<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'barang/edit/' . $barang['id_barang'] ?>" method="post"
                            enctype="multipart/form-data">
                            <h3>Data Barang</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kategori Barang</label>
                                        <input type="text" name="id_kategori"
                                            value="<?php echo ($this->input->post('id_kategori') ? $this->input->post('id_kategori') : $barang['id_kategori']); ?>"
                                            class="form-control" id="id_kategori" />
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Barang</label>
                                        <input type="text" name="nama_barang"
                                            value="<?php echo ($this->input->post('nama_barang')? $this->input->post('nama_barang') : $barang['nama_barang']); ?>"
                                            class="form-control" id="nama_barang" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Jumlah Barang</label>
                                        <input type="text" name="jumlah"
                                            value="<?php echo ($this->input->post('jumlah')? $this->input->post('jumlah') : $barang['jumlah']); ?>"
                                            class="form-control" id="jumlah" />
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Satuan</label>
                                        <input type="text" name="satuan"
                                            value="<?php echo ($this->input->post('satuan')? $this->input->post('satuan') : $barang['satuan']); ?>"
                                            class="form-control" id="satuan" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Keterangan</label>
                                        <input type="textarea" name="keterangan"
                                            value="<?php echo ($this->input->post('keterangan')? $this->input->post('keterangan') : $barang['keterangan']); ?>"
                                            class="form-control" id="keterangan" />
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