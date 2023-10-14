<?php 
	include "../init.php"; 
	$dataJurusanIndex = new jurusan();
?>
<!DOCTYPE html>
<html lang="en-ID">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMK Nasional Malang</title>
	<?php include '../header.php'; ?>
</head>
<body class="bgSilver">

<div class="container-big">
	
	<ul class="menuheader">
		<div class="container">
			<?php  
				$dataJurusanIndex = $dataJurusanIndex->tampil_jurusan();
			?>
			<li><a href="index.php" class="benner"><span class="fa fa-home ico"></span> LANGPORT</a></li>

			<li class="right button_drop_mobile">
				<a href="dropdownManual" target-menu="dropdown_mobile">
					<div class="menu_humberger"></div>
				</a>
			</li>

			<ul class="dropdown_mobile">
				
				<li class="right sign-out"><a title="Log Out" href="<?= config::base_url('admin/login/logout.php'); ?>"><span class="fa fa-sign-out ico"></span></a></li>
				<li class="right"><a target="_blank" title="Pusat Bantuan" href="<?= config::base_url('index.php?ref=pusat_bantuan'); ?>"><span class="fa fa-question-circle-o ico"></span></a></li>
				<li class="right"><a title="Buat Cadangan Database" target="_blank" href="<?= config::base_url('admin/backup_data/backup_data.php'); ?>"><span class="fa fa-cloud-download ico"></span></a></li>
				<li class="right"><a title="Pengaturan" href="dropdownAuto"><span class="fa fa-gear ico"></span></a>
					<!-- menu dropdown setting -->
					<ul class="drop_menu setting" target-menu="auto">
						<div class="container">
						<div class="col-6">
							<li><a href="index.php?ref=identitas_sekolah">Identitas sekolah</a></li>
							<li><a href="index.php?ref=jurusan">Jurusan</a></li>
							<li><a href="index.php?ref=kelas">Kelas</a></li>
							<li><a href="index.php?ref=tahun_ajaran">Tahun ajaran</a></li>
						  	<li><a href="index.php?ref=semester">Semester</a></li>
							<li><a href="index.php?ref=siswa_detail">Data siswa detail</a></li>
							<li><a href="index.php?ref=kkm">KKM</a></li>
						</div>
					  	<div class="col-6">
							<li><a href="index.php?ref=mapel">Mata pelajaran</a></li>
							<li><a href="index.php?ref=wali_kelas">Wali kelas</a></li>
							<li><a href="index.php?ref=siswa_lulus">Data siswa lulus</a></li>
							<li><a href="index.php?ref=siswa_keluar">Data siswa keluar</a></li>
							<li><a href="index.php?ref=izin_kenaikan_kelas">Izin kenaikan kelas</a></li>
							<li><a href="index.php?ref=user_admin">Admin</a></li>
					  	</div>
						</div>
					</ul>
					<!-- menu dropdown setting end -->
				</li>
			</ul><!-- dropdown mobile -->

		</div>
	</ul><!-- menuheader -->

	<!-- progress bar -->
	<div class="progress_bar_back">
		<div id="mybar" class="progress_bar green default"></div>
	</div>

	<div class="container content">
	<?php 
		config::page("homeAdmin/homeAdmin.php");
	?>
	</div>

</div><!-- container-big -->

<?php if(!isset($_SESSION['RAPORT']['tahun_ajaran_id']) || !isset($_SESSION['RAPORT']['semester_id'])) : ?>
<div class="alert">
	<?php 
		if(!isset($_SESSION['RAPORT']['tahun_ajaran_id']) && !isset($_SESSION['RAPORT']['semester_id'])) {
			$pesan = "Tahun ajaran dan Semester";
		} elseif(!isset($_SESSION['RAPORT']['tahun_ajaran_id'])) {
			$pesan = "Tahun ajaran";
		} elseif(!isset($_SESSION['RAPORT']['semester_id'])) {
			$pesan = "Semester";
		}
	?>
	<p><?= $pesan; ?> belum dipilih!</p>

	<a id="closeAlert"><span class="fa fa-remove"></span></a>
</div>
<?php endif; ?>

<script type="text/javascript" src="<?= config::base_url('assets/js/action/dropdown.js'); ?>"></script>
<script type="text/javascript">
$(function(){
	$("a#closeAlert").click(function(){
		$("div.alert").css({"display":"none"});
	})
})
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script>
	new DataTable('#example');
</script>
</body>
</html>