<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <h3>List Barang</h3>
                        <form action="<?php echo site_url() . 'pesanan/add_barang_di_pesanan/' . $pesanan['id_pesanan'] ?>" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Barang</label>
                                        <div class="row">
                                            <div class="col">
                                                <select name="id_barang" id="id_barang" class="form-control select2" onchange="checkStok()">
                                                    <option value="">Pilih Barang</option>
                                                    <?php foreach ($barang_list as $barang) : ?>
                                                        <option value="<?php echo $barang['id_barang']; ?>"><?php echo $barang['nama_barang']; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label class="bmd-label-floating">Jumlah Pesanan</label>
                                                <input type="text" name="jumlah_pesanan" value="<?php echo $this->input->post('jumlah_pesanan'); ?>" class="form-control" id="jumlah_pesanan" />
                                                <div id="jumlah_barang"></div>
                                            </div>
                                        </div>
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

        function checkStok() {
            var id_barang = document.getElementById("id_barang").value;
            if (id_barang == "") {
                document.getElementById("jumlah_barang").innerHTML = "";
                return;
            }
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("jumlah_barang").innerHTML = "Sisa Stok: " + this.responseText;
                }

            };
            xhr.open("GET", "<?php echo site_url('pesanan/cek_stok_barang/'); ?>" + id_barang, true);
            xhr.send();
        }
    </script>