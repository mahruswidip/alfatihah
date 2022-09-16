<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Tambah Jamaah</h4>
					</div>
					<div class="card-body">
						<form action="<?php echo site_url() . 'jamaah/add' ?>" method="post" enctype="multipart/form-data">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">NIK</label>
										<input type="text" name="nik" value="<?php echo $this->input->post('nik'); ?>" class="form-control" id="nik" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Nama Jamaah</label>
										<input type="text" name="nama_jamaah" value="<?php echo $this->input->post('nama_jamaah'); ?>" class="form-control" id="nama_jamaah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Nomor Telepon</label>
										<input type="text" name="nomor_telepon" value="<?php echo $this->input->post('nomor_telepon'); ?>" class="form-control" id="nomor_telepon" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="jenis_kelamin" class="form-control">
											<option value="">Pilih Jenis Kelamin</option>
											<?php
											$jenis_kelamin_values = array(
												'Laki-Laki' => 'Laki-Laki',
												'Perempuan' => 'Perempuan',
											);

											foreach ($jenis_kelamin_values as $value => $display_text) {
												$selected = ($value == $this->input->post('jenis_kelamin')) ? ' selected="selected"' : "";
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
										<label class="bmd-label-floating">Grup Keberangkatan</label>
										<input type="text" name="grup_keberangkatan" value="<?php echo $this->input->post('grup_keberangkatan'); ?>" class="form-control" id="grup_keberangkatan" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating">Paket</label>
										<input type="text" name="paket" value="<?php echo $this->input->post('paket'); ?>" class="form-control" id="paket" />
									</div>
								</div>
							</div>
							<br>
							<?php
							if ($this->session->flashdata('error') != '') {
								echo '<div class="alert alert-danger" role="alert">';
								echo $this->session->flashdata('error');
								echo '</div>';
							}
							?>
							<div class="row">
								<div class="col">
									<label class="bmd-label-floating">Foto Jamaah</label>
									<br>
									<input type="file" name="jamaah_img" required>
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