 @php
 function checkRouteActive($route){
   if(Route::current() -> uri == $route) return 'active'; 
} 
@endphp
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{url('public')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Khafifah</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optionurlal) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('public')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Sintiyawati</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <li class="nav-item">
            <a href="{{url('Beranda')}}" class="nav-link {{checkRouteActive('Beranda')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
              Beranda
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{url('Produk')}}" class="nav-link link {{checkRouteActive('Produk')}}"> 
              <i class="nav-icon fas fa-image"></i>
              <p>
              Produk
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{url('Kategori')}}" class="nav-link link {{checkRouteActive(' Kategori')}}"> 
              <i class="nav-icon fas fa-tshirt"></i>
              <p>
              Katagori
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{url('Promo')}}" class="nav-link link {{checkRouteActive('promo')}}"> 
             <i class="nav-icon fas fa-wallet"></i>
              <p>
              Promo
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{url('masuk')}}" class="nav-link link {{checkRouteActive('promo')}}"> 
             <i class="nav-icon fas fa-user "></i>
              <p>
              Login
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
            <li class="nav-item">
            <a href="{{url('masuk')}}" class="nav-link link {{checkRouteActive('promo')}}"> 
             <i class="nav-icon   fas fa-chalkboard-teacher "></i>
              <p>
             register
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>

          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Supplier</p>
                </a>
              </li>
            </ul>
          </li>
         </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>