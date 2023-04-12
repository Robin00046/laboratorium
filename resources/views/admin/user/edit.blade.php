@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">User</li>
          <li class="breadcrumb-item active">Edit Data User</li>
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
                  <h5 class="card-title">Edit User</h5>
                    <form method="POST" class="row g-3" action="{{ route('user.update',$user->id) }}" >
                      @csrf
                      @method('PUT')
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                            <label for="name">Nama</label>
                            @error('name') <span
                                class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="text" name="email" id="email" class="form-control" value="{{ $user->email }}">
                            <label for="email">Email</label>
                            @error('email') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" >
                            <label for="password">Password</label>
                            @error('password') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-floating">
                            <select class="form-select" name="role" id="role">
                              @foreach ($roles as $item)
                              <option {{ ($user->role_id == $item->id ? 'selected="selected"' : '') }} value="{{ $item->name }}">{{ $item->name }}</option>
                              @endforeach
                            </select>
                            <label for="role">Role</label>
                            @error('role') 
                            <span class="text-danger error">{{ $message }}</span>@enderror
                          </div>
                        </div>
                        
                        
                        <div class="col-md-12">
                          <div class="form-floating">
                            <button class="btn btn-primary">Save</button>
                            <a href="{{ route('user.index') }}" class="btn btn-primary">Kembali</a>

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
