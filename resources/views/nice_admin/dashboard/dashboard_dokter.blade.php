@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
<div class="row">
  <!-- Reports -->
  <div class="col-16">
    <div class="card">
      <div class="card-body">
        <h3 class="text-center mt-3">
          Selamat datang di halaman Dokter
        </h3>
      </div>
    </div>
  </div><!-- End Reports -->
   <!-- Left side columns -->
   <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card sales-card">
          <a href="{{ route('pasien.index') }}">
          <div class="card-body">
            <h5 class="card-title">Jumlah Pasien</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-people"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $pasien }}</h6>
              </div>
            </div>
          </div>
          </a>
        </div>
      </div><!-- End Sales Card -->

      <!-- Revenue Card -->
      <div class="col-xxl-4 col-md-6">
        <div class="card info-card revenue-card">
          <a href="{{ route('laboratory.index') }}">
          <div class="card-body">
            <h5 class="card-title">Jumlah Daftar</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-clipboard-plus"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $daftar }}</h6>
              </div>
            </div>
          </div>
          </a>
        </div>
      </div><!-- End Revenue Card -->

      <!-- Customers Card -->
      <div class="col-xxl-4 col-xl-12">

        <div class="card info-card customers-card">
          <a href="{{ route('laboratory.hasil') }}">
          <div class="card-body">
            <h5 class="card-title">Jumlah Hasil</h5>

            <div class="d-flex align-items-center">
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                <i class="bi bi-clipboard2-check"></i>
              </div>
              <div class="ps-3">
                <h6>{{ $selesai }}</h6>
              </div>
            </div>

          </a>
          </div>
        </div>

      </div><!-- End Customers Card -->

    </div>
  </div><!-- End Left side columns -->

</div>

     
</section>

</main><!-- End #main -->
@endsection