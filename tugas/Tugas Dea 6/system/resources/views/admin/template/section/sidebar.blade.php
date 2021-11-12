  @php
      function checkRouteActive($route)
      {
          if (Route::current()->uri == $route) {
              return 'active';
          }
      }
  @endphp
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
          <img src="{{ url('public') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">DM Watcher</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <a href="{{ url('login') }}" class="d-block">
              <div class="info">
                @if (Auth::check())
                    {{ request()->user()->username }}
                @else
                    silakan login
                @endif
            </div>
            </a>
              
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="{{ url('admin/beranda') }}" class="nav-link {{ checkRouteActive('beranda') }}">
                          <i class="fas fa-home"></i>
                          <p>
                              Beranda
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('admin/produk') }}" class="nav-link {{ checkRouteActive('produk') }}">
                          <i class="fab fa-shopify"></i>
                          <p>
                              Produk
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('admin/kategori') }}" class="nav-link {{ checkRouteActive('kategori') }}">
                          <i class="fas fa-list-ul"></i>
                          <p>
                              Kategori
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('admin/promo') }}" class="nav-link {{ checkRouteActive('promo') }}">
                          <i class="fas fa-percent"></i>
                          <p>
                              Promo
                          </p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ url('admin/user') }}" class="nav-link {{ checkRouteActive('user') }}">
                          <i class="fas fa-user"></i>
                          <p>
                              User
                          </p>
                      </a>
                  </li>
              </ul>
          </nav>
      </div>
  </aside>
