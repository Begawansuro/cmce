@section('js')
<script type="text/javascript">
 var url = $('#url').val();
$(document).ready(function() {
    $(".users").select2();
	
});
var shutter = new Audio();
		shutter.autoplay = false;
		shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';
		
		function preview_snapshot() {
			// play sound effect
			try { shutter.currentTime = 0; } catch(e) {;} // fails in IE
			shutter.play();
			
			// freeze camera so user can preview current frame
			Webcam.freeze();
			
			// swap button sets
			document.getElementById('pre_take_buttons').style.display = 'none';
			document.getElementById('post_take_buttons').style.display = '';
		}
		
		function cancel_preview() {
			// cancel preview freeze and return to live camera view
			Webcam.unfreeze();
			
			// swap buttons back to first set
			document.getElementById('pre_take_buttons').style.display = '';
			document.getElementById('post_take_buttons').style.display = 'none';
		}
		
		function save_photo() {
			// actually snap photo (from preview freeze) and display it
			console.log(url);
			
			Webcam.snap( function(data_uri) {
					var formData = {
						img: data_uri,
					}
		
					$.ajaxSetup({
								headers: {
									'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
								}
							})
							
					 $.ajax({
								type: "PUT",
								url: url,
								data: formData,
								dataType: 'json',
								success: function (data) {
								   
										},
								error: function (data) {
									console.log('Error:', data);
								}
							});		
		
				// display results in page
				/*
				document.getElementById('results').innerHTML = 
					'<h2>Here is your large, cropped image:</h2>' + 
					'<img src="'+data_uri+'"/><br/></br>' + 
					'<a href="'+data_uri+'" target="_blank">Open image in new window...</a>';
				
				// shut down camera, stop capturing
				Webcam.reset();
				
				// show results, hide photo booth
				document.getElementById('results').style.display = '';
				document.getElementById('my_photo_booth').style.display = 'none';
				*/
			} );
		}
</script>
@stop

@extends('layouts.app')

@section('content')

<div class="col-lg-12">
<p ><input id="url" type="hidden" value="{{url('karyawan')}}">
										<div class="col-8">		
											
											<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">NIP </label></div>
													<div class="col-12 col-md-9">
													<div class="row form-group">
													 <div class="col col-md-12">
														<div class="input-group">
															<input id="input2-group2" name="input2-group2" placeholder="NIP" class="form-control" type="email">
															  <div class="input-group-btn"><button class="btn btn-secondary"><i class="fa fa-search"></i> Submit</button></div>
															 </div>
														   </div>
												 </div>
													 </div>
												  </div>
												  
												  <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Perusahaan</label></div>
													<div class="col-12 col-md-9">Perusahaan
													 </div>
												  </div>
												
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama</label></div>
													<div class="col-12 col-md-9">Nama Pasien / Karyawan
													 </div>
												  </div>  
												  <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Tempat/Tgl Lahir</label></div>
													<div class="col-12 col-md-9">Tempat/Tgl Lahir
													 </div>
												  </div>  
												   <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Jenis Kelamin</label></div>
													<div class="col-12 col-md-9">Jenis Kelamin
													 </div>
												  </div>  
												  <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Alamat</label></div>
													<div class="col-12 col-md-9">
															  Alamat 
													 </div>
												  </div> 
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Tlp / HP</label></div>
													<div class="col-12 col-md-9">Tlp / HP
													 </div>
												  </div> 
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Dept / Bagian</label></div>
													<div class="col-12 col-md-9">Dept / Bagian
													 </div>
												  </div> 
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Tanggal Periksa</label></div>
													<div class="col-12 col-md-9">Tanggal Periksa
													 </div>
												  </div> 	
											  
											</div>
											<div class="col-4">		
											<div class="row form-group">
												<p><div id="my_photo_booth">
															<div id="my_camera"></div>
															<div id="jsPhoto"></div>
															<script src="{{asset('public/inc/webcame/webcam.min.js')}}"></script>
															<!-- Configure a few settings and attach camera -->
															<script language="JavaScript">
																Webcam.set({
																	// live preview size
																	width: 320,
																	height: 240,
																	
																	// device capture size
																	dest_width: 640,
																	dest_height: 480,
																	
																	// final cropped size
																	crop_width: 480,
																	crop_height: 480,
																	
																	// format and quality
																	image_format: 'jpeg',
																	jpeg_quality: 90,
																	
																	// flip horizontal (mirror mode)
																	flip_horiz: true
																});
																Webcam.attach( '#my_camera' );
															</script>
															
															<!-- A button for taking snaps -->
															<form>
																<div id="pre_take_buttons">
																	<!-- This button is shown before the user takes a snapshot -->
																	<input type=button value="Klik Photo" onClick="preview_snapshot()">
																</div>
																<div id="post_take_buttons" style="display:none">
																	<!-- These buttons are shown after a snapshot is taken -->
																	<input type=button value="&lt; Ualngi Photo" onClick="cancel_preview()">
																	<input type=button value="Save Photo &gt;" onClick="save_photo()" style="font-weight:bold;">
																</div>
															</form>
														</div>
														
														<div id="results" style="display:none">
															<!-- Your captured image will appear here... -->
														</div>
												<p>
											  </div>
											  </div>  
										  	  
                                </p>
                  </div>
@endsection