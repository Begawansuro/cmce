@section('js')

<script type="text/javascript">

$(document).ready(function() {
    $(".users").select2();
});

</script>

<script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        </script>
@stop

@extends('layouts.app')

@section('content')

<div class="col-lg-12">
<form action="{{ route('karyawan.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
						 {{ csrf_field() }}
                    <div class="card">
                      <div class="card-header">
                        <strong>Form Input</strong> Dokter
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">NIK</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="nik" placeholder="NIK Karyawan" class="form-control" value="{{ old('nik') }}" required>@if ($errors->has('nik'))
							<small class="form-text text-muted">Warning..{{$errors->first('nik') }}</small>
							 @endif</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama Dokter</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="nama" placeholder="Nama Karyawan" class="form-control" value="{{ old('nama') }}" required>@if ($errors->has('nama'))
							<small class="form-text text-muted">Warning..{{$errors->first('nama') }}</small>
							 @endif</div>
                          </div>
						   <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Gender</label></div>
                            <div class="col-12 col-md-9">
							<select name="gender" id="multiple-select" multiple="" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Women">Women</option>
                              </select>
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Specialis</label></div>
                            <div class="col-12 col-md-9">
							<select name="gender" id="multiple-select" multiple="" class="form-control">
                                <option value="Male">UMUM</option>
                                <option value="Women">GIGI</option>
                              </select>
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Pendidikan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="pendidikan" placeholder="Pendidikan" class="form-control" value="{{ old('Pendidikan') }}" required>@if ($errors->has('Pendidikan'))
							<small class="form-text text-muted">Warning..{{$errors->first('Pendidikan') }}</small>
							 @endif</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Tempat / Tgl Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="Tmppat" placeholder="Tempat Tgl Lahir" class="form-control" value="{{ old('Pendidikan') }}" required>@if ($errors->has('Pendidikan'))
							<small class="form-text text-muted">Warning..{{$errors->first('Pendidikan') }}</small>
							 @endif</div>
                          </div>
						  
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><textarea name="adr" id="textarea-input" rows="6" placeholder="Alamat..." class="form-control" required>{{ old('adr') }}</textarea>@if ($errors->has('adr'))
							<small class="form-text text-muted">Warning..{{$errors->first('adr') }}@endif</div>
                          </div>
                          
                      
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>
                     </form>
                  </div>
@endsection