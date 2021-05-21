<!-- Tampilkan Flash data -->

<?php if ($this->session->flashdata('flashMessage') == TRUE) : ?>
	<div class="alert alert-primary alert-dismissible fade show" role="alert">
		<p>
			<?php echo $this->session->flashdata('flashMessage'); ?>
		</p>
		<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	</div>
<?php endif; ?>


<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h3 class="card-title text-center">Kerja Praktik</h3>
			<p class="card-text text-center lead">Kerja praktik merupakan suatu program belajar atau kegiatan di perguruan tinggi yang pada dasarnya harus diikuti oleh seluruh mahasiswa.</p>
			<p class="card-text text-center lead">Berdasarkan Undang-undang No.20 Tahun 2003 tentang Sistem Pendidikan Nasional, Undang-undang No.14 Tahun 2005 tentang guru dan dosen, Undang-undang No.12 Tahun 2012 tentang Pendidikan Tinggi, Peraturan pemerintah No.4 Tahun 2014 tentang Pendidikan dan Pengelolaan Perguruan Tinggi, dan Peraturan Menteri Pendidikan Nasional No.49 Tahun 2014 tentang Standar Nasional Pendidikan Tinggi.</p>
			<p class="card-text text-center lead">Berdasarkan peraturan tersebut tujuan dari pelaksanaan PKL adalah mahasiswa mampu mengimplementasikan, mengembangkan keilmuan dalam dunia kerja atau masyarakat, sesuai dengan kompetensi yang dimiliknya, sehingga dapat menambah pengetahuan, pengalaman, dan keahlian sesuai dengan bidang keilmuannya.</p>
			<hr class="dropdown-divider">
			<h3 class="card-title text-center">Alur Pendaftaran Kerja Praktik</h3>
			<img src="<?= base_url("assets/ALUR MAGANG.png"); ?>" class="rounded mx-auto d-block" width="1300">
		</div>
	</div>
	<h3 class="card-title mt-4 text-center">Daftar Unit Kerja</h3>
	<div class="card-group mt-3">
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/1.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Biro Perencanaan dan Keuangan</h5>
				<p class="card-text">Biro Perencanaan dan Keuangan mempunyai tugas melaksanakan koordinasi dan penyusunan rencana, program dan anggaran, pemantauan, evaluasi, dan pelaporan, serta pengelolaan administrasi keuangan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/2.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Biro Hukum, Organisasi, Kerja Sama dan Hubungan Masyarakat</h5>
				<p class="card-text">Biro Hukum, Organisasi, Kerja Sama, dan Hubungan Masyarakat mempunyai tugas melaksanakan koordinasi dan pelayanan di bidang hukum, organisasi, kerja sama, hubungan masyarakat, dan penerbitan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/3.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Biro SDM dan Umum</h5>
				<p class="card-text">Biro Sumber Daya Manusia dan Umum mempunyai tugas melaksanakan koordinasi dan penyusunan urusan sumber daya manusia, rumah tangga, kearsipan, persandian, keprotokolan, administrasi tata usaha, dan layanan pengadaan barang dan jasa.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/4.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Direktorat Deposit dan Pengembangan Koleksi Perpustakaan</h5>
				<p class="card-text">Direktorat Deposit dan Pengembangan Koleksi Perpustakaan mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pelaksanaan fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang deposit dan pengembangan koleksi perpustakaan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/5.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Bibliografi dan Pengolahan Bahan Perpustakaan</h5>
				<p class="card-text">Pusat Bibliografi dan Pengolahan Bahan Perpustakaan mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang bibliografi dan pengolahan bahan perpustakaan.</p>
			</div>
		</div>
	</div>
	<div class="card-group">
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/6.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Preservasi dan Alih Media Bahan Perpustakaan</h5>
				<p class="card-text">Pusat Preservasi dan Alih Media Bahan Perpustakaan mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pelestarian fisik dan informasi bahan perpustakaan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/7.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Jasa Informasi Perpustakaan dan Pengelolaan Naskah Nusantara</h5>
				<p class="card-text">Pusat Jasa Informasi Perpustakaan dan Pengelolaan Naskah Nusantara mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang jasa informasi dan layanan perpustakaan serta pengelolaan naskah nusantara.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/8.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Direktorat Standarisasi dan Akreditasi</h5>
				<p class="card-text">Direktorat Standardisasi dan Akreditasi mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, penyusunan norma, standar, prosedur, dan kriteria, pelaksanaan fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang standardisasi dan akreditasi perpustakaan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/9.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Pengembangan Perpustakaan Umum dan Khusus</h5>
				<p class="card-text">Pusat Pengembangan Perpustakaan Umum dan Khusus mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, pelaksanaan bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pengembangan dan pembinaan perpustakaan umum dan perpustakaan khusus.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/10.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Pengembangan Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi</h5>
				<p class="card-text">Pusat Pengembangan Perpustakaan Sekolah/Madrasah dan Perguruan Tinggi mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, pelaksanaan bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pengembangan dan pembinaan perpustakaan sekolah/madrasah dan perpustakaan perguruan tinggi.</p>
			</div>
		</div>
	</div>
	<div class="card-group">
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/11.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Analisis Perpustakaan dan Pengembangan Budaya Baca</h5>
				<p class="card-text">Pusat Analisis Perpustakaan dan Pengembangan Budaya Baca mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang analisis kebijakan perpustakaan dan pengembangan budaya baca.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/12.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Data dan Informasi</h5>
				<p class="card-text">Pusat Data dan Informasi mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pengelolaan data dan informasi perpustakaan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/13.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Pembinaan Pustakawan</h5>
				<p class="card-text">Pusat Pembinaan Pustakawan mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pembinaan dan pengembangan pustakawan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/14.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Pusat Pendidikan dan Pelatihan</h5>
				<p class="card-text">Pusat Pendidikan dan Pelatihan mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pendidikan dan pelatihan.</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/15.jpg"); ?>" width="200" class="rounded mx-auto d-block">
				<h5 class="card-title">Inspektorat</h5>
				<p class="card-text">Inspektorat mempunyai tugas melaksanakan perumusan dan pelaksanaan kebijakan, fasilitasi, bimbingan teknis, supervisi, dan evaluasi dan pelaporan di bidang pengawasan internal.</p>
			</div>
		</div>
	</div>
	<div class="card-group mt-3">
		<div class="card">
			<div class="card-body">
				<img src="<?= base_url("assets/kp.jpg"); ?>" class="rounded mx-auto d-block" width="350">
				<h5 class="card-title">Kerja Praktik</h5>
				<p class="card-text">Melalui kerja praktik kami memberikan kesempatan belajar kepada mahasiswa untuk memecahkan masalah yang sedang mereka hadapi dengan dasar teori-teori yang mereka dapatkan dalam perkuliahan. Meningkatkan cakrawala berpikir mahasiswa sehingga mampu menggabungkan antara aspek teori dan praktik.</p>
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="<?= base_url("home/form_magang"); ?>" class="btn btn-primary">Daftar Sekarang</a>
				</div>
			</div>
		</div>
		<div class="card">
			<img src="<?= base_url("assets/km.jpg");?>" class="rounded mx-auto d-block" alt="..." width="300">
			<div class="card-body">
				<h5 class="card-title">Kampus Merdeka</h5>
				<p class="card-text">Merdeka Belajar – Kampus Merdeka, merupakan kebijakan Menteri Pendidikan dan Kebudayaan, yang bertujuan mendorong mahasiswa untuk menguasai berbagai keilmuan yang berguna untuk memasuki dunia kerja. Kampus Merdeka memberikan kesempatan bagi mahasiswa untuk memilih mata kuliah yang akan mereka ambil. </p>
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="<?= base_url("home/form_magang"); ?>" class="btn btn-primary">Daftar Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</div>
