<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">Kabarpasee</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Rico Alfianda</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="/admin" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/admin/category" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Kategori
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/admin/article" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
              Artikel
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/admin/comment" class="nav-link">
            <i class="nav-icon fas fa-comment"></i>
            <p>
              Komentar
              <span class="right badge badge-success">New</span>
            </p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="/admin/advertisement" class="nav-link">
            <i class="nav-icon fas fa-ad"></i>
            <p>
              Iklan
            </p>
          </a>
        </li>

<!--
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Layout Options
              <i class="fas fa-angle-left right"></i>
              <span class="badge badge-info right">6</span>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/layout/top-nav.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Top Navigation</p>
              </a>
            </li>
          </ul>
        </li>
-->
        <li class="nav-header">OTHER</li>
        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon far fa-id-card"></i>
            <p>
              Users
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="pages/gallery.html" class="nav-link">
            <i class="nav-icon far fa-user"></i>
            <p>
              Profil
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
            </p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
        </li>



      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
