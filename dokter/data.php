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

<div class="container">
    <div class="box">
        <h1>Dokter</h1>
        <h4>
            <small>Data Dokter</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i> Tambah Dokter</a>
            </div>
        </h4>
    </div>

    <form method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dokter">
                <thead>
                    <tr>
                        <th><center><input type="checkbox" id="select_all" value=""></center></th>
                        <th>No.</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    $sql_poli = mysqli_query($con, "SELECT * FROM tb_dokter") or die(mysqli_error($con));
                    while($data = mysqli_fetch_array($sql_poli)){ ?>
                        <tr>
                            <td align="center">
                                <input type="checkbox" name="checked[]" class="check" value="<?= $data['id_dokter']; ?>">
                            </td>
                            <td><?= $no++; ?>.</td>
                            <td><?= htmlspecialchars($data['nama_dokter']); ?></td>
                            <td><?= htmlspecialchars($data['spesialis']); ?></td>
                            <td><?= htmlspecialchars($data['alamat']); ?></td>
                            <td><?= htmlspecialchars($data['no_telp']); ?></td>
                            <td align="center">
                                <a href="edit.php?id=<?= $data['id_dokter']; ?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                                <a href="del.php?id=<?= $data['id_dokter']; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin menghapus data?')"><i class="glyphicon glyphicon-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </form>

    <div class="box">
        <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
    </div>
</div>

<script>
    $(function(){
        $('#dokter').DataTable({
            columnDefs: [{
                "searchable": false,
                "orderable": false,
                "targets": [0, 6]
            }],
            "order": [1, "asc"]
        });

        $('#select_all').on('click', function(){
            if(this.checked){
                $('.check').each(function(){
                    this.checked = true;
                })
            } else {
                $('.check').each(function(){
                    this.checked = false;
                })
            }
        });
        $('.check').on('click', function(){
            if($('.check:checked').length == $('.check').length){
                $('#select_all').prop('checked', true)
            } else {
                $('#select_all').prop('checked', false)
            }
        });
    });

    function hapus(){
        var conf = confirm('Yakin akan menghapus data?');
        if(conf){
            document.proses.action = 'del.php';
            document.proses.submit();
        }
    };
</script>

<?php include_once('../_footer.php'); ?> 
