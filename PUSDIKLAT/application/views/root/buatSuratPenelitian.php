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

						<div class="form-group">
							<label for="id_penelitian">ID Surat Penelitian</label>
							<input type="text" name="id_penelitian" class="form-control" id="id_penelitian" value="<?= $penelitian['id_penelitian']; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="no_surat">Nomor Surat</label>
							<input type="text" name="no_surat" class="form-control" id="no_surat" value="<?= $penelitian['no_surat']; ?>">
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
							<label for="tgl_dibuat">Tanggal Surat Dibuat</label>
							<input type="date" name="tgl_dibuat" class="form-control" id="tgl_dibuat" value="<?= $penelitian['tgl_dibuat']; ?>">
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

						<button href="<?= base_url("root/penelitian/"); ?>" class="btn btn-secondary mt-3">Kembali</button>
						<button type="submit" name="ubah" class="btn btn-primary mt-3 float-end">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>