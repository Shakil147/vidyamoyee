@extends('user.master')

@section('title')
	Group Add
@endsection
@section('plug')
<link href="{{ asset('css') }}/form.css" rel="stylesheet">
@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Add Group</h1>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'add.group',
	    	 'method' => 'POST', 'class' => 'col-md-5 go-right', 'role' => 'form']) !!}
				<div class="form-group">
				<input id="name" name="group_name" type="text" class="form-control" required>
				<label for="name">Group Name</label>
				</div>
				<div class="form-group">
					<textarea name="group_descroption" class="form-control"></textarea>
					<label for="message">Group Description</label>
				</div>
				<div class="form-group">
	                <div class="col-lg-offset-3 col-lg-6">
	                    <button class="btn btn-primary" type="submit">Save Group</button>
	                    <button class="btn btn-default" type="reset">Reset</button>
	                </div>
	            </div>
        	{!! Form::close() !!}
	</div>
	</div>
</div>

	
@endsection