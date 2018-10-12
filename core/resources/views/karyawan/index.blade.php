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
 <a href="{{ route('karyawan.create') }}" class="col-md-1 btn btn-outline-primary btn-sm float-right">
 <i class="ti-plus"></i>&nbsp; Add</a>
                        </div>
                        <div class="card-body">
                  <table id="tab-ser" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Photo</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Dept / Devisi</th>
                        <th>Jabatan</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($datas as $data)
                      <tr>
					  <td>
					  @if($data->photo)
							<img class="user-avatar rounded-circle" src="{{$data->photo}}" alt="User Avatar" style="width:60px;height:60px">
                          @else
							<img class="user-avatar rounded-circle" src="{{url('images/default.png')}}" alt="User Avatar" style="width:60px;height:60px">
                          @endif
						  
					  </td>
						<td>{{$data->nik}}</td>
						  <td>{{$data->namakaryawan}}</td>
						  <td>{{$data->gender}}</td>
						  <td>{{$data->dept_desc}} / {{$data->line_desc}}</td>
						  <td>{{$data->jabatan_desc}}</td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
				
	 			
@endsection
