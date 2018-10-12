@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#bootstrap-data-table').DataTable({
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
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>NIK</th>
                        <th>Perusahaan</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Pendidikan</th>
                        <th>Tempat/Tgl Lahir</th>
                        <th>Alamat</th>
                      </tr>
                    </thead>
                    <tbody>
					@foreach($datas as $data)
                      <tr>
					  <td>{{$data->nik}}</td>
						  <td>{{$data->nama}}</td>
						  <td>{{$data->nama_k}}</td>
						  <td>{{$data->gender}}</td>
						  <td>{{$data->pendidikan}}</td>
						  <td>{{$data->tmp_lahir}} / {{$data->tgl_lahir}}</td>
						  <td>{{$data->adr_k}}</td>
                      </tr>
					@endforeach
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
@endsection