<html>
<title>Edit Data Siswa</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Update Data Siswa</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>c_jadwal">Home</a></li>
              <li class="breadcrumb-item active"> Data Siswa</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content"> 
        <?php foreach ($kelas as $row) {?>
            <form action="<?php echo base_url().'C_Kelas/update' ?>" method="post">

                    <div class="form-group">
                        <!-- <label for=""> ID Siswa</label> -->
                        <input type="hidden" name="id_kelas" class="form-control"
                        value="<?php echo $row->id_kelas;?>">
                        <input type="text" name="......" class="form-control"
                        value="<?php echo 'NRN'.$row->id_kelas;?>" readonly> 
                        <!-- Kalo semisal pake readonly nama inputnya jangan tabrakan!! -->
                    </div>

                      <div class="form-group">
                        <label for=""> Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control"
                        value="<?php echo $row->nama_kelas;?>" >
                    </div>



                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>

            </form>

                  <?php } ?>
    </section>
</div>