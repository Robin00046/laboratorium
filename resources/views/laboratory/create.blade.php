@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Tambah Data Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Data Laboratory</li>
          <li class="breadcrumb-item active">Tambah Data Laboratory</li>
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
                  <h5 class="card-title">Tambah Laboratory</h5>
                    <a href="{{ route('laboratory.index') }}" class="btn btn-primary btn-sm mb-2">Kembali</a>
                    <form method="POST" action="{{ route('laboratory.store') }}" >
                      @csrf
                      <div class="form-group">
                          <label for="exampleFormControlInput1">No Registrasi</label>
                          <input type="text" name="name" id="name" class="form-control"
                                 id="exampleFormControlInput1" value="{{ $value }}" readonly>
                          @error('name') <span
                              class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Email</label>
                          <input type="text" name="email" id="email" class="form-control" id="exampleFormControlInput1"
                                 placeholder="Enter Email" >
                          @error('email') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Password</label>
                          <input type="password" name="password" id="password" class="form-control" id="exampleFormControlInput1"
                                 placeholder="Enter Password" >
                          @error('password') 
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
