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
        <?php foreach ($siswa as $row) {?>
            <form action="<?php echo base_url().'C_Siswa/update' ?>" method="post">

                    <div class="form-group">
                        <!-- <label for=""> ID Siswa</label> -->
                        <input type="hidden" name="id_siswa" class="form-control"
                        value="<?php echo $row->id_siswa;?>">
                        <input type="text" name="......" class="form-control"
                        value="<?php echo 'NRN'.$row->id_siswa;?>" readonly> 
                        <!-- Kalo semisal pake readonly nama inputnya jangan tabrakan!! -->
                    </div>

                    <?php } ?>
                    
                    <?php foreach ($siswa as $row) {?>

                      <div class="form-group">
                        <label for=""> Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control"
                        value="<?php echo $row->nama_siswa;?>" >
                    </div>

                      <div class="form-group">
                        <label for=""> Email</label>
                        <input type="text" name="email" class="form-control"
                        value="<?php echo $row->email;?>" >
                    </div>

                    <div class="form-group">
                        <label for=""> Password</label>
                        <input type="text" name="pass" class="form-control"
                        value="<?php echo $row->pass;?>" >
                    </div>

                    <?php } ?>
                    <?php foreach ($siswa as $row) {?>

                    <div class="form-group">
                        <label > Kelas</label>
                        <br>
                        <?php  
                          $queryKls=$this->M_Siswa->get_kelas();
                          $option = array();
                          $selected = $row->id_kelas;
                          foreach ($queryKls->result() as $row)
                          {
                                  $option[$row->id_kelas]=$row->nama_kelas;
                          }
                          echo form_dropdown('id_kelas', $option, $selected, 'class="form-control"');
                        ?>
                        <br>
                    </div>
                    <?php } ?>
                    <?php foreach ($siswa as $row) {?>


                    <div class="form-group">
                        <label for=""> Nomor Handphone</label>
                        <input type="text" name="no_hp" class="form-control"
                        value="<?php echo $row->no_hp;?>" >
                    </div>
                    
                    
                    <div class="form-group">
                        <label for=""> Alamat</label>
                        <textarea class="form-control" name="alamat" rows="3"><?php echo $row->alamat;?></textarea>      
                        
                    </div>


                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>

            </form>

                  <?php } ?>
    </section>
</div>