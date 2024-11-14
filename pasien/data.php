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
		<h1>Pasien</h1>
	
		<h4>
			<small>Data Pasien</small>
			<div class="pull-right">
				<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
				<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Pasien</a>
				<a href="import.php" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i> Import Pasien</a>
			</div>
		</h4>

		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover" id="pasien">
				<thead>
					<tr>
						<th>Nomor Identitas</th>
						<th>Nama Pasien</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Telepon</th>
						<th><i class="glyphicon glyphicon-cog"></i></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>

	<script>
		$(document).ready(function(){
		    $('#pasien').DataTable({
		        "processing": true,
		        "serverSide": true,
		        "ajax": "pasien-data.php",
		        // scrollY : '250px',
		        dom: 'Bfrtip',
		        buttons: [
		            'copy',
		            {
		                extend: 'excel',
		                messageTop: 'The information in this table is copyright to Sirius Cybernetics Corp.'
		            },
		            {
		                extend: 'csv'
		            },
		            {
		                extend: 'pdfHtml5',
		                download: 'open',
		                messageBottom: null
		            }
		        ],
		        columnDefs:[{
		        	"searchable": false,
		        	"orderable": false,
		        	"targets": 5,
		        	"render": function(data, type, row){
		        		var btn = "<center><a href=\"edit.php?id="+data+"\" class=\"btn btn-warning btn-xs\"><i class=\"glyphicon glyphicon-edit\"></i></a> <a href=\"del.php?id="+data+"\" onclick=\"return confirm('Yakin menghapus data?');\" class=\"btn btn-danger btn-xs\"><i class=\"glyphicon glyphicon-trash\"></i></a></center>";
		        		return btn;
		        	}
		        }]
		    });
		} );
	</script>

<?php include_once('../_footer.php'); ?>                                                       