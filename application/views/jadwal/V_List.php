<html>
<title>Data Jadwal Bimbingan Pelajaran </title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Jadwal Bimbel </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Jadwal">Home</a></li>
              <li class="breadcrumb-item active">Data Jadwal Pelajaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">

      <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i>
        Tambah Jadwal Bimbel
      </button>

      <a href="<?php echo base_url('C_Jadwal/pdf')?>" class="btn btn-warning text-white">
      <i class="fa fa-file"> Export PDF</i>
      </a>

      <div class="mb-3"></div>
        <table class="table">
        <tr>
            <th> ID Jadwal</th>
            <th> Kelas </th>
            <th> Mata Pelajaran </th>
            <th> Hari </th>
            <th> Jam </th>
            <th colspan="2"> Aksi </th>
        </tr>

        <?php foreach ($jadwal  as $row) : ?>
        <tr>
            <td><?php echo "JWD".$row['id_jadwal'] ?></td>
            <td><?php echo $row['nama_kelas'] ?></td>
            <td><?php echo $row['nama_pelajaran'] ?></td>
            <td><?php echo $row['hari'] ?></td>
            <td>
            
              <?php 
                $date = new DateTime($row['jam_mulai']);
                $date2 = new DateTime($row['jam_sls']);
                echo $date->format('H:i')." - ".$date2->format('H:i')  ?>
            
            </td>
            <td><?php echo anchor('C_Jadwal/delete_entry/'.$row['id_jadwal'],'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
            <?php echo anchor('C_Jadwal/edit/'.$row['id_jadwal'],'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td> 
        </tr>
        <?php endforeach; ?>
        </table>
    </section>

    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Tambah  Jadwal  Baru</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'C_Jadwal/insert_entry'; ?>">
        


        <div class="form-group">
            <label > Kelas</label>
            <!-- <input type="text" name="kelas" class="form-control"> -->
            <?php  
              $queryKls=$this->M_Jadwal->get_kelas();
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
            <label > Mata Pelajaran </label>
            <!-- <input type="text" name="kelas" class="form-control"> -->
            <?php  
              $queryKls=$this->M_Jadwal->get_pelajaran();
              $option = array();
              foreach ($queryKls->result() as $row)
              {
                      $option[$row->id_pelajaran]=$row->nama_pelajaran;
              }
              echo form_dropdown('id_pelajaran', $option, '', 'class="form-control"');
            ?>
            <br>
        </div>

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
            echo form_dropdown('hari',$option,'', 'class="form-control"');
            ?>
        </div>

        <div class="form-group">
            <label >Waktu Mulai </label>
            <input type="time" name="jam_mulai" class="form-control">
        </div>

        <div class="form-group">
            <label >Waktu Selesai </label>
            <input type="time" name="jam_sls" class="form-control">
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