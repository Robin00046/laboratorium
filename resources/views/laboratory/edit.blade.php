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
                    <form method="POST" class="row g-3" action="{{ route('laboratory.update',$laboratory->id) }}" >
                      @csrf
                      @method('PUT')
                      <div class="col-md-12">
                        <div class="form-floating">
                        <input type="text" name="no_lab" id="no_lab" class="form-control" value="{{ $laboratory->no_lab }}" readonly>
                        <label for="no_lab">No Registrasi</label>
                          @error('no_lab') <span
                              class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating">
                        <select class="form-select" name="pasien_id" id="pasien_id">
                          
                          <option value="" selected>Pilih Pasien</option>
                          @foreach ($pasien as $item)
                          <option {{ ($laboratory->pasien_id == $item->id ? 'selected="selected"' : '') }} value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        <label for="pasien_id">Pasien</label>
                          @error('password') 
                          <span class="text-danger error">{{ $message }}</span>@enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="jenis_kelamin" value="{{ $laboratory->pasien->jenis_kelamin }}" readonly>
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="tanggal_lahir" value="{{ $laboratory->pasien->tanggal_lahir }}" readonly>
                          <label for="tanggal_lahir">Tanggal Lahir</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="alamat" value="{{ $laboratory->pasien->alamat }}" readonly>
                          <label for="alamat">Alamat</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-floating">
                          <input type="text" class="form-control" id="no_hp" value="{{ $laboratory->pasien->no_hp }}" readonly>
                          <label for="no_hp">No Handphone</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating">
                        <select class="form-select" name="" id="option">
                          <option value="" selected>Pilih Tes</option>
                          @foreach ($jenis as $item)
                          <option {{ ($laboratory->diagnosa->id_jenis == $item->id ? 'selected="selected"' : '') }} value="{{ $item->id }}">{{ $item->nama }}</option>
                          @endforeach
                        </select>
                        <label for="option">Tes</label>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-floating">
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
                        <label for="diagnosa">Diagnosa</label>
                        </div>
                    </div>
                      <div class="col-md-12">
                        <div class="form-floating">
                        <input type="date" name="tanggal" id="tanggal" class="form-control" id="tanggal"
                        value="{{ $laboratory->tanggal }}">
                        <label for="tanggal">Tanggal</label>
                        </div>
                        @error('tanggal') 
                        <span class="text-danger error">{{ $message }}</span>@enderror
                      </div>
                      
                      <div class="col-md-12">
                        <div class="form-floating">
                          <button class="btn btn-primary">Save</button>
                    <a href="{{ route('laboratory.index') }}" class="btn btn-primary">Kembali</a>

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
  <script>

    $(document).ready(function(){

        $("#pasien_id").change(function(){

            var pasien = $(this).val();
            
            console.log(pasien);

            $.ajax({
                url:"/getpasien/"+pasien,
                type:"GET",
                success:function(data){
                    var pasien = data.pasien;
                    $('#jenis_kelamin').val(pasien['jenis_kelamin']);
                    $('#tanggal_lahir').val(pasien['tanggal_lahir']);
                    $('#alamat').val(pasien['alamat']);
                    $('#no_hp').val(pasien['no_hp']);
                }
            });

        });

    });

</script>
  </main><!-- End #main -->
@endsection
