<html>
<title>Edit Data Mata Pelajaran</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Update Data Mata Pelajaran</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>c_jadwal">Home</a></li>
              <li class="breadcrumb-item active"> Data Pelajaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content"> 
        <?php foreach ($pljr as $row) {?>
            <form action="<?php echo base_url().'C_Pelajaran/update' ?>" method="post">

                    <div class="form-group">
                        <!-- <label for=""> ID Siswa</label> -->
                        <input type="hidden" name="id_pelajaran" class="form-control"
                        value="<?php echo $row->id_pelajaran;?>">
                        <input type="text" name="......" class="form-control"
                        value="<?php echo 'MTR'.$row->id_pelajaran;?>" readonly> 
                        <!-- Kalo semisal pake readonly nama inputnya jangan tabrakan!! -->
                    </div>
        <?php } ?>
        <?php foreach ($pljr as $row) {?>

                      <div class="form-group">
                        <label for=""> Nama Pelajaran</label>
                        <input type="text" name="nama_pelajaran" class="form-control"
                        value="<?php echo $row->nama_pelajaran;?>" >
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
            $selected = $row->tingkat;
            echo form_dropdown('tingkat',$option, $selected, 'class="form-control"');
            ?>
        </div>

                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Simpan Data</button>  
                        
        <?php } ?>
        



            </form>

    </section>
</div>