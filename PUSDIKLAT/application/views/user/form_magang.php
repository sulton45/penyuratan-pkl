<div class="container-fluid"> 
	<div class="card mt-3">
		<div class="card-header text-center"><h4><strong>Form Pendaftaran Program Magang</strong></h4>
		</div>
		<div class="card-body">
			<ol class="list-unstyled">
				Syarat dan Ketentuan Pendaftaran Kerja Praktik atau Perogram Kampus Merdeka:
				<ol>
					<li>Pendaftar merupakan mahasiswa aktif.</li>
					<li>Memiliki alamat email serta nomor telepon aktif yang dapat dihubungi.</li>
					<li>Mengisi data dengan benar.</li>
					<li>Mengunggah dokumen yang dibutuhkan.</li>
				</ol>
			</ol>
			<div class="dropdown-divider"></div>
			<form action="<?= base_url("magang/tambahDataMagang"); ?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" name="nama" class="form-control" id="nama" size="20" required="">
					<label for="nim">Nomor Induk Mahasiswa</label>
					<input type="number" name="nim" class="form-control" id="nim" size="20" required="">
					<label for="instansi">Instansi</label>
					<input type="text" name="instansi" class="form-control" id="instansi" size="20" required="">
					<label for="prodi">Program Studi</label>
					<input type="text" name="prodi" class="form-control" id="prodi" size="20" required="">
					<label for="semester">Semester</label>
					<input type="number" name="semester" class="form-control" id="semester" size="20" required="">
					<label for="no_telp">No.Telp/WhatsApp</label>
					<input type="number" name="no_telp" class="form-control" id="no_telp" size="20" required="">
					<label for="email">Alamat Email</label>
					<input type="Email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
					<label for="unit">Unit Kerja</label>
					<select class="form-select" name="unit" id="unit">
						<option>---PILIH---</option>
						<option value="Biro Perencanaan dan Keuangan">Biro Perencanaan dan Keuangan</option>
						<option value="Biro Hukum, Organisasi, Kerja Sama dan Hubungan Masyarakat">Biro Hukum, Organisasi, Kerja Sama dan Hubungan Masyarakat</option>
						<option value="Biro SDM dan Umum">Biro SDM dan Umum</option>
						<option value="Direktorat Deposit dan Pengembangan Koleksi Perpustakaan">Direktorat Deposit dan Pengembangan Koleksi Perpustakaan</option>
						<option value="Pusat Bibliografi dan Pengolahan Bahan Perpustakaan">Pusat Bibliografi dan Pengolahan Bahan Perpustakaan</option>
						<option value="Pusat Preservasi dan Alih Media Bahan Perpustakaan">Pusat Preservasi dan Alih Media Bahan Perpustakaan</option>
						<option value="Pusat Jasa Informasi Perpustakaan dan Pengelolaan Naskah Nusantara">Pusat Jasa Informasi Perpustakaan dan Pengelolaan Naskah Nusantara</option>
						<option value="Direktorat Standarisasi dan Akreditasi">Direktorat Standarisasi dan Akreditasi</option>
						<option value="Pusat Pengembangan Perpustakaan Umum dan Khusus">Pusat Pengembangan Perpustakaan Umum dan Khusus</option>
						<option value="Pusat Pengembangan Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi">Pusat Pengembangan Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi</option>
						<option value="Pusat Analisis Perpustakaan dan Pengembangan Budaya Baca">Pusat Analisis Perpustakaan dan Pengembangan Budaya Baca</option>
						<option value="Pusat Data dan Informasi">Pusat Data dan Informasi</option>
						<option value="Pusat Pembinaan Pustakawan">Pusat Pembinaan Pustakawan</option>
						<option value="Pusat Pendidikan dan Pelatihan">Pusat Pendidikan dan Pelatihan</option>
						<option value="Inspektorat">Inspektorat</option>
						<option value="Unit lain">Unit lain</option>
					</select>
					<label for="ketentuan">Ketentuan Magang</label>
					<select class="form-select" name="ketentuan" id="ketentuan">
						<option>---PILIH---</option>
						<option value="Kampus Merdeka">Kampus Merdeka</option>
						<option value="Kerja Praktik">Kerja Praktik</option>
					</select>
					<label for="no_surat">Nomor Surat Permohonan Magang</label>
					<input type="text" name="no_surat" class="form-control" id="no_surat" size="20">
					<label for="surat_magang">Surat Permohonan Magang</label>
					<input type="file" name="surat_magang" class="form-control" id="surat_magang">
					<label for="khs">Kartu Hasil Studi</label>
					<input type="file" name="khs" class="form-control" id="khs">
				</div>
				<button type="submit" name="tambah" class="btn btn-primary mt-3 float-end">Daftar</button>
			</form>
		</div>
	</div>
</div>
