<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg px-4" style="background-color: #5E1A57;">
  <div class="container-fluid px-4">
    <!--<a class="navbar-brand" href="admin/inicio">
      <img src="./assets/img/logo.svg" alt="IDI" width="40px">
    </a>-->
    <button class="navbar-toggler" style="color: white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon white"></span>
    </button>
    <div class="collapse navbar-collapse nav-colors" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link nav-colors <?php if($resaltar=='Usuarios'){echo 'text-warning';}; ?>" 
            aria-current="page" href="<?php echo base_url('admin/inicio');?>">
              Usuarios
            </a>
          </li>
      
      </ul>
      <!--<form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>-->

      <div class="">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <button class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"
            id="menu-logueo">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path style="fill: white" d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path style="fill: white" fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
              </svg>
            </button>
            <ul class="dropdown-menu">
  
              
              <?php if (session()->id_usuario!=null) {?>
                   <li>
                    <a class="dropdown-item" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#"><?php echo session()->nombre_usuario?></a>
                  </li>
                  <li>
                    <a class="dropdown-item" style="cursor: pointer" href="<?php echo base_url('admin/cerrar_sesion');?>" 
                    id="salir">Cerrar sesión</a>
                  </li>
              <?php };?>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>