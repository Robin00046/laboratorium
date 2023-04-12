@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Daftar Pasien</li>
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
                  <h5 class="card-title">Data Pasien </h5>
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Pasien</a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Jenis Kelamin</th>
                        <th scope="col" class="text-center">Tanggal Lahir</th>
                        <th scope="col" class="text-center">Alamat</th>
                        <th scope="col" class="text-center">No HP</th>
                        <th scope="col" class="text-center">Dokter</th>
                        @hasrole('Admin')
                        <th scope="col" class="text-center">Aksi</th>
                        @endhasrole
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($pasien as $item)
                            <tr>
                        <th scope="row" class="text-center"><a href="#">{{ $loop->iteration }}</a></th>
                        <td class="text-center">{{ $item->nama }}</td>
                        <td class="text-center">{{ $item->jenis_kelamin }}</td>
                        <td class="text-center">{{ $item->tanggal_lahir }}</td>
                        <td class="text-center">{{ $item->alamat }}</td>
                        <td class="text-center">{{ $item->no_hp }}</td>
                        <td class="text-center">{{ $item->dokter }}</td>
                        @hasrole('Admin')
                        <td class="text-center">
                            <a href="{{ route('pasien.edit',$item->id) }}"><span class="btn btn-warning "><i class="bx bx-pencil"></i></span></a>
                            <form class="d-inline" action="{{ route('pasien.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger border-0" >
<i class="bx bxs-trash"></i>
                                    
                                </button>          
                               </form>
                        </td>
                        @endhasrole
                      </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">Data Kosong</td>
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
