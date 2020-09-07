<html>
<title>Dashboard Neuron Yogyakarta</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

      <div class="content-wrapper mx-auto">

               <!-- Content Header (Page header) -->
               <div class="content-header">
                      <div class="container-fluid">
                        <div class="row mb-2">
                          <div class="col-sm-6">
                            <h1 class="m-0">Memo </h1>
                          </div><!-- /.col -->
                          <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>user/Dashboard">Home</a></li>
                              <li class="breadcrumb-item active">Memo</li>
                            </ol>
                          </div><!-- /.col -->
                        </div><!-- /.row -->
                      </div><!-- /.container-fluid -->
                </div>
                <div class="mt-4"></div>
                <!-- /.content-header -->
                
        <section class="content">
            <?php rsort($memo);
            foreach ($memo as $row) : ?>
                <div class="card text-white bg-info mx-auto ">
                  <b><h5 class="card-header font-weight-bold font-italic" ><?php echo $row['judul']?></h5></b>
                  <h5 class="ml-auto mr-3 mt-3 font-italic"> <?php echo $row['tanggal']?> </h5>
                  <div class="card-body">
                    <h4>Hallo!!!</h4>
                    <div class="mb-2"></div>
                    <p class="card-text"><?php echo $row['isi'] ?></p>
                  </div>
                </div>
            <?php endforeach ?>
        </section>
      </div>
</div>
</html>