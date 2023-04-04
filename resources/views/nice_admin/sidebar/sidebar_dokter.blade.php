<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? '' :'collapsed' }}"  href="{{ route('dashboard') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link {{ Request::is('pasien') ? '' :'collapsed' }}" href="{{ route('pasien.index') }}">
        {{-- <a class="nav-link" href="#"> --}}
          <i class="bi bi-person"></i>
          <span>Data Pasien</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        {{-- <a class="nav-link"  href="#"> --}}
        <a class="nav-link {{ Request::is('laboratory') ? '' :'collapsed' }}"  href="{{ route('laboratory.index') }}">
          <i class="bi bi-person"></i>
          <span>Daftar Laboratorium</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        {{-- <a class="nav-link"  href="#"> --}}
        <a class="nav-link {{ Request::is('laboratory.hasil') ? '' :'collapsed' }}"  href="{{ route('laboratory.hasil') }}">
          <i class="bi bi-person"></i>
          <span>Hasil</span>
        </a>
      </li><!-- End Profile Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->