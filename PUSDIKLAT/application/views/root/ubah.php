<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Edit Data Surat Mahasiswa
				</div>
				<div class="card-body">
					<form action="<?= base_url("root/ubahData"); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">

						<div class="form-group">
							<label for="nama">Nama Mahasiswa Pengaju Surat</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
						</div>
						<div class="form-group">
							<label for="no_telp">Nomor Telepon/WhatsApp</label>
							<input type="number" name="no_telp" class="form-control" id="no_telp" value="<?= $mahasiswa['no_telp']; ?>">
						</div>
						<div class="form-group">
							<label for="unit">Unit Kerja</label>
							<select class="form-select" name="unit" id="unit">
								<?php foreach ($unit as $unit) : ?>
									<?php if ($unit == $mahasiswa['unit']) : ?>
										<option value="<?= $unit; ?>" selected><?= $unit; ?></option>
									<?php else : ?>
										<option value="<?= $unit; ?>"><?= $unit; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group">
							<label for="no_surat_balasan">Nomor Surat Balasan</label>
							<input type="text" name="no_surat_balasan" class="form-control" id="no_surat_balasan" value="<?= $mahasiswa['no_surat_balasan']; ?>">
						</div>
						<div class="form-group">
							<label for="jumlah_lampiran">Jumlah Lampiran</label>
							<input type="text" name="jumlah_lampiran" class="form-control" id="jumlah_lampiran" value="<?= $mahasiswa['jumlah_lampiran']; ?>">
						</div>
						<div class="form-group">
							<label for="hal_surat">Hal Surat</label>
							<input type="text" name="hal_surat" class="form-control" id="hal_surat" value="<?= $mahasiswa['hal_surat']; ?>">
						</div>
						<div class="form-group">
							<label for="tanggal_dibuat">Tanggal Surat Dibuat</label>
							<input type="text" name="tanggal_dibuat" class="form-control" id="tanggal_dibuat" value="<?= $mahasiswa['tanggal_dibuat']; ?>">
						</div>
						<div class="form-group">
							<label for="kepada">Kepada</label>
							<input type="text" name="kepada" class="form-control" id="kepada" value="<?= $mahasiswa['kepada']; ?>">
						</div>
						<div class="form-group">
							<label for="instansi">Instansi</label>
							<input type="text" name="instansi" class="form-control" id="instansi" value="<?= $mahasiswa['instansi']; ?>">
						</div>
						<div class="form-group">
							<label for="tujuan_daerah">Tujuan Daerah</label>
							<input type="text" name="tujuan_daerah" class="form-control" id="tujuan_daerah" value="<?= $mahasiswa['tujuan_daerah']; ?>">
						</div>
						<div class="form-group">
							<label for="no_surat">Nomor Surat Pemohon</label>
							<input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $mahasiswa['no_surat']; ?>">
						</div>
						<div class="form-group">
							<label for="tglsurat_pemohon">Tanggal Surat Pemohon</label>
							<input type="text" name="tglsurat_pemohon" class="form-control" id="tglsurat_pemohon" value="<?= $mahasiswa['tglsurat_pemohon']; ?>">
						</div>
						<div class="form-group">
							<label for="masa_magang">Masa Magang</label>
							<input type="text" name="masa_magang" class="form-control" id="masa_magang" value="<?= $mahasiswa['masa_magang']; ?>">
						</div>
						<div class="form-group">
							<label for="nama2">Nama Mahasiswa Anggota</label>
							<input type="text" name="nama2" class="form-control" id="nama2" value="<?= $mahasiswa['nama2']; ?>">
						</div>
						<div class="form-group">
							<label for="nim2">NIM Mahasiswa Anggota</label>
							<input type="number" name="nim2" class="form-control" id="nim2" value="<?= $mahasiswa['nim2']; ?>">
						</div>
						<div class="form-group">
							<label for="nama3">Nama Mahasiswa Anggota</label>
							<input type="text" name="nama3" class="form-control" id="nama3" value="<?= $mahasiswa['nama3']; ?>">
						</div>
						<div class="form-group">
							<label for="nim3">NIM Mahasiswa Anggota</label>
							<input type="number" name="nim3" class="form-control" id="nim3" value="<?= $mahasiswa['nim3']; ?>">
						</div>
						<button href="<?= base_url("root/index/"); ?>" class="btn btn-secondary mt-3">Kembali</button>
						<button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>