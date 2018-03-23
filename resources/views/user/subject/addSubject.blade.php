@extends('user.master')

@section('title')
	Subject Add
@endsection

@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header">Add subject</h1>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'add.subject',
	    	 'method' => 'POST', 'class' => 'col-md-5 go-right', 'role' => 'form']) !!}
				<div class="form-group">
				<input id="name" name="subject_name" type="text" class="form-control" required>
				<label for="name">Subject Name</label>
				</div>
				<div class="form-group">
					<input name="subject_code"  type="number" class="col-md-6 form-control" required>
					<label >Subject Code</label>
				</div>

				<div class="form-group">
					<select name="group_id"  class="col-md-6 form-control" required>
	                        
	                        @foreach($PublishedGroups as $PublishedGroups)
	                            <option value="{{ $PublishedGroups->id }}">{{ $PublishedGroups->group_name }}</option>
	                        @endforeach
	                    </select>
	                    <label >Select group</label>
	            </div>
				<div class="form-group">
					<textarea name="subject_descroption" class="form-control" ></textarea>
					<label for="message">Subject Description</label>
				</div>
				<div class="form-group">
	                <div class="col-lg-offset-3 col-lg-6">
	                    <button class="btn btn-primary" type="submit">  Save  </button>
	                    <button class="btn btn-default" type="reset">Reset</button>
	                </div>
	            </div>
        	{!! Form::close() !!}
	</div>
	</div>
</div>

	
@endsection

