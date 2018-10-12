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
<form action="{{ url('updatefisik') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                        <strong>Antropometri</strong>
                      </div>
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-text" class=" form-control-label">Tinggi Badan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="an1" placeholder="Enter Tinggi Badan..." class="form-control">
							<!--
							<span class="help-block">Please enter your email</span>
							-->
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Berat Badan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="an2" placeholder="Enter Berat Badan..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">BMI</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="an3" placeholder="Enter BMI..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Katergori BMI</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="an4" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
                      </div>
                      
                    </div>
                 
					
			</div>

			<div class="col-lg-6">
                <!-- tanda vital-->
							<div class="card">
								<div class="card-header">
									<strong>Tanda</strong> Vital
								  </div>
								 <div class="card-body card-block">
									<div class="row form-group">
										<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Nadi</label></div>
											<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tan1" placeholder="Enter Nadi..." class="form-control">
											</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Respirasi</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tan2" placeholder="Enter Respirasi..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Suhu Tubuh</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tan3" placeholder="Enter Suhu Tubuh..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Tekanan Darah</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tan4" placeholder="Enter Tekanan Darah..." class="form-control">
												</div>
										</div>	
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Kategori JNV VII(Sistotik)</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tan5" placeholder="Enter Kategori JNV..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Kategori JNV VII(Diastotik)</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tan6" placeholder="Enter Kategori JNV..." class="form-control">
												</div>
										</div>
									
								</div> 
							</div>   
					 <!--Visur dan refraksi -->
					 <div class="card">
                      <div class="card-header">
                        <strong>Visur </strong> Dan Refraksi
                      </div>
                      <div class="card-body card-block">
					 <div class="row form-group">
									<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Visir Kanan</label></div>
									<div class="col-12 col-md-9"><input type="text" id="hf-data" name="vis1" placeholder="Enter Visur Kanan..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Visur Kiri</label></div>
									<div class="col-12 col-md-9"><input type="text" id="hf-data" name="vis2" placeholder="Enter Visur Kiri..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Rekomendasi Kaca Mata</label></div>
									<div class="col-12 col-md-9"><input type="text" id="hf-data" name="vis3" placeholder="Enter Rekomendasi Kaca Mata..." class="form-control">
									</div>
								</div>
                      </div>
                      
                    </div>			
					
	  </div>
	  <div class="col-lg-6">
		 <div class="card">
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-text" class=" form-control-label">Kepala</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="fis1" placeholder="Enter Tinggi Badan..." class="form-control">
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Mata</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis2" placeholder="Enter Berat Badan..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Telinga</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis3" placeholder="Enter BMI..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Hidung</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis4" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Tenggorokan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis5" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Leher</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis6" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						 
                      </div>
                      
		</div>
		</div>
		 <div class="col-lg-6">
		<div class="card">
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-text" class=" form-control-label">Gigi</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="fis7" placeholder="Enter Tinggi Badan..." class="form-control">
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Mulut</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis8" placeholder="Enter Berat Badan..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Dada</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis9" placeholder="Enter BMI..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Abdomen</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis10" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Ekstremitas</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis11" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Anogental</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="fis12" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
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