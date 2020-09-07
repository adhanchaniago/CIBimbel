 
      
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="brand-link" href="#">
       <img src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        Neuron Yogyakarta
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="<?php echo base_url()?>user/Dashboard">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>user/C_Jadwal">Jadwal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url() ?>user/C_Kontak">Kontak</a>
      </li>
    </ul>
    
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item">
        <p class="mt-2">Hai <?php echo ($this->session->userdata('email')); ?> </p>
      </li>
       <li class="nav-item">
        <a href="<?php echo base_url()?>user/C_Profil/get_data/<?php echo($this->session->userdata('id')) ?>" class="nav-link"> Profil</a>
       </li>
       <li class="nav-item">
        <a href="<?php echo base_url()?>user/login/logout" class="nav-link text-danger"> Log Out</a>
       </li>
    </ul>
    
  </div>
</nav>


