<?php
//check level
session_start();
if(isset($_SESSION['level']) == "mahasiswa" AND $_SESSION['username']) {
	?>

	<?php
	//include header.php
	include("part/header.php");
	?>

	<?php
	//include sidebar.php
	include("part/sidebar.php");
	?>

	<!-- start content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row clearfix">
				<div class="col-md-12">
					<div class="card">
						<div class="header">
							<h2>
								PROFIL DATA MAHASISWA
							</h2>
						</div>
						<div class="body">
							<table class="table table-bordered dataTable js-exportable">
								<thead>
								<tr>
									<th scope="col">NIM</th>
									<th scope="col">NAMA MAHASISWA</th>
									<th scope="col">FAKULTAS</th>
									<th scope="col">PRODI</th>
									
								</tr>
								</thead>
								<tbody>
									<?php
										include('../config/koneksi.php');
										$query = "SELECT * FROM tbl_mahasiswa as a JOIN tbl_fakultas as b JOIN tbl_jurusan as c ON a.id_fakultas = b.id_fakultas AND a.id_jurusan = c.id_jurusan ORDER BY a.nim DESC";
										$hasil = mysqli_query($connection, $query);

										while($row = mysqli_fetch_array($hasil)) {
									?>
									<tr>
										<td><?php echo $row["nim"] ?></td>
										<td><?php echo $row["nama_mahasiswa"] ?></td>
										<td><?php echo $row["nama_fakultas"] ?></td>
										<td><?php echo $row["nama_jurusan"] ?></td>
<<<<<<< HEAD
										
=======
>>>>>>> c8549820763f15f0f382c68a93822a75da937a1c
									</tr>
								<?php } ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end content -->

	<?php
	//include footer.php
	include("part/footer.php");
	?>

<?php }else{ ?>
	<?php header("location:../login.php") ?>
<?php } ?>