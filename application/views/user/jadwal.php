<html>
<title>Jadwal Bimbel</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

      <div class="content-wrapper mx-auto">

               <!-- Content Header (Page header) -->
               <div class="content-header">
                      <div class="container-fluid">
                        <div class="row mb-2">
                          <div class="mx-auto">
                            
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>user/Dashboard">Home</a></li>
                              <li class="breadcrumb-item active">Jadwal</li>
                            </ol>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                </div>
                <div class="mt-4"></div>
                <!-- /.content-header -->
                <h3 class="text-center m-4">Jadwal Bimbel </h3>
        <section class="content">
            <div class="card mx-auto" style="width: 75rem;">
              <div class="card-body">

              <div class="mb-3"></div>
      <a href="<?php echo base_url('C_Jadwal/pdf')?>" class="btn btn-warning text-white m-3">
      <i class="fa fa-file"> Download File Jadwal</i>
      </a>

        <table class="table">
        <tr>
            <th> ID Jadwal</th>
            <th> Kelas </th>
            <th> Mata Pelajaran </th>
            <th> Hari </th>
            <th> Jam </th>
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
        </tr>
        <?php endforeach; ?>
        </table>


              </div>
            </div>

        </section>
      </div>
</div>
</html>