<div class="col-lg-12">
<section class="box ">
    <header class="panel_header">
        <h2 class="title pull-left">Tambah Karyawan &nbsp;
            <a href="index.php?mod=pegawai" class="btn btn-primary">Lihat Daftar Pegawai</a>
        </h2>
        <div class="actions panel_actions pull-right">
            <i class="box_toggle fa fa-chevron-down"></i>
            <i class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></i>
            <i class="box_close fa fa-times"></i>
        </div>
    </header>
    <div class="content-body">    
        <div class="row">

            <form action="sql/pegawai/add.php" method="POST">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php 
                        if (isset($_GET['msg'])) {
                            $msg = base64_decode($_GET['msg']);
                            $s = $_GET['s'];
                            if ($s == 1) {
                                echo '<div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Success! </strong>'.$msg.'
                                </div>';   
                            }elseif ($s == 0) {
                                echo '<div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Failed! </strong>'.$msg.'
                                </div>'; 
                            }elseif ($s == 2) {
                                echo '<div class="alert alert-warning">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <strong>Oops! </strong>'.$msg.'
                                </div>'; 
                            }
                        }
                     ?>
                    <div class="form-group">
                        <label class="form-label" for="formfield1">Nama Lengkap</label>
                        <span class="desc">e.g. "Rudi Hartono"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield1" name="nama" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="formfield2">NIP</label>
                        <span class="desc">e.g. "1023912391 9123912 12312"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield2" name="nip" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="formfield3">Pangkat</label>
                        <span class="desc">e.g. "iv/a"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield3" name="pangkat" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="formfield4">Jabatan</label>
                        <span class="desc">e.g. "Kepala Humas"</span>
                        <div class="controls">
                            <input type="text" class="form-control" id="formfield4" name="jabatan" required>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="pull-right ">
                        <button type="submit" name="save" class="btn btn-success">Save</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section></div>