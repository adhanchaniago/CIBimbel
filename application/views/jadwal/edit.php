<html>
<title>Edit Data Bimbel</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


<div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Update Data Jadwal Bimbel</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>c_jadwal">Home</a></li>
              <li class="breadcrumb-item active"> Data Jadwal Bimbel</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content"> 
        <?php foreach ($jadwal as $row) {?>
            <form action="<?php echo base_url().'C_Jadwal/update' ?>" method="post">

                    <div class="form-group">
                        <!-- <label for=""> ID Siswa</label> -->
                        <input type="hidden" name="id_jadwal" class="form-control"
                        value="<?php echo $row->id_jadwal;?>">
                        <input type="text" name="......" class="form-control"
                        value="<?php echo 'JDW'.$row->id_jadwal;?>" readonly> 
                        <!-- Kalo semisal pake readonly nama inputnya jangan tabrakan!! -->
                    </div>

                    <div class="form-group">
                        <label > Kelas</label>
                        <?php  
                          $queryKls=$this->M_Jadwal->get_kelas();
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
        <?php foreach ($jadwal as $row) {?>
                    
                    <div class="form-group">
                         <label > Mata Pelajaran </label>
                         <?php  
                           $queryKls=$this->M_Jadwal->get_pelajaran();
                           $option = array();
                           $selected = $row->id_pelajaran;
                           foreach ($queryKls->result() as $row)
                           {
                                   $option[$row->id_pelajaran]=$row->nama_pelajaran;
                           }
                           echo form_dropdown('id_pelajaran', $option, $selected, 'class="form-control"');
                         ?>
                         <br>
                     </div>
        <?php } ?>
        <?php foreach ($jadwal as $row) {?>
                     <div class="form-group">
                          <label >Hari</label>
                          <br>
                          <?php
                          $option = array(
                            'Senin' => 'Senin',
                            'Selasa' => 'Selasa',
                            'Rabu' => 'Rabu',
                            'Kamis' => 'Kamis',
                            'Jumat' => 'Jumat',
                            'Sabtu' => 'Sabtu',
                            'Minggu' => 'Minggu'
                          );
                          $selected = $row->hari;
                          echo form_dropdown('hari',$option,$selected, 'class="form-control"');
                          ?>
                      </div>

                      <div class="form-group">
                         <label >Waktu Mulai </label>
                         <input type="time" name="jam_mulai" class="form-control" value="<?php echo $row->jam_mulai; ?>">
                     </div>

                     <div class="form-group">
                         <label >Waktu Selesai </label>
                         <input type="time" name="jam_sls" class="form-control" value="<?php echo $row->jam_sls; ?>">
                     </div>



                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>

            </form>

        <?php } ?>
    </section>
</div>