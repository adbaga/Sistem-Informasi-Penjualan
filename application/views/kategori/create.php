<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Add Category</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Add Category</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="<?php echo base_url().'index.php/kategori/add'?>">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Category</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter category" />
                                </div>

                                <?= form_password('password') ?>
                                
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select>

                                </div>

                                
                               
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->