<html>
<title>Edit Profil</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

      <div class="content-wrapper mx-auto">

               <!-- Content Header (Page header) -->
               <div class="content-header">
                      <div class="container-fluid">
                        <div class="row mb-2">
                          <div class="mx-auto">
                            <h1 class="m-0">Edit Profil Siswa </h1>
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Kelas">Home</a></li>
                              <li class="breadcrumb-item active">Edit Profil</li>
                            </ol>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                </div>
                <div class="mt-4"></div>
                <!-- /.content-header -->
                
        <section class="content">
            <div class="card mx-auto" style="width: 50rem;">
              <div class="card-body">
              
              <?php foreach ($profil as $row) {?>
            <form action="<?php echo base_url().'user/C_Profil/update' ?>" method="post">

                    <div class="form-group">
                        <!-- <label for=""> ID Siswa</label> -->
                        <input type="hidden" name="id_siswa" class="form-control"
                        value="<?php echo $row->id_siswa;?>">
                        <input type="text" name="......" class="form-control"
                        value="<?php echo 'NRN'.$row->id_siswa;?>" readonly> 
                        <!-- Kalo semisal pake readonly nama inputnya jangan tabrakan!! -->
                    </div>

                    <?php } ?>
                    
                    <?php foreach ($profil as $row) {?>

                      <div class="form-group">
                        <label for=""> Nama Siswa</label>
                        <input type="text" name="nama_siswa" class="form-control"
                        value="<?php echo $row->nama_siswa;?>" >
                    </div>

                      <div class="form-group">
                        <label for=""> Email</label>
                        <input type="hidden" name="email" class="form-control"
                        value="<?php echo $row->email;?>" >
                        <input type="text" name="....." class="form-control"
                        value="<?php echo $row->email;?>" readonly >
                    </div>

                    <div class="form-group">
                        <label for=""> Password</label>
                        <input type="text" name="pass" class="form-control"
                        value="<?php echo $row->pass;?>" >
                    </div>

                    <div class="form-group">
                        <label for=""> ID Kelas</label>
                        <input type="hidden" name="id_kelas" class="form-control"
                        value="<?php echo $row->id_kelas;?>" >
                        <input type="text" name="..." class="form-control"
                        value="<?php echo $row->id_kelas;?>" readonly>
                    </div>

                    

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




              </div>
            </div>

        </section>
      </div>
</div>
</html>