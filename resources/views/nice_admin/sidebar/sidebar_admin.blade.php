<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard_admin') ? '' :'collapsed' }}"  href="{{ route('dashboard_admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        {{-- <a class="nav-link {{ Request::is('product') ? '' :'collapsed' }}" href="{{ route('product.index') }}"> --}}
          <a class="nav-link {{ Request::is('user') ? '' :'collapsed' }}"  href="{{ route('user.index') }}">
          <i class="bi bi-person"></i>
          <span>Data User</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::is('pasien') ? '' :'collapsed' }}" href="{{ route('pasien.index') }}">
        {{-- <a class="nav-link" href="#"> --}}
          <i class="bi bi-person"></i>
          <span>Data Pasien</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::is('jenis') ? '' :'collapsed' }}" href="{{ route('jenis.index') }}">
        {{-- <a class="nav-link" href="#"> --}}
          <i class="bi bi-person"></i>
          <span>Data Jenis</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::is('diagnosa') ? '' :'collapsed' }}" href="{{ route('diagnosa.index') }}">
        {{-- <a class="nav-link" href="#"> --}}
          <i class="bi bi-person"></i>
          <span>Data Diagnosa</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->