@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Daftar Laboratory</li>
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
                  <h5 class="card-title">Data Laboratory </h5>
                  @role('Dokter')
                    <a href="{{ route('laboratory.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Laboratory</a>
                    @endrole
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Pendaftaran</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tes</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($lab as $item)
                        <tr>
                            <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                            <td>{{ $item->no_lab }}</td>
                            <td>{{ $item->pasien }}</td>
                            <td>{{ $item->diagnosa }}</td>
                            <td>{{ $item->tanggal }}</td>
                            @role('Dokter')
                            <td>
                                <a href="{{ route('laboratory.edit',$item->id) }}"><span class="badge bg-warning">Edit</span></a>
                                <form action="{{ route('laboratory.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="badge bg-danger" >
                                        Hapus
                                    </button>          
                                   </form>
                            </td>
                            @endrole
                            @role('Lab')
                            <td>
                                <span class="badge bg-warning">Detail</span>
                            </td>
                            @endrole

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
