@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Pemeriksaan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Pemeriksaan</li>
          <li class="breadcrumb-item active">Edit Data Pemeriksaan</li>
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
                  <h5 class="card-title">Edit Pemeriksaan</h5>
                    <form class="row g-3" method="POST" action="{{ route('diagnosa.update',$diagnosa->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $diagnosa->nama }}"
                            >
                            <label for="nama">Nama</label>
                            @error('nama') <span
                            class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <select class="form-select" name="id_jenis" id="id_jenis">
                              @foreach ($jenis as $item)
                              <option {{ ($diagnosa->id_jenis == $item->id ? 'selected="selected"' : '') }} value="{{ $item->id }}">{{ $item->nama }}</option>
                              @endforeach
                            </select>
                            <label for="id_jenis">Jenis</label>
                          @error('id_jenis') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="harga" id="harga" class="form-control" value="{{ $diagnosa->harga }}"
                            >
                            <label for="harga">Harga</label>
                          @error('harga') <span
                              class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                          <button class="btn btn-primary">Save</button>
                          <a href="{{ route('diagnosa.index') }}" class="btn btn-primary">Kembali</a>
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
