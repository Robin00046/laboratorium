@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Diagnosa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Daftar Diagnosa</li>
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
                  <h5 class="card-title">Data Diagnosa </h5>
                    <a href="{{ route('diagnosa.create') }}" class="btn btn-primary btn-sm mb-2">Tambah Diagnosa</a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Jenis</th>
                        <th scope="col">Nama</th>
                        @hasrole('Admin')
                        <th scope="col">Aksi</th>
                        @endhasrole
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($diagnosa as $item)
                            <tr>
                        <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                        <td>{{ $item->nama_jenis }}</td>
                        <td>{{ $item->nama }}</td>
                        @hasrole('Admin')
                        <td>
                            <a href="{{ route('diagnosa.edit',$item->id) }}"><span class="badge bg-warning">Edit</span></a>
                            <form action="{{ route('diagnosa.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger" >
                                    Hapus
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
