@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar User</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Daftar User</li>
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
                  <h5 class="card-title">Data User </h5>
                    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-2">Tambah User</a>
                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr>
                        <th scope="row"><a href="#">{{ $loop->iteration }}</a></th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <a href="{{ route('user.edit',$item->id) }}"><span class="badge bg-warning">Edit</span></a>
                            <form action="{{ route('user.destroy',$item->id) }}" method="POST" onclick="return confirm('Are you sure?')">
                                @method('DELETE')
                                @csrf
                                <button class="badge bg-danger" >
                                    Hapus
                                </button>          
                               </form>
                        </td>
                      </tr>
                        @endforeach
                      
                      
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
