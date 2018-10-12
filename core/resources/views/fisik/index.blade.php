@section('js')

<script type="text/javascript">
  $(document).ready(function() {
    $('#tab-ser').DataTable({
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
                            <strong class="card-title">Data Karyawan Rekanan</strong>
 <button type="button" class="col-md-1 btn btn-outline-secondary btn-sm float-right"><i class="ti-filter"></i>&nbsp; Find</button>
 <a href="{{ route('fisik.create') }}" class="col-md-1 btn btn-outline-primary btn-sm float-right">
 <i class="ti-plus"></i>&nbsp; Add</a>
                        </div>
                        <div class="card-body">
                  <table id="tab-ser" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Perusahaan</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Dept / Devisi</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($datas as $data)
					<tr>
					<td>{{$data->nama}}</td>
					<td>{{$data->nik}}</td>
					<td>{{$data->namakaryawan}}</td>
					<td>{{$data->dept_desc}}/{{$data->line_desc}}</td>
					 <td>
					 @if($data->flag > 0)
						<button type="button" class="btn btn-outline-secondary btn-sm" title="Sudah OK"><i class="fa fa-lightbulb-o"></i>&nbsp; OK</button>
						<a type="button" class="btn btn-outline-danger btn-sm"  href="{{ url('pdf_fisik') }}/{{$data->idfisik}}" target="_blank"><i class="ti-printer"></i>&nbsp;Danger</a>
					 @else
						<form action="{{ route('fisik.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
							<input type="hidden" name="idrek" value="{{$data->idtrf}}" />
							<button type="submit" class="btn btn-outline-success btn-sm" title="Klik Proses" onclick="return confirm('Anda yakin data ini sudah kembali?')"><i class="fa fa-magic"></i>&nbsp; ACC</button>
                          </form>
                          @endif
					 </td>
					</tr>
					@endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
				
	 			
@endsection