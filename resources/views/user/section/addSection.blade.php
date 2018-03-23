@extends('user.master')

@section('title')
	Section Add
@endsection
@section('plug')

@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Add Section</h1>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'add.section',
	    	 'method' => 'POST', 'class' => 'col-md-5 go-right', 'role' => 'form']) !!}
				<div class="form-group">
					<label for="name">Section Name</label>
					<input id="name" name="section_name" type="text" class="form-control" required>
				</div>
				<div class="form-group">
					<label for="message">Section Description</label>
					<textarea id="message" name="sections_descroption" class="form-control"></textarea>
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