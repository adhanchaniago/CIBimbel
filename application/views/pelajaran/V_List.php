<html>
<title>Data Pelajaran</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Pelajaran Neuron YK</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Pelajaran">Home</a></li>
              <li class="breadcrumb-item active">Data Pelajaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i>
        Tambah Mata Pelajaran
      </button>
      <div class="mb-3"></div>
        <table class="table">
        <tr>
            <th> ID Pelajaran</th>
            <th> Nama Pelajaran</th>
            <th> Tingkat Kelas</th>
            <th colspan="2"> Aksi </th>
        </tr>

        <?php foreach ($pljr  as $row) : ?>
        <tr>
            <td><?php echo "MTR".$row['id_pelajaran'] ?></td>
            <td><?php echo $row['nama_pelajaran'] ?></td>
            <td><?php echo $row['tingkat'] ?></td>
            <td><?php echo anchor('C_Pelajaran/delete_entry/'.$row['id_pelajaran'],'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
            <?php echo anchor('C_Pelajaran/edit/'.$row['id_pelajaran'],'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> 
        </tr>
        <?php endforeach; ?>
        </table>
    </section>

    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah Pelajaran Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'C_Pelajaran/insert_entry'; ?>">
        

        <div class="form-group">
            <label > Nama Pelajaran</label>
            <input type="text" name="nama_pelajaran" class="form-control">
        </div>


        <div class="form-group">
            <label > Tingkat Kelas</label>
            <br>
            <?php
            $option = array(
              '7' => '7',
              '8' => '8',
              '9' => '9',
              '10' => '10',
              '11' => '11',
              '12' => '12',
            );
            echo form_dropdown('tingkat',$option,'', 'class="form-control"');
            ?>
        </div>


        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>

      </form>
    </div>
  </div>
</div>

</div>
</div>
</html>