<?php include_once('../_header.php'); ?>

<style>
    body {
        background: linear-gradient(135deg, #74ebd5, #9face6);
        font-family: 'Arial', sans-serif;
    }

    .box {
        background-color: #ffffff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    h1, h4 {
        color: #333;
    }

    .btn {
        border-radius: 5px;
    }

    .table {
        margin-top: 15px;
        background-color: #f9f9f9;
        border-radius: 10px;
        overflow: hidden;
    }

    .table th {
        background-color: #6c757d;
        color: #fff;
        text-align: center;
    }

    .table td {
        text-align: center;
    }

    .btn-xs {
        transition: transform 0.2s;
    }

    .btn-xs:hover {
        transform: scale(1.1);
    }

    .card {
        background-color: #ffffff;
        border: 1px solid #ddd;
        border-radius: 10px;
        padding: 15px;
        margin-bottom: 10px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        transform: scale(1.02);
        transition: all 0.3s;
    }
</style>

	<div class="box">
		<h1>Obat</h1>
		<h4>
			<small>Data Obat</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Obat</a>
			</div>
		</h4>
		<div style="margin-bottom:10px;">
			<form class="form-inline" action="" method="post">
				<div class="form-group">
					<input type="text" name="pencarian" class="form-control" placeholder="Pencarian...">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
				</div>
			</form>
		</div>
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>Nama Obat</th>
						<th>Keterangan</th>
						<th><i class="glyphicon glyphicon-cog"></i></th>
					</tr>
				</thead>

				<tbody>
					<?php
						$batas = 20;
						$hal = @$_GET['hal'];
						if(empty($hal)){
							$posisi = 0;
							$hal = 1;
						}
						else{
							$posisi = ($hal - 1) * $batas;
						}
						$no = 1;
						if($_SERVER['REQUEST_METHOD'] == "POST"){
							$pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
							if($pencarian != ''){
								$sql = "SELECT * FROM tb_obat WHERE nama_obat LIKE '%$pencarian%'";
								$query = $sql;
								$query_jml = $sql;
							}
							else{
								$query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
								$query_jml = "SELECT * FROM tb_obat";
								$no = $posisi + 1;
							}
						}
						else{
							$query = "SELECT * FROM tb_obat LIMIT $posisi, $batas";
							$query_jml = "SELECT * FROM tb_obat";
							$no = $posisi + 1;
						}
						
						$sql_obat = mysqli_query($con, $query) or die(mysqli_error($con));
						if(mysqli_num_rows($sql_obat) > 0){
							while($data = mysqli_fetch_array($sql_obat)){ ?>
								<tr>
									<td><?= $no++; ?>.</td>
									<td><?= $data['nama_obat']; ?></td>
									<td><?= $data['ket_obat']; ?></td>
									<td class="text-center">
										<a href="edit.php?id=<?= $data['id_obat'] ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
										<a href="del.php?id=<?= $data['id_obat'] ?>" onclick="return confirm('Yakin akan menghapus data?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
									</td>
								</tr>
							<?php
							}
						}
						else{
							echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
						}
					?>
					<tr>
						
					</tr>
				</tbody>
			</table>
		</div>
		<?php
			if(isset($_POST['pencarian']) == ''){ ?>
				<div style="float: left;">
					<?php
						$jml = mysqli_num_rows(mysqli_query($con, $query_jml));
						echo "Jumlah data : <b>$jml</b>";
					?>
				</div>
				<div style="float: right;">
					<ul class="pagination pagination-sm" style="margin: 0">
						<?php
							$jml_hal = ceil($jml / $batas);
							for ($i=1; $i <= $jml_hal; $i++){ 
								if($i != $hal){
									echo "<li><a href=\"?hal=$i\">$i</a></li>";
								}
								else{
									echo "<li class=\"active\"><a href=\"?hal=$i\">$i</a></li>";
								}
							}
						?>
					</ul>
				</div>
			<?php
			}
			else{
				echo "<div style=\"float:left\">";
				$jml = mysqli_num_rows(mysqli_query($con, $query_jml));
				echo "Data hasil pencarian : <b>$jml</b>";
				echo "</div>";
			}
		?>
	</div>


<?php include_once('../_footer.php'); ?>