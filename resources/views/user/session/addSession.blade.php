@extends('user.master')

@section('title')
	Session Add
@endsection

@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h2 class="page-header">Add Session</h2>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'add.session',
	    	 'method' => 'POST', 'class' => 'col-md-5 go-right', 'role' => 'form']) !!}
				<div class="form-group">
					<label for="name">Session Name</label>
				<input id="name" name="session_name" type="text" placeholder="Session Name" class="form-control" required>
				
				</div>

				
				<div class="form-group">
					<label for="message">Session Description</label>
					<textarea id="message" name="session_descroption" class="form-control"></textarea>
					
				</div>
				<div class="form-group">
	                <div class="col-lg-offset-3 col-lg-6">
	                    <button class="btn btn-primary" type="submit" >  Save  </button>
	                    <button class="btn btn-default" type="reset">Reset</button>
	                </div>
	            </div>
        	{!! Form::close() !!}
	</div>
	</div>
</div>

	
@endsection

