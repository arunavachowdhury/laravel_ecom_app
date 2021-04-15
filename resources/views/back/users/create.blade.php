@extends(BACKEND_THEME_NAME.'.layouts.master')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          	<div class="col-sm-6">
            	<h1>New User Create</h1>
          	</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Users</a></li>
					<li class="breadcrumb-item active">Create</li>
				</ol>
          	</div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    	@if ($message = Session::get('success'))
		<div class="alert alert-success">
		  <p>{{ $message }}</p>
		</div>
		@endif
	    <div class="container-fluid">
	        <div class="row">
	          	<div class="col-6">
	            	<!-- Default box -->
		            <div class="card card-primary">
		              	<div class="card-header">
			                <h3 class="card-title">Create</h3>

			                <!-- <div class="card-tools">
			                	<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
			                    	<i class="fas fa-minus"></i>
			                	</button>
			                	<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
			                    	<i class="fas fa-times"></i>
			                	</button>
			                </div> -->
		              	</div>
		          		<div class="card-body">
		          			<form action="" method="POST" enctype="multipart/form-data">
		          				@csrf
			            		<div class="row">
			            			<div class="col-md-6">
			            				<div class="form-group">
						                    <label for="name">Name</label>
						                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
						                </div>
			            			</div>
			            			<div class="col-md-6">
			            				<div class="form-group">
						                    <label for="name">Email</label>
						                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
						                </div>
			            			</div>
			            		</div>
			            		<div class="row">
			            			<div class="col-md-6">
			            				<div class="form-group">
						                    <label for="mobile">Mobile</label>
						                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile">
						                </div>
			            			</div>
			            			
			            		</div>
			            		<div class="row">
			            			<div class="col-md-8">
				            			<div class="form-group">
						                    <label for="exampleInputFile">File input</label>
						                    <div class="input-group">
						                      	<div class="custom-file">
						                        	<input type="file" class="custom-file-input" id="file" name="file" onchange="return previewImage(event)">
						                        	<label class="custom-file-label" for="exampleInputFile">Choose file</label>
						                      	</div>
						                      	<!-- <div class="input-group-append">
						                        	<span class="input-group-text">Upload</span>
						                      	</div> -->
						                    </div>
						                </div>
				            		</div>
				            		<div class="col-md-4">
				            			<div class="form-group">
					            			<img id="output" width="100" height="100" style="margin-left: 30px;">
				            			</div>
				            		</div>
			            		</div>
			            		<div class="row">
			            			<div class="col-md-6">
			            				<div class="form-group">
						                    <label for="name">Password</label>
						                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
						                </div>
			            			</div>
			            			<div class="col-md-6">
			            				<div class="form-group">
						                    <label for="name">Confirm Password</label>
						                    <input type="password" class="form-control" name="c_password" placeholder="Confirm Password">
						                </div>
			            			</div>
			            		</div>
			            		<div class="row">
			            			<div class="col-md-6">
				            			<div class="form-group">
				            				<label for="name">Roles</label>
				            				{!! Form::select('roles[]', $roles, null, ['class'=> 'form-control select2', 'multiple'=> "multiple"]) !!}
				            			</div>
				            		</div>
			            		</div>
			          		</div>
			          		<div class="card-footer">
			                 	<button type="submit" class="btn btn-outline-primary">Submit</button>
			                 	<input type="submit" name="submit" value="submit" class="btn btn-outline-success">
			                </div>
			            </form>
		            </div>
	            	<!-- /.card -->
	          	</div>
	        </div>
	    </div>

    </section>
</div>

@endsection

@push('PAGE_PLUGINS_JS')
<script src="{{back_asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
@endpush

@push('PAGE_ASSET_JS')
<script>
	function previewImage(event){
		var output = document.getElementById('output');
		output.src = URL.createObjectURL(event.target.files[0]);
	}

	$(function () {
	  bsCustomFileInput.init();
	});
</script>
@endpush