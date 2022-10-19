<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Grup Keberangkatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'keberangkatan/edit/' . $keberangkatan['id_keberangkatan'] ?>" method="post" enctype="multipart/form-data">
                            <h3>Data Keberangkatan</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tanggal Keberangkatan</label>
                                        <input type="date" name="tanggal_keberangkatan" value="<?php echo ($this->input->post('tanggal_keberangkatan') ? $this->input->post('tanggal_keberangkatan') : $keberangkatan['tanggal_keberangkatan']); ?>" class="form-control" id="tanggal_keberangkatan" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="is_aktif" class="form-control">
                                            <option value="">Aktifkan / Non Aktifkan</option>
                                            <?php
                                            $is_aktif_values = array(
                                                '0' => 'Non Aktif',
                                                '1' => 'Aktif',
                                            );

                                            foreach ($is_aktif_values as $value => $display_text) {
                                                $selected = ($value == $this->input->post('is_aktif')) ? ' selected="selected"' : "";
                                                echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tanggal Manasik</label>
                                        <input type="date" name="tanggal_manasik"  value="<?php echo ($this->input->post('tanggal_manasik') ? $this->input->post('tanggal_manasik') : $keberangkatan['tanggal_manasik']); ?>" class="form-control" id="tanggal_manasik" />
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