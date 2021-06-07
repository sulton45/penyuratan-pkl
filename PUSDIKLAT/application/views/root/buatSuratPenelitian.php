<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Buat Surat Penelitian Mahasiswa
				</div>
				<div class="card-body">
					<form action="<?= base_url("root/ubahDataSuratPenelitian"); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="penelitian" value="<?= $penelitian['id_penelitian']; ?>">

						<input type="hidden" name="id_penelitian" class="form-control" id="id_penelitian" value="<?= $penelitian['id_penelitian']; ?>" readonly>

						<div class="form-group">
							<label for="no_surat">Nomor Surat</label>
							<input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $penelitian['no_surat']; ?>">
						</div>
						<div class="form-group">
							<label for="hal_surat">Hal</label>
							<input type="text" name="hal_surat" class="form-control" id="hal_surat" value="<?= $penelitian['hal_surat']; ?>">
						</div>

						<div class="form-group">
							<label for="jumlah_lampiran">Jumlah Lampiran</label>
							<input type="text" name="jumlah_lampiran" class="form-control" id="jumlah_lampiran" value="<?= $penelitian['jumlah_lampiran']; ?>">
						</div>

						<div class="form-group">
							<label for="nama">Nama Mahasiswa Pengaju Surat</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $penelitian['nama']; ?>">
						</div>
						<div class="form-group">
							<label for="nim">NIM Mahasiswa Pengaju Surat</label>
							<input type="number" name="nim" class="form-control" id="nim" value="<?= $penelitian['nim']; ?>">
						</div>
						<div class="form-group">
							<label for="judul">Judul Penelitian</label>
							<input type="text" name="judul" class="form-control" id="judul" value="<?= $penelitian['judul']; ?>">
						</div>
						<div class="form-group">
							<label for="no_surat_penelitian">Nomor Surat Penelitian</label>
							<input type="text" name="no_surat_penelitian" class="form-control" id="no_surat_penelitian" value="<?= $penelitian['no_surat_penelitian']; ?>">
						</div>
						<div class="form-group">
							<label for="tujuan_penelitian">Tujuan Penelitian</label>
							<input type="text" name="tujuan_penelitian" class="form-control" id="tujuan_penelitian" value="<?= $penelitian['tujuan_penelitian']; ?>">
						</div>
						<div class="form-group">
							<label for="metode_ambil_data">Metode Pengambilan Data</label>
							<input type="text" name="metode_ambil_data" class="form-control" id="metode_ambil_data" value="<?= $penelitian['metode_ambil_data']; ?>">
						</div>
						<div class="form-group">
							<label for="tglsurat_pemohon">Tanggal Surat Pemohon</label>
							<input type="date" name="tglsurat_pemohon" class="form-control" id="tglsurat_pemohon" value="<?= $penelitian['tglsurat_pemohon']; ?>">
						</div>

						<div class="form-group">
							<label for="kepada">Kepada</label>
							<input type="text" name="kepada" class="form-control" id="kepada" value="<?= $penelitian['kepada']; ?>">
						</div>
						<div class="form-group">
							<label for="instansi">Instansi</label>
							<input type="text" name="instansi" class="form-control" id="instansi" value="<?= $penelitian['instansi']; ?>">
						</div>
						<div class="form-group">
							<label for="tujuan_daerah">Tujuan Daerah</label>
							<input type="text" name="tujuan_daerah" class="form-control" id="tujuan_daerah" value="<?= $penelitian['tujuan_daerah']; ?>">
						</div>


						<div class="form-group">
							<label for="tembusan1">Tembusan</label>
							<select class="form-select" name="tembusan1" id="tembusan1">
								<?php foreach ($tembusan1 as $tembusan1) : ?>
									<?php if ($tembusan1 == $penelitian['tembusan1']) : ?>
										<option value="<?= $tembusan1; ?>" selected><?= $tembusan1; ?></option>
									<?php else : ?>
										<option value="<?= $tembusan1; ?>"><?= $tembusan1; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<select class="form-select" name="tembusan2" id="tembusan2">
								<?php foreach ($tembusan2 as $tembusan2) : ?>
									<?php if ($tembusan2 == $penelitian['tembusan2']) : ?>
										<option value="<?= $tembusan2; ?>" selected><?= $tembusan2; ?></option>
									<?php else : ?>
										<option value="<?= $tembusan2; ?>"><?= $tembusan2; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<select class="form-select" name="tembusan3" id="tembusan3">
								<?php foreach ($tembusan3 as $tembusan3) : ?>
									<?php if ($tembusan3 == $penelitian['tembusan3']) : ?>
										<option value="<?= $tembusan3; ?>" selected><?= $tembusan3; ?></option>
									<?php else : ?>
										<option value="<?= $tembusan3; ?>"><?= $tembusan3; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<select class="form-select" name="tembusan4" id="tembusan4">
								<?php foreach ($tembusan4 as $tembusan4) : ?>
									<?php if ($tembusan4 == $penelitian['tembusan4']) : ?>
										<option value="<?= $tembusan4; ?>" selected><?= $tembusan4; ?></option>
									<?php else : ?>
										<option value="<?= $tembusan4; ?>"><?= $tembusan4; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<input type="text" name="tembusan5" class="form-control" id="tembusan5" value="<?= $penelitian['tembusan5']; ?>">
						</div>

						<a href="<?= base_url("root/penelitian/"); ?>" class="btn btn-secondary mt-3">Kembali</a>
						<button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>