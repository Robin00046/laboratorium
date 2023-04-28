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
                        <th scope="col" class="text-center">#</th>
                        <th scope="col" class="text-center">Nomor Pendaftaran</th>
                        <th scope="col" class="text-center">Nama Pasien</th>
                        <th scope="col" class="text-center">Tes</th>
                        <th scope="col" class="text-center">Tanggal</th>
                        <th scope="col" class="text-center">Aksi</th>
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
                            @role('Dokter')
                            <td class="text-center">
                                <a href="{{ route('laboratory.edit',$item->id) }}"><span class="btn btn-warning "><i class="bx bx-pencil"></i></span></a>
                                <form class="d-inline" action="{{ route('laboratory.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger border-0" >
<i class="bx bxs-trash"></i>
                                        
                                    </button>          
                                   </form>
                            </td>
                            @endrole
                            @role('Lab')
                            <td class="text-center">
                              <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modaledit{{ $item->id }}">
                                Input Hasil
                              </button>
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
    @foreach ($lab as $item)
        @php
            $id = $item->id
        @endphp
    <div class="modal fade" id="modaledit{{$id}}" tabindex="-1">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Input Hasil</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form  action="{{ route('hasil.update_hasil',$item->id) }}"
                              method="post">
                              @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Input Hasil</label>
                                <input class="form-control" min="0" max="100" type="number" name="hasil" id="hasil">
                                @error('hasil')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-primary">Save changes</button>
                            </div> 
                </form>
              </div>
              
            </div>
          </div>
        </div>
        @endforeach
  </main><!-- End #main -->
@endsection
