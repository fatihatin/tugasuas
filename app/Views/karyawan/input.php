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
            <?php echo validation_list_errors() ?>
            <form action="<?php echo $action; ?>" method="post">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                        Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my
                        entire
                        soul, like these sweet mornings of spring which I enjoy with my whole heart.
                    </div>
                    <div class="from group">
                        <lebel for="nama">Nama</lebel>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="from group">
                        <lebel for="status">Status</lebel>
                        <input type="text" name="status" id="status" class="form-control">
                    </div>
                    <div class="from group">
                        <lebel for="alamat">Alamat</lebel>
                        <input type="text" name="alamat" id="alamat" class="form-control">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-save"></i>Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
echo $this->endsection();