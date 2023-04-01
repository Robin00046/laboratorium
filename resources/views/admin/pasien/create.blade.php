@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Pasien</li>
          <li class="breadcrumb-item active">Tambah Data Pasien</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      {{-- <div class="row"> --}}

        <!-- Left side columns -->
        <div class="col-lg-16">
          <div class="row">
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="card-body">
                  <h5 class="card-title">Tambah Pasien</h5>
                    <a href="{{ route('pasien.index') }}" class="btn btn-primary btn-sm mb-2">Kembali</a>
                    <form method="POST" action="{{ route('pasien.store') }}" >
                      @csrf
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                               id="exampleFormControlInput1" placeholder="Enter Nama"
                               >
                        @error('nama') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin"class="form-select">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                        @error('jenis_kelamin') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter tanggal_lahir">
                        @error('tanggal_lahir') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter alamat"  >
                        </select>
                        @error('alamat') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">No Handphone</label>
                        <input type="text" name="no_hp" id="no_hp" class="form-control" id="exampleFormControlInput1"
                               placeholder="Enter no_hp" >
                        </select>
                        @error('no_hp') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Dokter</label>
                        <select class="form-select" name="user_id" id="user_id">
                          <option value="" selected>Pilih Dokter</option>
                          @foreach ($dokter as $item)
                              <option value="{{ $item->id }}">{{ $item->name }}</option>
                          @endforeach
                      </select>
                      @error('user_id') 
                      <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                    
                    <div class="form-group">
                        <button class="btn btn-primary mt-3">Save</button>
                    </div>

                  </form>
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
