<nav class="main-header navbar navbar-expand navbar-white navbar-light">

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index3.html" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
      <li class="breadcrumb-item text-weight-bold">
          <a class="btn btn-light mr-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size:17px;cursor:pointer;"><b><?php echo ucfirst($this->session->userdata('username')); ?></b> <i class="fas fa-caret-down"></i></a>
          <div class="mr-3 dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item text-dark" href="<?= base_url('login/logout');?>"><i class="nav-icon fas fa-sign-out-alt"></i> Logout</a>
          </div>
      </li>
  </ul>
</nav>
  