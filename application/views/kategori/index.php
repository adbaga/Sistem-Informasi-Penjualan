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
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
     <div class="box">
     <div class="box-body">
         <a href="<?= base_url('index.php/kategori/create')?>" class="btn btn-primary">Add</a>
     <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>Nama Kategori</th>
                  <th>Status</th>
                  <th style="width: 150px">Action</th>
                </tr>

                <?php foreach($list_kategori->result_array() as $row) { ?>
                <tr>
                  <td><?= $row['id'] ?></td>
                  <td><?= $row['name'] ?></td>
                  <td> <?= $row['status'] ?></td>
                  <td>
                  <div class="btn-group">
                    <a class="btn btn-info" href="<?=base_url('index.php/kategori/show/'.$row['id']) ?>">
                    <i class="fa fa-eye"></i></a>

                  
                  <a class="btn btn-success" href="<?=base_url('index.php/kategori/edit/'.$row['id']) ?>">
                  <i class="fa fa-pencil"></i></a>
                
                  <a class="btn btn-danger" href="<?=base_url('index.php/kategori/destroy/'.$row['id']) ?>">
                  <i class="fa fa-trash"></i></a>
                  
                  </td>

                  </tr>
                <?php } ?>
              </table>
        </section>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>