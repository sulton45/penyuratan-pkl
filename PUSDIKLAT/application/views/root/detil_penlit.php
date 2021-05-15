<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h5>Nama</h5>
					<p class="card-text"><?= $penelitian['nama']; ?></p>
					<h5>Instansi</h5>
					<p class="card-text"><?= $penelitian['instansi']; ?></p>
					<h5>Program Studi</h5>
					<p class="card-text"><?= $penelitian['prodi']; ?></p>
					<h5>Kontak</h5>
					<p class="card-text"><?= $penelitian['no_telp']; ?></p>
					<p class="card-text"><?= $penelitian['email']; ?></p>
					<h5>Dosen</h5>
					<p class="card-text"><?= $penelitian['nama_dosen']; ?></p>
					<h5>Kontak Dosen</h5>
					<p class="card-text"><?= $penelitian['no_telp_dosen']; ?></p>
					<p class="card-text"><?= $penelitian['email_dosen']; ?></p>
					<h5>Penelitian</h5>
					<p class="card-text"><?= $penelitian['judul']; ?></p>
					<p class="card-text"><?= $penelitian['abstrak']; ?></p>
					<h5>Surat Permohonan Penelitian</h5>
					<a href="<?= base_url("root/getSuratPenelitian/") . $penelitian['id_penelitian']; ?>"><?= $penelitian['surat_penelitian']; ?></a>
					<h5>Kartu Hasil Studi</h5>
					<a href="<?= base_url("root/getKhsPenelitian/") . $penelitian['id_penelitian']; ?>"><?= $penelitian['khs']; ?></a>
					<p></p>
					<a href="<?= base_url("root/penelitian/"); ?>" class="btn btn-primary float-end">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>