@extends('user.master')

@section('title')
	Class Add
@endsection
@section('plug')
@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Add Class</h1>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'add.class',
	    	 'method' => 'POST', 'class' => 'col-md-9 go-right', 'role' => 'form']) !!}
				<div class="form-group">
				<label for="name">Class Name</label>
				<input id="name" name="class_name" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="message">Class Description</label>
					<textarea name="class_descroption" class="form-control" ></textarea>
				</div>
				<div class="form-group">
	                <div class="col-lg-offset-3 col-lg-6">
	                    <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure to ADD this');">Save Class</button>
	                    <button class="btn btn-default" type="reset">Reset</button>
	                </div>
	            </div>
        	{!! Form::close() !!}
	</div>
	</div>
</div>

	
@endsection