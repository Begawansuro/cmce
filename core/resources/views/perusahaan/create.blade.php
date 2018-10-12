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
<form action="{{ route('perusahaan.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
						 {{ csrf_field() }}
                    <div class="card">
                      <div class="card-header">
                        <strong>Form Input</strong> Perusahaan
                      </div>
                      <div class="card-body card-block">
                        
                          <div class="row form-group{{ $errors->has('npwp') ? ' has-error' : '' }}">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">NPWP</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="npwp" placeholder="NPWP" class="form-control" value="{{ old('npwp') }}" required>
							@if ($errors->has('npwp'))
							<small class="form-text text-muted">Warning..{{$errors->first('npwp') }}</small>
							 @endif
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama Perusahaan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="email-input" name="namapt" placeholder="Perusahaan" class="form-control" value="{{ old('namapt') }}" required>@if ($errors->has('namapt'))
							<small class="form-text text-muted">Warning..{{$errors->first('namapt') }}</small>
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