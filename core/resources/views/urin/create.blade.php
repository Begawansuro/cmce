@section('js')
<script type="text/javascript">
 var url = $('#url').val();
   $(document).on('click','#registercek',function(){
   $("#biodata").empty();
        var product_id = $(this).val();
       
        // Populate Data in Edit Modal Form
        $.ajax({
            type: "GET",
            url: url + '/' + $("#regis").val(),
            success: function (data) {
                console.log(data);
				   $("#biodata").html('');
                 for(i=0;i <data.length; i++){
				 $("#regiss").val(data[i].idtrf);
				 $("#idfisik").val(data[i].idrek);
				 $("#biodata").append('<div class="col-lg-6"><img  src="'+ data[i].photo+'" style="width:100%;height:50%"></div><div class="col-lg-6 text-center"><strong>'+ data[i].namakaryawan+'</strong><br/>Devisi:<br/>'+data[i].dept_desc+'/'+data[i].dept_desc+'</div>');
				 }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });    
  </script>
@stop

@extends('layouts.app')

@section('content')
<input id="url" type="hidden" value="{{url('jsonfisik')}}">

<div class="col-lg-12">
	<div class="card-body card-block">
		 <div class="row form-group">
                            <div class="col col-md-12">
                              <div class="input-group">
                                <input type="text" id="regis"  placeholder="NIK" class="form-control">
                                <div class="input-group-btn"><button class="btn btn-primary" id="registercek">Find</button></div>
                              </div>
                            </div>
                          </div>
	</div>	
</div>
<div class="col-lg-12">
<form action="{{ url('updateurin') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
{{ csrf_field() }}	{{ method_field('put') }}
<input type="hidden" id="regiss" name="regis">
<input type="hidden" id="idfisik" name="idfisik">
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Data</strong> Karyawan
                      </div>
                      <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center" >Biodata</h3>
                                  </div>
                                  <hr>
								<div id="biodata"></div>
                              </div>
                    </div>
					<div class="card">
                      <div class="card-header">
                        <strong>Urin Lengkap</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-text" class=" form-control-label">Warna-Kejerniahan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="uri1" placeholder="Enter Input..." class="form-control">
							<!--
							<span class="help-block">Please enter your email</span>
							-->
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Berat Jenis</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri2" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">pH</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri3" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Protein(ALbumin)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri4" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Glukosa</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri5" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Keton</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri6" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Biliribun</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri7" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Urobulinogen</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri8" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Leukosit(Esterase)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri9" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Darah (Haem)</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri10" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Nitrit</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri11" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">LECO</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="uri12" placeholder="Enter Input..." class="form-control">
							</div>
                          </div>
						  
						  
							<div class="col-lg-12">
							<div class="card">
								<div class="card-header">
									<strong>Sedimen</strong>
								  </div>
								 <div class="card-body card-block">
								 <div class="row form-group">
										<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Eritrosit urin</label></div>
										<div class="col-12 col-md-9"><input type="text" id="hf-data" name="sed1" placeholder="Enter Input..." class="form-control">
										</div>
									</div>
									 <div class="row form-group">
										<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Leukosit urin</label></div>
										<div class="col-12 col-md-9"><input type="text" id="hf-data" name="sed2" placeholder="Enter Input..." class="form-control">
										</div>
									</div>
									 <div class="row form-group">
										<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Ephitel</label></div>
										<div class="col-12 col-md-9"><input type="text" id="hf-data" name="sed3" placeholder="Enter Input..." class="form-control">
										</div>
									</div>
									 <div class="row form-group">
										<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Silinder</label></div>
										<div class="col-12 col-md-9"><input type="text" id="hf-data" name="sed4" placeholder="Enter Input..." class="form-control">
										</div>
									</div>
									 <div class="row form-group">
										<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Kristal</label></div>
										<div class="col-12 col-md-9"><input type="text" id="hf-data" name="sed5" placeholder="Enter Input..." class="form-control">
										</div>
									</div>
									 <div class="row form-group">
										<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">lain-lain</label></div>
										<div class="col-12 col-md-9"><input type="text" id="hf-data" name="sed6" placeholder="Enter Input..." class="form-control">
										</div>
									</div>
								 </div>
							</div>
						  
						  
						  
						  
						  
                      </div>
                      
                    </div>
                 
					
			</div>
		</div>	
			<div class="col-lg-6">
                <!-- tanda vital-->
							<div class="card">
								<div class="card-header">
									<strong>Faeces</strong> Lengkap
								  </div>
								 <div class="card-body card-block">
									<div class="row form-group">
										<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Konsistensi</label></div>
											<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae1" placeholder="Enter Input..." class="form-control">
											</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Warna</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae2" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Darah Samar</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae3" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Lendir</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae4" placeholder="Enter Input..." class="form-control">
												</div>
										</div>	
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Eritrosit</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae5" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Leukosit</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae6" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Amoeba</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae7" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Kristal</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae8" placeholder="Enter Input..." class="form-control">
												</div>
										</div>	
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Telur Cacing</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae9" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Kristal</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae10" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Lain-lain</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae11" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Thorax PA</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae12" placeholder="Enter Input..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">ECG</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae13" placeholder="Enter Input..." class="form-control">
												</div>
										</div>	
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Fisik Dokter</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="Fae14" placeholder="Enter Input..." class="form-control">
												</div>
										</div>			
								</div> 
							</div>   
	  </div>
	  
  
<div class="col-lg-12">
<div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
</form>
</div>		
</div>
@endsection