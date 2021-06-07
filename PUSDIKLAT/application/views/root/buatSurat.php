<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Edit Data Surat Mahasiswa
				</div>
				<div class="card-body">
					<form action="<?= base_url("root/ubahDataSurat"); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">

						<div class="form-group">
							<label for="nama">Nama Mahasiswa Pengaju Surat</label>
							<input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
						</div>
						<div class="form-group">
							<label for="no_surat_balasan">Nomor Surat Balasan</label>
							<input type="text" name="no_surat_balasan" class="form-control" id="no_surat_balasan" value="<?= $mahasiswa['no_surat_balasan']; ?>">
						</div>
						<div class="form-group">
							<label for="hal_surat">Hal</label>
							<input type="text" name="hal_surat" class="form-control" id="hal_surat" value="<?= $mahasiswa['hal_surat']; ?>">
						</div>
						<div class="form-group">
							<label for="jumlah_lampiran">Jumlah Lampiran</label>
							<input type="text" name="jumlah_lampiran" class="form-control" id="jumlah_lampiran" value="<?= $mahasiswa['jumlah_lampiran']; ?>">
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
							<input type="date" name="tglsurat_pemohon" class="form-control" id="tglsurat_pemohon" value="<?= $mahasiswa['tglsurat_pemohon']; ?>">
						</div>
						<div class="form-group">
							<label for="tanggal_masuk">Tanggal Masuk</label>
							<input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" value="<?= $mahasiswa['tanggal_masuk']; ?>">
						</div>
						<div class="form-group">
							<label for="tanggal_keluar">Tanggal Keluar</label>
							<input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" value="<?= $mahasiswa['tanggal_keluar']; ?>">
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

						<div class="form-group">
							<label for="tembusan1">Tembusan</label>
							<select class="form-select" name="tembusan1" id="tembusan1">
								<?php foreach ($tembusan1 as $tembusan1) : ?>
									<?php if ($tembusan1 == $mahasiswa['tembusan1']) : ?>
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
									<?php if ($tembusan2 == $mahasiswa['tembusan2']) : ?>
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
									<?php if ($tembusan3 == $mahasiswa['tembusan3']) : ?>
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
									<?php if ($tembusan4 == $mahasiswa['tembusan4']) : ?>
										<option value="<?= $tembusan4; ?>" selected><?= $tembusan4; ?></option>
									<?php else : ?>
										<option value="<?= $tembusan4; ?>"><?= $tembusan4; ?></option>
									<?php endif; ?>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group">
							<input type="text" name="tembusan5" class="form-control" id="tembusan5" value="<?= $mahasiswa['tembusan5']; ?>">
						</div>

						<a href="<?= base_url("root/index/"); ?>" class="btn btn-secondary mt-3">Kembali</a>
						<button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>