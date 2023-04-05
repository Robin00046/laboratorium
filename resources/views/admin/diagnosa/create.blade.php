@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Diagnosa</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Diagnosa</li>
          <li class="breadcrumb-item active">Tambah Data Diagnosa</li>
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
                  <h5 class="card-title">Tambah Diagnosa</h5>
                    <a href="{{ route('diagnosa.index') }}" class="btn btn-primary btn-sm mb-2">Kembali</a>
                    <form method="POST" action="{{ route('diagnosa.store') }}" >
                      @csrf
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Jenis</label>
                          <select class="form-select" name="id_jenis" id="id_jenis">
                            <option value="" selected>Pilih Jenis</option>
                            @foreach ($jenis as $item)
                                @if ($item->id == old('id_jenis'))
                                    <option value="{{ $item->id }}" selected>{{ $item->nama }}</option>
                                @else
                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('id_jenis') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control"
                               id="exampleFormControlInput1" placeholder="Enter Nama" value="{{ old('nama') }}" >
                        @error('nama') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control"
                               id="exampleFormControlInput1" placeholder="Enter keterangan" value="{{ old('keterangan') }}"
                               >
                        @error('keterangan') <span
                            class="text-danger error">{{ $message }}</span>@enderror
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
