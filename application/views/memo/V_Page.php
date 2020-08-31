<html>
<title>Memo </title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<div class="content-wrapper">

     <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Draft Memo </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>C_Kelas">Home</a></li>
              <li class="breadcrumb-item active">Memo</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">

        <?php echo anchor('C_Memo/create','<button class="btn btn-primary "><i class="fa fa-plus"></i>Tambah Memo</button>') ?>
        <div class="mb-3"></div>

    <?php foreach ($memo as $row) : ?>
    <div class="ml-2">
    <div id="accordion">
        <div class="card" style="width: 85%"> 
          <div class="card-header" id="headingOne">
          <table>
            <tr>
               <td>
                  <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="<?php echo "#collapse".$row['id_memo']?>" aria-expanded="true" aria-controls="<?php echo "collapse".$row['id_memo']?>">
                      <?php echo $row['judul']."  (".$row['tanggal'].")" ?>
                    </button>
                  </h5>
               </td>
                <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                <td> 
                   <?php echo anchor('C_Memo/edit/'.$row['id_memo'],'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?> 
                   <?php echo anchor('C_Memo/delete_entry/'.$row['id_memo'],'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                 </td>
            </tr>
          </table>
          </div>
        
        
          <div id="<?php echo "collapse".$row['id_memo']?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <h3 > <?php echo $row['judul'] ?></h3>
                <div class="text-justify">
                    <?php echo $row['isi'] ?>
                </div>
             </div>
          </div>
        

        </div>
    </div>
    </div>
    <?php endforeach; ?>


    </section>


</div>
</html>