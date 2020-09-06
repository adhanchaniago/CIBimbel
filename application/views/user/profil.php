<html>
<title>Profil</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

      <div class="content-wrapper mx-auto">

               <!-- Content Header (Page header) -->
               <div class="content-header">
                      <div class="container-fluid">
                        <div class="row mb-2">
                          <div class="mx-auto">
                            <h1 class="m-0">Profil Siswa </h1>
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Kelas">Home</a></li>
                              <li class="breadcrumb-item active">Profil</li>
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
              
              <a href="<?php echo base_url()?>user/C_Profil/edit/<?php echo($this->session->userdata('id')) ?>" class="btn btn-primary text-white mb-3">
              <i class="fa fa-edit"> Edit Profil</i>
              </a>


              <table class="table mx-auto">

                    <tr>
                            <td>ID Siswa </td>
                            <?php foreach ($profil as $row) { ?>
                            <td> : <?php echo "NRN".$row->id_siswa ?></td>
                            
                            <?php } ?>
                    </tr>

                    <tr>
                            <td>Nama Siswa </td>
                            <?php foreach ($profil as $row) { ?>
                            <td> : <?php echo $row->nama_siswa ?></td>
                            
                            <?php } ?>
                    </tr>

                    <tr>
                            <td>Id Kelas Siswa </td>
                            <?php foreach ($profil as $row) { ?>
                            <td> : <?php echo $row->id_kelas ?></td>
                            
                            <?php } ?>
                    </tr>

                    <tr>
                            <td>Email </td>
                            <?php foreach ($profil as $row) { ?>
                            <td> : <?php echo $row->email ?></td>
                            
                            <?php } ?>
                    </tr>

                    <tr>
                            <td>Nomor Hp </td>
                            <?php foreach ($profil as $row) { ?>
                            <td> : <?php echo $row->no_hp ?></td>
                            
                            <?php } ?>
                    </tr>

                    <tr>
                            <td>Nomor Hp </td>
                            <?php foreach ($profil as $row) { ?>
                            <td> : <?php echo $row->alamat ?></td>
                            
                            <?php } ?>
                    </tr>



              </table>
                    
              </div>
            </div>

        </section>
      </div>
</div>
</html>