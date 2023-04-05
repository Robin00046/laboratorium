@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Jenis</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Jenis</li>
          <li class="breadcrumb-item active">Edit Data Jenis</li>
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
                  <h5 class="card-title">Edit Jenis</h5>
                    <a href="{{ route('jenis.index') }}" class="btn btn-primary btn-sm mb-2">Kembali</a>
                    <form method="POST" action="{{ route('jenis.update',$jenis->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama {{ $jenis->id }}</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                   id="exampleFormControlInput1" value="{{ old('nama',$jenis->nama) }}"
                                   >
                            @error('nama') <span
                                class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Keterangan</label>
                          <input type="text" name="keterangan" id="keterangan" class="form-control"
                                 id="exampleFormControlInput1" value="{{ old('keterangan',$jenis->keterangan) }}"
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
