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
                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>
				
	 			
@endsection
