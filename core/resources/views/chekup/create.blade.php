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
	<div class="card-body card-block">
		 <div class="row form-group">
                            <div class="col col-md-12">
                              <div class="input-group">
                                <input type="text" id="input2-group2" name="input2-group2" placeholder="NIK" class="form-control">
                                <div class="input-group-btn"><button class="btn btn-primary">Find</button></div>
                              </div>
                            </div>
                          </div>
	</div>	
</div>
<div class="col-lg-12">
            <div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Basic Data</strong> Karyawan
                      </div>
                      <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">Biodata</h3>
                                  </div>
                                  <hr>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-email" name="hf-email" placeholder="Enter Email..." class="form-control"><span class="help-block">Please enter your email</span></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-data" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="hf-data" placeholder="Enter Password..." class="form-control"><span class="help-block">Please enter your password</span></div>
                          </div>
                              </div>
                    </div>
                   
					<!-- tanda vital-->
					
							<div class="card">
								<div class="card-header">
									<strong>Tanda</strong> Vital
								  </div>
								 <div class="card-body card-block">
									<div class="row form-group">
										<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Nadi</label></div>
											<div class="col-12 col-md-9"><input type="text" id="hf-data" name="nadi" placeholder="Enter Nadi..." class="form-control">
											</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Respirasi</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="respirasi" placeholder="Enter Respirasi..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Suhu Tubuh</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="suhutubuh" placeholder="Enter Suhu Tubuh..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Tekanan Darah</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="tekanandarah" placeholder="Enter Tekanan Darah..." class="form-control">
												</div>
										</div>	
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Kategori JNV VII(Sistotik)</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="jnv3" placeholder="Enter Kategori JNV..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Kategori JNV VII(Diastotik)</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="jnv2" placeholder="Enter Kategori JNV..." class="form-control">
												</div>
										</div>
									<div class="row form-group">
											<div class="col col-md-3"><label for="hf-data" class=" form-control-label">Rekomendasi Kaca Mata</label></div>
												<div class="col-12 col-md-9"><input type="text" id="hf-data" name="kacamata" placeholder="Enter Rekomendasi Kaca Mata..." class="form-control">
												</div>
										</div>	
									
								</div> 
							</div>
			</div>

			<div class="col-lg-6">
                    <div class="card">
                      <div class="card-header">
                        <strong>Antropometri</strong>
                      </div>
                      <div class="card-body card-block">
					  <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-text" class=" form-control-label">Tinggi Badan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="tinggi" placeholder="Enter Tinggi Badan..." class="form-control">
							<!--
							<span class="help-block">Please enter your email</span>
							-->
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Berat Badan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="berat" placeholder="Enter Berat Badan..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">BMI</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="bmi" placeholder="Enter BMI..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Katergori BMI</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  </form>
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
									<div class="col-12 col-md-9"><input type="text" id="hf-data" name="visurkanan" placeholder="Enter Visur Kanan..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Visur Kiri</label></div>
									<div class="col-12 col-md-9"><input type="text" id="hf-data" name="visurkiri" placeholder="Enter Visur Kiri..." class="form-control">
									</div>
								</div>
								<div class="row form-group">
									<div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Rekomendasi Kaca Mata</label></div>
									<div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
									</div>
								</div>
                      </div>
                      
                    </div>
	  </div>
</div>	  
<div class="col-lg-12">
   <div class="col-lg-6">
	 <div class="card">
                      <div class="card-body card-block">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-text" class=" form-control-label">Kepala</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="tinggi" placeholder="Enter Tinggi Badan..." class="form-control">
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Mata</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="berat" placeholder="Enter Berat Badan..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Telinga</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="bmi" placeholder="Enter BMI..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Hidung</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Tenggorokan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Leher</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
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
                            <div class="col-12 col-md-9"><input type="text" id="hf-text" name="tinggi" placeholder="Enter Tinggi Badan..." class="form-control">
							</div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Mulut</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="berat" placeholder="Enter Berat Badan..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Dada</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="bmi" placeholder="Enter BMI..." class="form-control">
							</div>
                          </div>
						  
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Abdomen</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Ekstremitas</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
							</div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="hf-input-data" class="form-control-label">Anogental</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="hf-data" name="cat_bmi" placeholder="Enter Kategori BMI..." class="form-control">
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
                      </div>	
</div>				  
@endsection