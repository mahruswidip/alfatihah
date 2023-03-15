<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Tambah Barang</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url() . 'barang/add' ?>" method="post"
                            enctype="multipart/form-data">
                            <h3>Data Barang</h3>
                            <!-- <?php var_dump($kategori_list)?> -->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Kategori Barang</label>
                                        <select name="id_kategori" id="kategori" class="form-control select2">
                                            <option value="">Select Kategori</option>
                                            <?php foreach($kategori_list as $kategori): ?>
                                            <option value="<?php echo $kategori['id_kategori']; ?>"
                                                <?php echo set_select('id_kategori', $kategori['id_kategori']); ?>>
                                                <?php echo $kategori['nama_kategori']; ?>
                                            </option>
                                            <?php endforeach; ?>
                                        </select>
                                        <div id="add-kategori-btn" style="display: none;">
                                            <button class="btn btn-primary btn-sm" onclick="addKategori()">
                                                <i class="fas fa-plus"></i> Add Kategori
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Nama Barang</label>
                                        <input type="text" name="nama_barang"
                                            value="<?php echo $this->input->post('nama_barang'); ?>"
                                            class="form-control" id="nama_barang" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Jumlah Barang</label>
                                        <input type="text" name="jumlah"
                                            value="<?php echo $this->input->post('jumlah'); ?>" class="form-control"
                                            id="jumlah" />
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Satuan</label>
                                        <input type="text" name="satuan"
                                            value="<?php echo $this->input->post('satuan'); ?>" class="form-control"
                                            id="satuan" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Keterangan</label>
                                        <input type="textarea" name="keterangan"
                                            value="<?php echo $this->input->post('keterangan'); ?>" class="form-control"
                                            id="keterangan" />
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

<script type="text/javascript">
$('.select2').select2({
    tags: true,
    createTag: function(params) {
        var term = $.trim(params.term);
        if (term === '') {
            return null;
        }
        return {
            id: term,
            text: term,
            newOption: true
        }
    },
    templateResult: function(data, container) {
        if (data.newOption) {
            $('#add-kategori-btn').show();
            return $('<div class="add-option">' +
                '<button class="btn btn-primary btn-sm">' +
                '<i class="fas fa-plus"></i> Add "' + data.text + '"' +
                '</button>' +
                '</div>');
        } else {
            return $('<div>' + data.text + '</div>');
        }
    },
    templateSelection: function(data, container) {
        if (data.newOption) {
            return $('<span>' + data.text + '</span>');
        } else {
            return $('<span>' + data.text + '</span>');
        }
    }
}).on('select2:open', function(e) {
    if ($('.select2-results__option--message').length > 0) {
        var search_term = $('.select2-search__field').val();
        $('.select2-search__field').prop('disabled', true);
        $('.select2-results__option--message').html('<button class="btn btn-primary btn-sm">' +
            '<i class="fas fa-plus"></i> Add "' + search_term + '"' +
            '</button>').on('click', function() {
            $('.select2-search__field').prop('disabled', false).focus();
            $('.select2-results__option--message').html('');
            var newOption = new Option(search_term, search_term, true, true);
            $('.select2').append(newOption).trigger('change');
            $('#add-kategori-btn').show();
        });
    }
});

function addKategori() {
    var kategori = $('.select2-search__field').val();
    $.ajax({
        url: "<?php echo base_url('barang/add_kategori'); ?>",
        type: "POST",
        data: {
            kategori: kategori,
        },
        success: function(data) {
            var newOption = new Option(kategori, data, true, true);
            $('.select2').append(newOption).trigger('change');
            $('#add-kategori-btn').hide();
        },
        error: function() {
            alert("Error occurred while adding category");
        }
    });
}
</script>