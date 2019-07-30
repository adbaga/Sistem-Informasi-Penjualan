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
                    <?= form_open_multipart('index.php/product/add') ?>
                   
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Add Category</h3>
                            </div>
                            <div class="card-body">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Category</label>
                                        <select name="name" class="form-control">
                                            <option value="">No selected</option>

                                            <?php foreach ($kategori->result() as $row) {?>
                                                <option value="<?= $row->id ?>"><?= $row->name ?></option>
                                                <?php } ?>
                                            
                                        </select>

                                       
                                    </div> 
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Name">SKU</label>
                                        <?= form_input(array('name'=>'name', 'class'=>'form-control',
                                        'placeholder'=>'Enter Name')) ?>
                                    </div> 
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sku">SKU</label>
                                        <?= form_input(array('name'=>'sku', 'class'=>'form-control',
                                        'placeholder'=>'Enter SKU')) ?>
                                    </div> 
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Status">Status</label>
                                       <?php
                                       $options = array(
                                           'active' => 'Active',
                                           'inactive' => 'Inactive'
                                       );
                                    echo form_dropdown('status', $options, false, array('class'=>'form-control'));
                                  ?>
                                       </div> 
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <?= form_input(array('type'=>'number','name'=>'price', 'class'=>'form-control',
                                        'placeholder'=>'Enter Price')) ?>
                                    </div> 
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <?= form_input(array('type'=>'file','name'=>'image'
                                        )) ?>
                                    </div> 
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <?= form_textarea(array('name'=>'description', 'class'=>'form-control',
                                        'placeholder'=>'Enter Description')) ?>
                                    </div> 
                                </div>


                               
                                
 
                                
                               
                            </div>
                            <div class="card-footer">
                                <a href="" class="btn btn-outline-info">Back</a>
                                <button type="submit" class="btn btn-primary pull-right">Add Category</button>
                            </div>
                            
                        
                        <?= form_close() ?>
                    </form>
                </div>
            </div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->