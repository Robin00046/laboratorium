@extends('nice_admin.main')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Data Laboratory</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Laboratory</li>
          <li class="breadcrumb-item active">Edit Data Laboratory</li>
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
                  <h5 class="card-title">Edit Laboratory</h5>
                    <a href="{{ route('laboratory.index') }}" class="btn btn-primary btn-sm mb-2">Kembali</a>
                    <form method="POST" action="{{ route('laboratory.update',$laboratory->id) }}" >
                      @csrf
                      @method('PUT')
                      <div class="form-group">
                          <label for="exampleFormControlInput1">No Registrasi</label>
                          <input type="text" name="no_lab" id="no_lab" class="form-control"
                                 id="exampleFormControlInput1" value="{{ $laboratory->no_lab }}" readonly>
                          @error('no_lab') <span
                              class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      
                      <div class="form-group">
                          <label for="exampleFormControlInput1">Pasien</label>
                          <select class="form-select" name="pasien_id" id="pasien_id">
                            
                            <option value="" selected>Pilih Pasien</option>
                            @foreach ($pasien as $item)
                            <option {{ ($laboratory->pasien_id == $item->id ? 'selected="selected"' : '') }} value="{{ $item->id }}">{{ $item->nama }}</option>
                            @endforeach
                          </select>
                          @error('password') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Tes</label>
                        <select class="form-select" name="" id="option">
                          <option value="" selected>Pilih Tes</option>
                          @foreach ($jenis as $item)
                          <option {{ ($laboratory->diagnosa->id_jenis == $item->id ? 'selected="selected"' : '') }} value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="mb-3">
                        <label for="Diagnosa" class="form-label">Diagnosa</label>
                        <select class="form-select" name="diagnosa_id" id="diagnosa" required>
                          <option value="">Select Plan</option>
                          @foreach($diagnosa as $diagnosa)
                              @if($laboratory['diagnosa_id'] == $diagnosa->id)
                                  <option value="{{ $diagnosa->id }}" selected>{{$diagnosa->nama}}</option>
                              @else
                                  <option value="{{ $diagnosa->id }}">{{$diagnosa->nama}}</option>
                              @endif
                          @endforeach
                      </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">Tanggal</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" id="exampleFormControlInput1"
                               value="{{ $laboratory->tanggal }}">
                        @error('tanggal') 
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>

      $(document).ready(function(){
  
          $("#option").change(function(){
  
              var diagnosaID = $(this).val();
              if(diagnosaID == ""){
                  $("#Diagnosa").html("<option value=''>Select Plan</option>");
              }
  
              $.ajax({
                  url:"/getdiagnosa/"+diagnosaID,
                  type:"GET",
                  success:function(data){
                      var diagnosa = data.diagnosa;
                      var html = "<option value=''>Select Plan</option>";
                      for(let i =0;i<diagnosa.length;i++){
                          html += `
                          <option value="`+diagnosa[i]['id']+`">`+diagnosa[i]['nama']+`</option>
                          `;
                      }
                      $("#diagnosa").html(html);
                  }
              });
  
          });
  
      });
  
  </script>
  </main><!-- End #main -->
@endsection
