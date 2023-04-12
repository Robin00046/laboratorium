@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Hasil Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Hasil Laboratory</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <section class="section dashboard">
      {{-- <div class="row"> --}}

        <!-- Left side columns -->
        <div class="col-lg-16">
          <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Hasil Laboratory </h5>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nomor Pendaftaran</th>
                        <th scope="col" class="text-center">Nama Pasien</th>
                        <th scope="col" class="text-center">Tes</th>
                        <th scope="col" class="text-center">Tanggal</th>
                        <th scope="col" class="text-center">Hasil</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($lab as $item)
                        <tr>
                            <th scope="row" class="text-center"><a href="#">{{ $loop->iteration }}</a></th>
                            <td class="text-center">{{ $item->no_lab }}</td>
                            <td class="text-center">{{ $item->pasien }}</td>
                            <td class="text-center">{{ $item->diagnosa }}</td>
                            <td class="text-center">{{ $item->tanggal }}</td>
                            <td class="text-center">{{ $item->hasil }}</td>
                            

                          </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                      
                      
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->
          </div>
        </div><!-- End Left side columns -->


      {{-- </div> --}}
      
    </section>
  </main><!-- End #main -->
@endsection
