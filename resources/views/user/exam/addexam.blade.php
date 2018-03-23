@extends('user.master')

@section('title')
	Exam Add
@endsection
@section('plug')
<link href="{{ asset('css') }}/form.css" rel="stylesheet">
@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Add Exam Type</h1>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'add.exam',
	    	 'method' => 'POST', 'class' => 'col-md-5 go-right', 'role' => 'form']) !!}
				<div class="form-group">
				<input id="name" name="exam_name" type="text" class="form-control" required>
				<label for="name">Exam Name</label>
				</div>
				<div class="form-group">
					<textarea id="message" name="exam_descroption" class="form-control"></textarea>
					<label for="message">Exam Description</label>
				</div>
				<div class="form-group">
	                <div class="col-lg-offset-3 col-lg-6">
	                    <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure about ADD this');">Save Exam</button>
	                    <button class="btn btn-default" type="reset">Reset</button>
	                </div>
	            </div>
        	{!! Form::close() !!}
	</div>
	</div>
</div>

	
@endsection