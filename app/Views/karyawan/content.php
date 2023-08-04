<?php
echo $this->extend('template/index');
echo $this->section('content');
?>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?php echo $title_card; ?></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 10px">No</th>
                            <th>id karyawan</th>
                            <th>Nama</th>
                            <th>status</th>
                            <th>Alamat</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no=1;
                        foreach ($data_karyawan as $r){
                              
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $r['id_karyawan']; ?></td>
                            <td><?php echo $r['nama_karyawan']; ?></td>
                            <td><?php echo $r['status']; ?></td>
                            <td><?php echo $r['alamat']; ?></td>
                            <td>Edit | Hapus</td>
                        </tr>
                        <?php
                        $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>
<?php
echo $this->endsection();