<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Grup Keberangkatan</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'jamaah/add_keberangkatan' ?>" method="post" enctype="multipart/form-data">
                            <h3>Data Keberangkatan</h3>
                            <input type="text" name="id_jamaah" value="<?php echo ($this->input->post('id_jamaah') ? $this->input->post('id_jamaah') : $jamaah['id_jamaah']); ?>" class="form-control" id="id_jamaah" />
                            <form>
                                <div class="form-group">
                                    <label for="tanggal-keberangkatan">Tanggal Keberangkatan</label>
                                    <select id="tanggal-keberangkatan" name="tanggal-keberangkatan" class="form-control select2">
                                        <option value="" selected>Pilih tanggal_keberangkatan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="paket">Paket</label>
                                    <select id="paket" name="paket" class="form-control select2">
                                        <option value="" selected>Pilih paket</option>
                                    </select>
                                </div>
                            </form>

                            <!-- <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Tanggal Keberangkatan</label>
                                        <input type="date" name="tanggal_keberangkatan" value="<?php echo $this->input->post('tanggal_keberangkatan'); ?>" class="form-control" id="tanggal_keberangkatan" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="paket" class="form-control">
                                            <option value="">Pilih Paket</option>
                                            <?php
                                            $paket_values = array(
                                                'Ekonomi' => 'Ekonomi',
                                                'Hemat' => 'Hemat',
                                                'Standard' => 'Standard',
                                                'Semi VIP' => 'Semi VIP',
                                                'VIP' => 'VIP',
                                                'VVIP' => 'VVIP',
                                                'Private' => 'Private',
                                            );

                                            foreach ($paket_values as $value => $display_text) {
                                                $selected = ($value == $this->input->post('paket')) ? ' selected="selected"' : "";
                                                echo '<option value="' . $value . '" ' . $selected . '>' . $display_text . '</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Lama Hari</label>
                                        <input type="number" name="lama_hari" value="<?php echo $this->input->post('lama_hari'); ?>" class="form-control" id="lama_hari" />
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Hotel Mekkah</label>
                                        <input type="text" name="hotel_mekkah" value="<?php echo $this->input->post('hotel_mekkah'); ?>" class="form-control" id="hotel_mekkah" />
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Hotel Madinah</label>
                                        <input type="text" name="hotel_madinah" value="<?php echo $this->input->post('hotel_madinah'); ?>" class="form-control" id="hotel_madinah" />
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
                            </div> -->
                            <button type="submit" class="btn btn-success pull-right">Tambah</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $("#tanggal-keberangkatan").select2({
            ajax: {
                url: '<?= base_url() ?>jamaah/getdatatanggal',
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });

    // Kabupaten
    $("#tanggal-keberangkatan").change(function() {
        var id_prov = $("#tanggal-keberangkatan").val();
        $("#paket").select2({
            ajax: {
                url: '<?= base_url() ?>jamaah/getdatapaket/' + id_prov,
                type: "post",
                dataType: 'json',
                delay: 200,
                data: function(params) {
                    return {
                        searchTerm: params.term
                    };
                },
                processResults: function(response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
</script>