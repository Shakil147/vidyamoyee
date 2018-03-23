@extends('user.master')

@section('title')
	Change Student photo
@endsection
@section('plug')
<style>
	.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
#img-upload{
    width: 80%;
}
</style>
@endsection

@section('content')

<div id="page-wrapper" class="container" style=" background-color: #f8f8f8;">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header" style="text-align: center;">Change Student photo</h1>{{-- enctype="multipart/form-data" --}}
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'student.photo.uodete',
	    	 'method' => 'POST', 'class' => 'col-md-5 col-md-offset-1', 'role' => 'form',
	    	  'enctype'=>'multipart/form-data','name'=>'changeCrofilPhoto']) !!}
	    	  <div class="row">
	    	  <div class="form-group">
			        <label>Upload Image</label>
			        <img id='img-upload'/>
			        <div class="input-group">
			            <span class="input-group-btn">
			                <span class="btn btn-default btn-file">
			                    Sclect… <input type="file" name="avator"  id="imgInp">
			                    
			                </span>
			            </span>
			            <input type="text" name="avator2" class="form-control" readonly>
			            <input type="hidden" value="{{ $student->id }}" name="id">
			        </div>
			    </div>	    	  	
	    	  </div>
				<div class="row">
            <div class="form-group">
	                    <button class="col-md-3 btn btn-default" type="reset">Reset</button>
	                    <button class="col-md-9 btn btn-primary" type="submit">  Save  </button>
	            </div>
	        </div>

        	{!! Form::close() !!}
		</div>
		<div class="col-md-12" style="height: 300px;"></div>
	</div>
</div>

	
@endsection

@section('plugjs')
<script>
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
	document.forms['changeCrofilPhoto'].elements['avator2'].value = '{{  asset($student->avator) }}';
</script>
@endsection
