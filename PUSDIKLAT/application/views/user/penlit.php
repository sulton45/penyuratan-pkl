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
			<h3 class="card-title text-center">Penelitian</h3>
			<p class="card-text text-center lead">Penelitian adalah kegiatan yang dilakukan menurut kaidah dan metode ilmiah secara sistematis untuk memperoleh informasi, data, dan keterangan yang berkaitan dengan pemahaman dan pembuktian kebenaran atau ketidakbenaran suatu asumsi dan/atau hipotesis di bidang ilmu pengetahuan dan teknologi serta menarik kesimpulan ilmiah bagi keperluan kemajuan ilmu pengetahuan dan teknologi.</p>
			<p class="card-text text-center lead">Skripsi adalah puncak dari program Sarjana. Skripsi dilakukan dalam bentuk proyek penelitian dalam suatu departemen. Hal ini merupakan kesempatan untuk mempraktikkan pengetahuan yang dipelajari selama proses pendidikan di perguruan tinggi. Skripsi digunakan untuk menilai inisiatif mahasiswa dan kemampuan mereka untuk merencanakan, melaporkan, dan mempresentasikan proyek.</p>
			<p class="card-text text-center lead">Skripsi merupakan istilah yang digunakan di Indonesia yang  ditujukan pada karya ilmiah wajib yang disusun oleh mahasiswa digunakan  sebagai persyaratan gelar akademis atau kualifikasi profesional yang menyajikan penelitian dan temuan penulis yang bertujuan untuk melatih mahasiswa menerapkan pengetahuan melalui suatu pemecahan masalah yang berkaitan dengan bidang ilmunya.</p>
		</div>
	</div>
	<div class="card text-center mt-3">
		<div class="card-body">
			<div class="row">
				<div class="col">
					<h3 class="card-title"><strong>Alur pendaftaran penelitian</strong></h3>
					<img src="<?= base_url("assets/ALUR PENLIT.jpg");?>" class="rounded mx-auto d-block" width="1300">
				</div>
			</div>
		</div>
	</div>
	<div class="card-group mt-3">
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Tujuan Penelitian Skripsi</h5>
				<p class="card-text">
					<ol class="list-unstyled">
						<ol>
							<li>Memberikan pemahaman mahasiswa tentang bagaimana berpikir imiah dan logis mengenai suatu fenomena tertentu dan menyajikannya secara terstruktur dan sistematis.</li>
							<li>Memadukan ketrampilan dan pengetahuan penulis dalam memahami, menggambarkan, menganalisis dan emnjelaskan permasalahan dan pemecahan masalah sesuai dengan bidang keilmuan yang di ambil.</li>
						</ol>
					</ol>
				</p>
			</div>
		</div>
		<div class="card">
			<div class="card-body">
				<h5 class="card-title">Informasi Skripsi</h5>
				<p class="card-text">Mahasiswa memiliki kesempatan untuk menguji inovasi sambil merumuskan dan memecahkan masalah praktis. Studi-studi yang mendukung proses skripsi sebenarnya berbeda dari satu fakultas dengan fakultas lainnya.</p>
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<a href="<?= base_url("home/form_penelitian");?>" class="btn btn-primary">Daftar Sekarang</a>
				</div>
			</div>
		</div>
	</div>
</div>