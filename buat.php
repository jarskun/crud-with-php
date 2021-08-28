<?php
include "config.php";
include "header.php";
?>
<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                <i class="glyphicon glyphicon-edit"></i>
                TAMBAH DATA PELANGGAN
            </h4>
        </div> <!-- /.page-header -->

        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal" method="POST" action="proses_save.php">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">nama pelanggan</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="name" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">alamat pelanggan</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="address" autocomplete="off" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal masuk</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="masuk" autocomplete="off" required>
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label">Tanggal keluar</label>
                        <div class="col-sm-2">
                            <div class="input-group">
                                <input type="date" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="keluar" autocomplete="off" required>
                                <span class="input-group-addon">
                                    <i class="glyphicon glyphicon-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>




                    <div class="form-group">
                        <label class="col-sm-2 control-label">kerusakan</label>
                        <div class="col-sm-3">
                            <textarea class="form-control" name="kerusakan" rows="3" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">harga</label>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name="harga" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>
                        </div>
                    </div>

                    <hr />
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-info btn-submit" name="simpan" value="Simpan">
                            <a href="index.php" class="btn btn-default btn-reset">Batal</a>
                        </div>
                    </div>
                </form>
            </div> <!-- /.panel-body -->
        </div> <!-- /.panel -->
    </div> <!-- /.col -->
</div> <!-- /.row -->
<?php
include "footer.php";
?>