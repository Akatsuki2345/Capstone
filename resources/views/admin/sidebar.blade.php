<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
        
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="index.html">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href=" {{url('product')}} ">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Add Products</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href=" {{url('showorder')}} ">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Orders</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href=" {{url('showproduct')}} ">
          <span class="menu-icon">
            <i class="mdi mdi-file-document-box"></i>
          </span>
          <span class="menu-title">Show Products</span>
        </a>
      </li>
  
      <li class="nav-item nav-category">
        <x-app-layout>
  
        </x-app-layout>
    </li>
    
    </ul>
  </nav>