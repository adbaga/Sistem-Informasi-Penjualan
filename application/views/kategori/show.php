<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
      <h1>
        <?= $title ?>
        <small><?= $desc ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><?= $link ?></li>
      </ol>
    </section>
 
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-body"><div class="card">
                            <div class="card-header">
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Category</label>
                                    <input type="text" name="name" class="form-control" disabled value="<?= $get_kategori->name ?>" />
                                </div>
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control" disabled>
                                        <option value="active" <?php if($get_kategori->status == "active"){ echo "selected";} ?> >Active</option>
                                        <option value="inactive" <?php if($get_kategori->status == "inactive"){ echo "selected";} ?>>Inactive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="card-footer">
                                <!-- Code in here -->
                                <!-- back button using go(-1) javascript -->
                                <button class="btn btn-primary" onclick="history.go(-1);">Kembali</button>
                            </div>
                        </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->