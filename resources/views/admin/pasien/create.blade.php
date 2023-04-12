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
                    
                    <form class="row g-3" method="POST" action="{{ route('pasien.store') }}" >
                      @csrf
                      <div class="col-md-12">
                        <div class="form-floating">
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Nama" value="{{ old('nama') }}">
                        <label for="nama">Nama</label>
                        @error('nama') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                      <select name="jenis_kelamin" id="jenis_kelamin"class="form-select" >
                        <option value="" selected>Pilih Jenis Kelamin</option>
                        <option value="L">L</option>
                        <option value="P">P</option>
                      </select>
                      <label for="jenis_kelamin">Jenis Kelamin</label>
                        @error('jenis_kelamin') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                      <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" 
                      placeholder="Enter tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                      <label for="tanggal_lahir">Tanggal lahir</label>
                      @error('tanggal_lahir') 
                      <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                      <input type="text" name="alamat" id="alamat" class="form-control" 
                      placeholder="Enter alamat" value="{{ old('alamat') }}" >
                    </select>
                    <label for="alamat">Alamat</label>
                        @error('alamat') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                      <input type="text" name="no_hp" id="no_hp" class="form-control" 
                      placeholder="Enter no_hp" value="{{ old('no_hp') }}" >
                    </select>
                    <label for="no_hp">No Handphone</label>
                        @error('no_hp') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-floating">
                      <select class="form-select" name="user_id" id="user_id">
                        <option value="" selected>Pilih Dokter</option>
                        @foreach ($dokter as $item)
                        @if ($item->id == old('user_id'))
                            <option value="{{ $item->id }}" selected>{{ $item->name }}</option>
                            @else
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endif
                        @endforeach
                      </select>
                      <label for="user_id">Dokter</label>
                      @error('user_id') 
                      <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                    </div>
                    
                    <div class="col-md-12">
                      <div class="form-floating">
                        <button class="btn btn-primary mt-3">Save</button>
                        <a href="{{ route('pasien.index') }}" class="btn btn-primary mt-3">Kembali</a>
                      </div>
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
