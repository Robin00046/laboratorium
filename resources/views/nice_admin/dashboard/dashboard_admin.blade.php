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
            Selamat datang di halaman Admin
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

             
              <a href="{{ route('user.index') }}">
              <div class="card-body">
                <h5 class="card-title">Jumlah Semua User</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $user }}</h6>

                  </div>
                </div>
              </div>
            </a>
            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">
              <a href="{{ route('user.index') }}">
              <div class="card-body">
                <h5 class="card-title">Jumlah Dokter</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $dokter }}</h6>
                  </div>
                </div>
              </div>

            </a>
            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">
              <a href="{{ route('user.index') }}">
              <div class="card-body">
                <h5 class="card-title">Jumlah Admin Laboratory</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $lab }}</h6>
                  </div>
                </div>
              </div>
            </a>
            </div>

          </div>
          <!-- End Customers Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">
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
              </a>
              </div>
              
            </div>

          </div>
          <!-- End Customers Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">

             
              <a href="{{ route('jenis.index') }}">
              <div class="card-body">
                <h5 class="card-title">Jumlah Jenis Diagnosa</h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>{{ $jenis }}</h6>
                  </div>
                </div>

              </div>
            </a>
            </div>

          </div>
          <!-- End Customers Card -->
          <!-- End Customers Card -->
          <div class="col-xxl-4 col-md-6">

            <div class="card info-card customers-card">
              <a href="{{ route('diagnosa.index') }}">
                <div class="card-body">
                  <h5 class="card-title">Jumlah Diagnosa</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $diagnosa }}</h6>
                    </div>
                  </div>
                </div>
              </a>
            </div>

          </div>
          <!-- End Customers Card -->

        </div>
      </div><!-- End Left side columns -->

</div>
     
</section>

</main><!-- End #main -->
@endsection