@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Pasien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Pasien</li>
          <li class="breadcrumb-item active">Edit Data Pasien</li>
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
                  <h5 class="card-title">Edit Pasien</h5>
                    <form class="row g-3" method="POST" action="{{ route('pasien.update',$pasien->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="nama" id="nama" class="form-control"
                            value="{{ $pasien->nama }}"
                            >
                            <label for="nama">Nama</label>
                            @error('nama') <span
                                class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <select name="jenis_kelamin" id="jenis_kelamin"class="form-select">
                              {{-- <option value="{{ $pasien->jenis_kelamin }}">{{ $pasien->jenis_kelamin }}</option> --}}
                              <option {{ ($pasien->jenis_kelamin == 'L' ? 'selected="selected"' : '') }} value="L">L</option>
                              <option {{ ($pasien->jenis_kelamin == 'P' ? 'selected="selected"' : '') }} value="P">P</option>
                            </select>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                          @error('jenis_kelamin') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" class="form-control" 
                            placeholder="Enter tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" >
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            @error('tanggal_lahir') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="alamat" id="alamat" class="form-control" 
                            placeholder="Enter alamat" value="{{ $pasien->alamat }}" >
                          </select>
                          <label for="alamat">Alamat</label>
                            @error('alamat') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="no_hp" id="no_hp" class="form-control" 
                            placeholder="Enter no_hp" value="{{ $pasien->no_hp }}" >
                            <label for="no_hp">Nomor Handphone</label>
                            @error('no_hp') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <select class="form-select" name="user_id" id="user_id">
                              @foreach ($dokter as $item)
                              <option {{ ($pasien->user_id == $item->id ? 'selected="selected"' : '') }} value="{{ $item->id }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                            <label for="user_id">Dokter</label>
                          @error('user_id') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <button class="btn btn-primary">Save</button>
                            <a href="{{ route('pasien.index') }}" class="btn btn-primary">Kembali</a>

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
