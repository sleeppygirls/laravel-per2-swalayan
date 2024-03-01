  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="/admin/dist/img/AdminLTELogo.png" alt="logo swalayan" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">Swalayan</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="/" class="d-block">Queen Swalayan</a>
              </div>
          </div>

          <!-- SidebarSearch Form -->
          <div class="form-inline">
              <div class="input-group" data-widget="sidebar-search">
                  <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                      aria-label="Search">
                  <div class="input-group-append">
                      <button class="btn btn-sidebar">
                          <i class="fas fa-search fa-fw"></i>
                      </button>
                  </div>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="/" class="nav-link">
                          <i class="nav-icon fas fa-store fa-fw" style="color: #B5565D"></i>
                          <p>
                              Beranda
                              {{-- <span class="right badge badge-danger">New</span> --}}
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-money-bill-alt fa-fw" style="color: #197800"></i>
                          <p>
                              Transaksi
                              <i class="fas fa-angle-left right"></i>
                              {{-- <span class="badge badge-info right">6</span> --}}
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="/transactions/create" class="nav-link">
                                  <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                                  <p>Tambah</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="/transactions" class="nav-link">
                                  <i class="fas fa-eye fa-fw nav-icon"></i>
                                  <p>Lihat</p>
                              </a>
                      </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users fa-fw" style="color: #C1ECF7"></i>
                        <p>
                            Customer
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/customers/create" class="nav-link">
                                <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/customers" class="nav-link">
                                <i class="fas fa-eye fa-fw nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cubes fa-fw" style="color: #915619"></i>
                        <p>
                            Barang
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/stuffs/create" class="nav-link">
                                <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/stuffs" class="nav-link">
                                <i class="fas fa-eye fa-fw nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-list-alt fa-fw" style="color: #E7D782"></i>
                        <p>
                            Kategori
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/categories/create" class="nav-link">
                                <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/categories" class="nav-link">
                                <i class="fas fa-eye fa-fw nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-tie fa-fw" style="color: #869D88"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                            {{-- <span class="badge badge-info right">6</span> --}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/users/create" class="nav-link">
                                <i class="fas fa-plus-circle fa-fw nav-icon"></i>
                                <p>Tambah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/users" class="nav-link">
                                <i class="fas fa-eye fa-fw nav-icon"></i>
                                <p>Lihat</p>
                            </a>
                    </ul>
                </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
