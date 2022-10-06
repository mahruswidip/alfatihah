<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header card-header-primary">
						<h4 class="card-title">Edit Jamaah</h4>
					</div>
					<div class="card-body">
						<?php echo form_open('jamaah/edit/' . $jamaah['id_jamaah']); ?>
						<h3>Data Jamaah</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating text-danger">NIK</label>
									<input type="text" name="nik" value="<?php echo ($this->input->post('nik') ? $this->input->post('nik') : $jamaah['nik']); ?>" class="form-control" id="nik" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating text-danger">Nama Jamaah</label>
									<input type="text" name="nama_jamaah" value="<?php echo ($this->input->post('nama_jamaah') ? $this->input->post('nama_jamaah') : $jamaah['nama_jamaah']); ?>" class="form-control" id="nama_jamaah" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating text-danger">Nomor Telepon</label>
									<input type="text" name="nomor_telepon" value="<?php echo ($this->input->post('nomor_telepon') ? $this->input->post('nomor_telepon') : $jamaah['nomor_telepon']); ?>" class="form-control" id="nomor_telepon" />
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
											$selected = ($value == $jamaah['jenis_kelamin']) ? ' selected="selected"' : "";

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
								<input type="file" name="jamaah_img">
								<br>
								<br>
								<div class="form-group">
									<label class="bmd-label-floating">Nomor Paspor</label>
									<input type="text" name="nomor_paspor" value="<?php echo ($this->input->post('nomor_paspor') ? $this->input->post('nomor_paspor') : $jamaah['nomor_paspor']); ?>" class="form-control" id="nomor_paspor" />
								</div>
							</div>
							<div class="col">
								<div class="form-group">
									<div class="form-group">
										<label class="bmd-label-floating">Alamat</label>
										<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $jamaah['alamat']); ?>" class="form-control" id="alamat" />
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
									<input type="date" name="grup_keberangkatan" value="<?php echo ($this->input->post('grup_keberangkatan') ? $this->input->post('grup_keberangkatan') : $jamaah['grup_keberangkatan']); ?>" class="form-control" id="grup_keberangkatan" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Paket</label>
									<input type="text" name="paket" value="<?php echo ($this->input->post('paket') ? $this->input->post('paket') : $jamaah['paket']); ?>" class="form-control" id="paket" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Lama Hari</label>
									<input type="text" name="lama_hari" value="<?php echo ($this->input->post('lama_hari') ? $this->input->post('lama_hari') : $jamaah['lama_hari']); ?>" class="form-control" id="lama_hari" />
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Hotel Madinah</label>
									<input type="text" name="hotel_madinah" value="<?php echo ($this->input->post('hotel_madinah') ? $this->input->post('hotel_madinah') : $jamaah['hotel_madinah']); ?>" class="form-control" id="hotel_madinah" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="bmd-label-floating">Hotel Mekkah</label>
									<input type="text" name="hotel_mekkah" value="<?php echo ($this->input->post('hotel_mekkah') ? $this->input->post('hotel_mekkah') : $jamaah['hotel_mekkah']); ?>" class="form-control" id="hotel_mekkah" />
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-info pull-right">Simpan</button>
						<div class="clearfix"></div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>