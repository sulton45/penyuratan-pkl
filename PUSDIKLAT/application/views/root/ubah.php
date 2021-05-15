<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Edit Data Mahasiswa
				</div>
				<div class="card-body">
					<form action="<?= base_url("root/ubahData"); ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="nim" value="<?= $mahasiswa['nim']; ?>">

						<div class="form-group">
							<label for="nama">Nama Mahasiswa</label>
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
							<label for="tanggal_masuk">Tanggal Masuk</label>
							<input type="date" name="tanggal_masuk" class="form-control" id="tanggal_masuk" value="<?= $mahasiswa['tanggal_masuk']; ?>">
						</div>
						<div class="form-group">
							<label for="tanggal_keluar">Tanggal Keluar</label>
							<input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" value="<?= $mahasiswa['tanggal_keluar']; ?>">
						</div>
						<a href="<?= base_url("root/index/"); ?>" class="btn btn-secondary mt-3">Kembali</a>
						<button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
