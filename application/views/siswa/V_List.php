<html>
<title>Daftar Siswa</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Siswa Neuron Yogyakarta</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Siswa">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i>
        Tambah Data Siswa
      </button>
      <div class="mb-3"></div>
        <table class="table">
        <tr>
            <th> ID Siswa</th>
            <th> Nama Siswa</th>
            <th> Email</th>
            <th> Password</th>
            <th> Kelas</th>
            <th> Nomor Handphone</th>
            <th> Alamat</th>
            <th colspan="2"> Aksi </th>
        </tr>

        <?php foreach ($siswa  as $row) : ?>
        <tr>
            <td><?php echo "NRN".$row['id_siswa'] ?></td>
            <td><?php echo $row['nama_siswa'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['pass'] ?></td>
            <td><?php echo $row['nama_kelas'] ?></td>
            <td><?php echo $row['no_hp'] ?></td>
            <td><?php echo $row['alamat'] ?></td>
            <td><?php echo anchor('C_Siswa/delete_entry/'.$row['id_siswa'],'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
            <div class="mb-2"></div>
            <?php echo anchor('C_Siswa/edit/'.$row['id_siswa'],'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> 
        </tr>
        <?php endforeach; ?>
        </table>
    </section>

    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form Input Siswa Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'C_Siswa/insert_entry'; ?>">
        

        <div class="form-group">
            <label > Nama Siswa</label>
            <input type="text" name="nama_siswa" class="form-control">
        </div>

        <div class="form-group">
            <label > E-mail</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label > Password (Otomatis)</label>
            <input type="text" name="....." class="form-control" value="Auto Generate" readonly>
            <input type="hidden" name="pass" class="form-control" value="<?php echo $pass; ?>">
        </div>

        <div class="form-group">
            <label > Kelas</label>
            <!-- <input type="text" name="kelas" class="form-control"> -->
            <?php  
              $queryKls=$this->M_Siswa->get_kelas();
              $option = array();
              foreach ($queryKls->result() as $row)
              {
                      $option[$row->id_kelas]=$row->nama_kelas;
              }
              echo form_dropdown('id_kelas', $option, '', 'class="form-control"');
            ?>
            <br>
        </div>

        <div class="form-group">
            <label > Nomor Handphone</label>
            <input type="text" name="no_hp" class="form-control">
        </div>

        <div class="form-group">
            <label > Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"></textarea>      
        </div>

        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>

      </form>
    </div>
  </div>
</div>

</div>
</html>