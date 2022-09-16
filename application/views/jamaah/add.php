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
							<h3>Data Jamaah</h3>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating text-danger">NIK</label>
										<input type="text" name="nik" value="<?php echo $this->input->post('nik'); ?>" class="form-control" id="nik" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating text-danger">Nama Jamaah</label>
										<input type="text" name="nama_jamaah" value="<?php echo $this->input->post('nama_jamaah'); ?>" class="form-control" id="nama_jamaah" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label class="bmd-label-floating text-danger">Nomor Telepon</label>
										<input type="text" name="nomor_telepon" value="<?php echo $this->input->post('nomor_telepon'); ?>" class="form-control" id="nomor_telepon" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<select name="jenis_kelamin" class="form-control  text-danger">
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
									<label class="bmd-label-floating text-danger">Foto Jamaah</label>
									<br>
									<input type="file" name="jamaah_img" required>
									<br>
									<br>
									<div class="form-group">
										<label class="bmd-label-floating">Nomor Paspor</label>
										<input type="text" name="nomor_paspor" value="<?php echo $this->input->post('nomor_paspor'); ?>" class="form-control" id="nomor_paspor" />
									</div>
								</div>
								<div class="col">
									<div class="form-group">
										<div class="form-group">
											<label class="bmd-label-floating">Alamat</label>
											<textarea name="alamat" rows="6" class="form-control" id="alamat"><?php echo $this->input->post('alamat'); ?></textarea>
										</div>
									</div>
								</div>
							</div>
							<br>
							<hr>
							<h3>Data Paket</h3>
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

							<button type="submit" class="btn btn-success pull-right">Tambah</button>
							<div class="clearfix"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>