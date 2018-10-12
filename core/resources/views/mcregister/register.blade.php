@section('js')
<script src="{{asset('public/inc/assets/js/lib/chosen/chosen.jquery.min.js')}}"></script>
<script type="text/javascript">
 var url = $('#url').val();
$(document).ready(function() {
    $(".users").select2();
	$(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Oops, nothing found!",
                width: "100%"
            });
	loadselectdokter();		
	loadselectpaket();		
   
   // $(document).on('click','.senddaftar',function(){
		// $.ajaxSetup({
            // headers: {
                // 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            // }
        // })
		
		 // $.ajax({
            // type: POST,
            // url: url,
            // data: formData,
            // dataType: 'json',
            // success: function (data) {
                // console.log(data);
                // var product = '<tr id="product' + data.id + '"><td>' + data.id + '</td><td>' + data.name + '</td><td>' + data.price + '</td>';
                // product += '<td><button class="btn btn-warning btn-detail open_modal" value="' + data.id + '">Edit</button>';
                // product += ' <button class="btn btn-danger btn-delete delete-product" value="' + data.id + '">Delete</button></td></tr>';
                // if (state == "add"){ //if user added a new record
                    // $('#products-list').append(product);
                // }else{ //if user updated an existing record
                    // $("#product" + product_id).replaceWith( product );
                // }
                // $('#frmProducts').trigger("reset");
                // $('#myModal').modal('hide')
            // },
            // error: function (data) {
                // console.log('Error:', data);
            // }
        // });
		
		
	// })
});
function loadselectpaket(){
var GO=url.replace("mcregister", "");
var tdom="";
$("#cmbpaket").empty();
 $.ajax({
            type: "GET",
            url:GO+'paketcmb',
            success: function (data) {
			
				$("#cmbpaket").append('<option value="">Pilih Paket</option>');
                for(i=0;i <data.length; i++){
					$("#cmbpaket").append('<option value="' + data[i].paket+ '">' + data[i].paket + '</option>');
				}
				$("#cmbpaket").trigger("liszt:updated");
				$("#cmbpaket").chosen();
			// $("#cmbdokter_chosen").html(tdom);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

}

function loadselectdokter(){
var GO=url.replace("mcregister", "");
var tdom="";
$("#cmbdokter").empty();
 $.ajax({
            type: "GET",
            url:GO+'doktercmb',
            success: function (data) {
			
				$("#cmbdokter").append('<option value="">Pilih Dokter</option>');
                for(i=0;i <data.length; i++){
					// tdom +="<option value="+data[i].id+">"+data[i].namadoketer+"</option>";
					$("#cmbdokter").append('<option value="' + data[i].id + '">' + data[i].namadoketer + '</option>');
				}
				$("#cmbdokter").trigger("liszt:updated");
				$("#cmbdokter").chosen();
			// $("#cmbdokter_chosen").html(tdom);
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });

}
function gokaryawan(){
var GO=url.replace("mcregister", "");
var tdom="";
 $.ajax({
            type: "GET",
            url:GO+'gopegawai/'+$("#nip").val(),
            success: function (data) {
                 for(i=0;i <data.length; i++){
				console.log(data);
						 $("#idkar").val(data[i].cc );
						 $("#cloneNIP").val(data[i].nik );
						 $("#perusahaan").val(data[i].nama );
						 $("#namakaryawan").val(data[i].namakaryawan );
						 $("#paketlama").val(data[i].paket );
						 $("#tmp_lahir").val(data[i].tempat_lahir+"/"+data[i].tgl_lahir  );
						 $("#Gender").val(data[i].gender );
						$("#alamat").val(data[i].alamat );
						 $("#tlp").val(data[i].tlp );
						 $("#bagian").val(data[i].dept_desc+"/"+data[i].line_desc );
						 $("#photo").css("display", "block");
						 $("#senddaftar").css("display", "block");
				 }
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
	
}

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
			var GO=url.replace("mcregister", "pegawai/"+$("#idkar").val()+"/savephoto");
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
								url: GO,
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

<p ><input id="url" type="hidden" value="{{\Request::url() }}">
										<div class="col-8">		
											
											<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">NIP </label></div>
													<div class="col-12 col-md-9">
													<div class="row form-group">
													 <div class="col col-md-12">
														<div class="input-group">
															<input id="nip" name="input2-group2" placeholder="NIP" class="form-control" type="text">
															  <div class="input-group-btn"><button class="btn btn-secondary" onclick="return gokaryawan()"><i class="fa fa-search"></i> Submit</button></div>
															 </div>
														   </div>
												 </div>
													 </div>
												  </div>
<form action="{{ route('mcregister.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
						 {{ csrf_field() }}												  
												  <div class="row form-group">
												  <input type="hidden" id="idkar" name="nip"><input type="hidden" id="cloneNIP" name="nip">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Pilih Dokter</label></div>
													 <div class="col-12 col-md-9">
													 <select  data-placeholder="Pilih data.."  id="cmbdokter" class="form-control" name="dokter" required autofocus /></select>
													 @if ($errors->has('dokter'))
														<span class="help-block">
															<strong>Warning..{{ $errors->first('dokter') }}</strong>
														</span>
													@endif
													<strong>Warning..</strong>
													 </div>
												</div>
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Pilih Paket</label></div>
													 <div class="col-12 col-md-9"><input type="hidden" id="paketlama" name="paketlama">
													 <select  data-placeholder="Pilih data.."  id="cmbpaket" class="form-control" name="paketbaru"></select>
													 </div>
												</div>
												  
												  <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Perusahaan</label></div>
													<div class="col-12 col-md-9"><input id="perusahaan" name="text-input" placeholder="Perusahaan" class="form-control" type="text" readonly />
													 </div>
												  </div>
												
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Nama</label></div>
													<div class="col-12 col-md-9"><input id="namakaryawan" name="text-input" placeholder="Nama / Karyawan" class="form-control" type="text" readonly />
													 </div>
												  </div>  
												  <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Tempat/Tgl Lahir</label></div>
													<div class="col-12 col-md-9"><input id="tmp_lahir" name="text-input" placeholder="Tempat/Tgl Lahir" class="form-control" type="text" readonly />
													 </div>
												  </div>  
												   <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Jenis Kelamin</label></div>
													<div class="col-12 col-md-9"><input id="Gender" name="text-input" placeholder="Gender" class="form-control" type="text" readonly />
													 </div>
												  </div>  
												  <div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Alamat</label></div>
													<div class="col-12 col-md-9">
															  <input id="alamat" name="alamt" placeholder="Alamat" class="form-control" type="text" readonly />
													 </div>
												  </div> 
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Tlp / HP</label></div>
													<div class="col-12 col-md-9"><input id="tlp" name="text-input" placeholder="Tlp / HP" class="form-control" type="text" readonly />
													 </div>
												  </div> 
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Dept / Bagian</label></div>
													<div class="col-12 col-md-9"><input id="bagian" name="text-input" placeholder="Dept / Bagian" class="form-control" type="text" readonly />
													 </div>
												  </div> 
												<div class="row form-group">
													<div class="col col-md-3"><label for="email-input" class=" form-control-label">Tanggal Periksa</label></div>
													<div class="col-12 col-md-9"><input id="text-input" name="tglperiksa" placeholder="Tgl Periksa" class="form-control" type="text" value="<?php echo Date("Y-m-d H:m:s");?>" readonly />
													 </div>
												  </div> 	
												 
											</div>
											<div class="col-4">	
											<div class="row form-group">											
												<button id="senddaftar" type="submit" class="btn btn-lg btn-info btn-block" style="display:none">
												<i class="fa fa-floppy-o"></i>&nbsp;
												<span id="payment-button-amount">Save Daftar</span>
											  </button> 
											  </div>
											<div class="row form-group">
												<p><div id="my_photo_booth">
															<div id="my_camera" ></div>
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
																	<input type=button  id="photo" value="Klik Photo" onClick="preview_snapshot()" style="display:none">
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
	</form>							
                  </div>
@endsection