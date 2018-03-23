@extends('user.master')

@section('title')
	Group Edit
@endsection
@section('plug')
@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h4 class="page-header">Edit Group</h4>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'updete.group',
	    	 'method' => 'POST', 'class' => 'col-md-9 go-right', 'role' => 'form','name'=>'groupUpdetForm']) !!}
				<div class="form-group">
				<label for="name">Class Name</label>
				<input id="name" value="{{ $groupById->group_name }}" name="group_name" type="text" class="form-control" required>
				<input value="{{ $groupById->id }}" name="id" type="hidden" required>
				</div>
				<div class="form-group">
					<label for="message">Class Description</label>
					<textarea {{ $groupById->group_descroption }} name="group_descroption" style="height: 100px;" class="form-control" ></textarea>
				</div>
				<div class="form-group">
					<label>Publication Status</label>
                        <select name="publication_status"  class="form-control" required>                   
	                        <option value="1">Publish</option>
	                        <option value="0">unPublish</option>
                    	</select>
				</div>
				<div class="form-group">
	                <div class="col-lg-offset-3 col-lg-6">
	                    <button class="btn btn-primary" type="submit" onclick="return confirm('Are you sure to ADD this');">Save Info</button>
	                    <button class="btn btn-default" type="reset">Reset</button>
	                </div>
	            </div>
        	{!! Form::close() !!}
	</div>
	</div>
</div>

	
@endsection

@section('plugjs')
<script>
    document.forms['groupUpdetForm'].elements['publication_status'].value="{{ $groupById->publication_status }}" ;
    
</script>
@endsection