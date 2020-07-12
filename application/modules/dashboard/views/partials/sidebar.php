	<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <span class="brand-text font-weight-light">
        <?php if($this->session->userdata('role') == 'admin'){
          echo 'Admin';
        }else{
          echo 'Sobat Shopping';
        }?>
      </span>
    </a>

  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column">
      <li class="nav-item">
        <a href="<?php echo base_url('shopping'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Beranda</p>
        </a>
      </li>
    </ul>
    <?php if($this->session->userdata('role') == 'admin'){ ?>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
            <p>Product</p>
            <i class="right fas fa-angle-left"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url('add_product'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Add Product</p>
            </a>
          </li>
        </ul>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard/kategori'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Kategori</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>Invoice</p>
          <i class="right fas fa-angle-left"></i>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="<?php echo base_url('dashboard/invoice'); ?>" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Data Invoice</p>
            </a>
          </li>
        </ul>
      </li>
    </ul>
    <?php } ?>
    <ul class="nav nav-pills nav-sidebar flex-column">
      <li class="nav-item">
        <a href="<?php echo base_url('login/logout'); ?>" class="nav-link">
          <i class="far fa-circle nav-icon"></i>
          <p>Logout</p>
        </a>
      </li>
    </ul>

  </nav>
</aside>