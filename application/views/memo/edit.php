<html>
<title>Edit Memo</title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Ubah Memo</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Siswa">Home</a></li>
              <li class="breadcrumb-item active">Ubah Memo</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">


    <div class="ml-3">
    <form method="post" action="<?php echo base_url().'C_Memo/update'; ?>">
        
    <div class="col-7">

        
        <div class="form-group">
            <label > Tanggal</label>
            <input type="text" name="....." class="form-control" value="<?php echo date("l").',  '.date("Y-m-d") ?>" readonly>
            <input type="hidden" name="tanggal" class="form-control" value="<?php echo date("Y-m-d") ?>" >
        </div>

    <?php foreach ($memo as $row) { ?>
        <div class="form-group">
            <label > ID Memo</label>
            <input type="text" name="....." class="form-control" value="<?php echo 'MEMO'.$row->id_memo;?>" readonly>
            <input type="hidden" name="id_memo" class="form-control" value="<?php echo $row->id_memo;?>" >
        </div>

        <div class="form-group">
            <label > Judul Memo</label>
            <input type="text" name="judul" class="form-control" value="<?php echo $row->judul; ?>">
        </div>


        <div class="form-group">
            <label > Isi Memo</label>
            <textarea class="form-control" name="isi" rows="20" ><?php echo $row->isi; ?></textarea>      
        </div>
    <?php } ?>

    </div>

        <button type="reset" class="btn btn-danger" >Reset</button>
        <button type="submit" class="btn btn-primary">Simpan Data</button>

      </form>
      </div>
    </section>

    



</div>
</html>