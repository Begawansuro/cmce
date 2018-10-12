@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#tab-per').DataTable({
      "iDisplayLength": 10
    });

} );
</script>
@stop
@extends('layouts.app')

@section('content')
 <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Data Perusahaan Rekanan</strong>
 <button type="button" class="col-md-1 btn btn-outline-secondary btn-sm float-right"><i class="ti-filter"></i>&nbsp; Find</button>
 <a href="{{ route('perusahaan.create') }}" class="col-md-1 btn btn-outline-primary btn-sm float-right">
 <i class="ti-plus"></i>&nbsp; Add</a>
                        </div>
                        <div class="card-body">
                  <table id="tab-per" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>NPWP</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($datas as $data)
                      <tr>
					  <td>
                            {{$data->npwp}}
                          </td>
						  <td>
                            {{$data->nama}}
                          </td>
						  <td>
                            {{$data->adr}}
                          </td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
@endsection