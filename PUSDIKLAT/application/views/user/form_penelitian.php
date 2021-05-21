<div class="container-fluid">
	<div class="card mt-3">
		<div class="card-header text-center"><h4><strong>Form Pendaftaran Penelitian</strong></h4>
		</div>
		<div class="card-body">
			<ol class="list-unstyled">
				Syarat dan Ketentuan Pendaftaran Penelitian:
				<ol>
					<li>Merupakan mahasiswa aktif tingkat akhir.</li>
					<li>Memiliki proposal penelitian.</li>
					<li>Memiliki surat izin penelitian dari universitas.</li>
					<li>Mengisi form pendaftaran dengan benar.</li>
					<li>Mengunggah dokumen yang dibutuhkan.</li>
				</ol>
			</ol>
			<div class="dropdown-divider"></div>
			<form action="<?= base_url("penelitian/tambahDataPenelitian"); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" name="nama" class="form-control" id="nama" size="20" required="">
					<label for="nim">Nomor Induk Mahasiswa</label>
					<input type="number" name="nim" class="form-control" id="nim" size="20" required="">
					<label for="instansi">Instansi</label>
					<input type="text" name="instansi" class="form-control" id="instansi" size="20" required="">
					<label for="prodi">Program Studi</label>
					<input type="text" name="prodi" class="form-control" id="prodi" size="20" required="">
					<label for="no_telp">No.Telp/WhatsApp</label>
					<input type="number" name="no_telp" class="form-control" id="no_telp" size="20" required="">
					<label for="email">Alamat Email</label>
					<input type="Email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<h5 class="card-title text-center mt-5">Data Dosen Pembimbing</h5>
					<li class="dropdown-divider"></li>
					<label for="nama_dosen">Nama Lengkap</label>
					<input type="text" name="nama_dosen" class="form-control" id="nama_dosen">
					<label for="no_telp_dosen">No.Telp/WhatsApp</label>
					<input type="number" name="no_telp_dosen" class="form-control" id="no_telp_dosen">
					<label for="email_dosen">Alamat Email</label>
					<input type="Email" name="email_dosen" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<h5 class="card-title text-center mt-5">Data Proposal Penelitian</h5>
					<li class="dropdown-divider"></li>
					<label for="judul">Judul Penelitian</label>
					<input type="text" name="judul" class="form-control" id="judul">
					<label for="abstrak">Abstrak Penelitian</label>
					<textarea class="form-control" name="abstrak" id="floatingTextarea2" style="height: 100px"></textarea>
					<label for="no_surat_penelitian">Nomor Surat Permohonan Penelitian</label>
					<input type="text" name="no_surat_penelitian" class="form-control" id="no_surat_penelitian" size="20">
					<label for="surat_penelitian">Surat Permohonan Penelitian</label>
					<input type="file" name="surat_penelitian" class="form-control">
					<label for="khs">Kartu Hasil Studi</label>
					<input type="file" name="khs" class="form-control">
				</div>
				<button type="submit" name="" class="btn btn-primary mt-3 float-end">Daftar</button>
			</form>
		</div>
	</div>
</div>
