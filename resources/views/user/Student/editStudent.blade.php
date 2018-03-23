@extends('user.master')

@section('title')
	Subject Add
@endsection
@section('plug')


@endsection
@section('content')
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
    width: 20%;
}
</style>
<div id="page-wrapper" class="container" style=" background-color: #f8f8f8;">
	<div class="row">
	    <div class="col-lg-12">
	        <h1 class="page-header" style="text-align: center;">Edit Student Profile</h1>
	        @if($message = Session::get('message'))
		            <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
	    </div>
	</div>
        {!! Form::open(['route' => 'student.updet',
	    	 'method' => 'POST', 'name' =>'editStudentProfile', 'class' => 'col-md-10 col-md-offset-1', 'role' => 'form']) !!}
				<div class=" col-md-5 form-group">
					<label for="name">First Name</label>
				<input id="name" name="firstName" type="text" value="{{ $Student->firstName }}" class="form-control" required>
				<input name="id" type="hidden" value="{{ $Student->id }}" required>
				<input name="creatorID" type="hidden" value="{{ Auth::user()->id }}" required>
				</div>
				<div class=" col-md-5 form-group">
					<label for="name">Last Name</label>
				<input id="name" name="lastName" type="text" value="{{ $Student->lastName }}" class="form-control" required>
				</div>
					

				<div class="col-md-2 form-group">
					<label>Date Of Birth</label>
					<input type="text" id="datepicker" name="birthdate" class="form-control" placeholder="Choose" required>
				</div>
				

				<div class="col-md-6 form-group">
					<label >Student Email</label>
					<input name="email"  type="email" value="{{ $Student->email }}" class="form-control">
				</div>
				<div class="col-md-6 form-group">
					<label >Student Phone</label>
					<input name="phonNO"  type="text" value="{{ $Student->phonNO }}" class="form-control" required>
				</div>

				<div class=" col-md-6 form-group">
					<label for="name">Gardian's First Name</label>
				<input id="name" name="gardiansFirstName" type="text" value="{{ $Student->gardiansFirstName }}" class="form-control">
				</div>
				<div class=" col-md-6 form-group">
					<label for="name">Gardian's last Name</label>
				<input id="name" name="gardiansLastName" value="{{ $Student->gardiansLastName }}" type="text" class="form-control">
				</div>
				<div class=" col-md-12 form-group">
					<label for="name">Gardian's NID</label>
				<input id="name" name="gardiansNID" type="text" value="{{ $Student->gardiansNID }}" class="form-control">
				</div>
				<div class="col-md-6 form-group">
					<label >Gardian Email</label>
					<input name="gardiansEmail"  type="email" value="{{ $Student->gardiansEmail }}" class="form-control">
				</div>
				<div class="col-md-6 form-group">
					<label >Gardian Phone</label>
					<input name="gardiansPhonNO"  type="nunber" value="{{ $Student->gardiansPhonNO }}" class="form-control">
				</div>
				<div class="col-md-6 form-group">
					<label for="message">Permanent Adress</label>
					<textarea id="message" name="permanentAdress" value="{{ $Student->permanentAdress }}" class="form-control"
					 style="height: 100px;"></textarea>
				</div>
				<div class="col-md-6 form-group">
					<label for="message">Present Adress</label>
					<textarea id="message" name="presentAdress" value="{{ $Student->presentAdress }}" class="form-control"
					style="height: 100px;"></textarea>
				</div>
				
				<div class="col-md-3 form-group">
					<label >Index No</label>
					<input name="indexNO"  type="text" class="form-control" required>
				</div>

				<div class="col-md-3 form-group">
					<label >Roll No</label>
					<input name="rollNO"  type="number" value="{{ $Student->rollNO }}" class="form-control" required>
				</div>
				
				
				<div class="col-md-3 form-group">
	                    <label >Select Session</label>
					<select name="session_id"  class="form-control" required>
                         @foreach($Sessions as $Session)
                            <option value="{{ $Session->id }}">{{ $Session->session_name }}</option>
                        @endforeach
                    </select>
	            </div>
	            <div class="col-md-3 form-group">
	            	<label >Select Class</label>
					<select name="class_id"  class="form-control" required>
	                        
	                        @foreach($Lavals as $Class)
	                            <option value="{{ $Class->id }}">{{ $Class->class_name }}</option>
	                        @endforeach
	                    </select>
            	</div>

				<div class="col-md-3 form-group">
	                    <label >Select group</label>
					<select name="group_id" class="form-control" required>
	                        
	                        @foreach($Groups as $Group)
	                            <option value="{{ $Group->id }}">{{ $Group->group_name }}</option>
	                        @endforeach
	                    </select>
	            </div>
	            <div class="col-md-3 form-group">
	                    <label >Select Shift</label>
					<select name="shift_id" value="{{ $Student->birthdate }}" class="form-control" required>
	                        
	                        @foreach($Shifts as $Shift)
	                            <option value="{{ $Shift->id }}">{{ $Shift->shift_name }}</option>
	                        @endforeach
	                    </select>
	            </div>
				
				<div class="col-md-2 form-group">
		            <label >Select Section</label>
					<select name="section_id"  value="{{ $Student->birthdate }}" class="form-control" required>
		                    
		                    @foreach($Sections as $Section)
		                        <option value="{{ $Section->id }}">{{ $Section->section_name }}</option>
		                    @endforeach
		                </select>
	            </div>

	            <div class="col-md-2 form-group">
	            	<label >Gender</label>
					<select name="gender" class="form-control" required>

                            <option value="Mail">Mail</option>
                            <option value="Femail">Femail</option>
                    </select>
            	</div>

	            <div class="col-md-2 form-group">
	            	<label >Religion</label>
					<select name="religion" class="form-control" required>

                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Cristan">Cristan</option>
                    </select>
            	</div>
            <div class="form-group">
                        <div class="col-sm-12">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="Update Student Info"/>
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
	document.forms['editStudentProfile'].elements['birthdate'].value = '{{  $Student->birthdate }}';
	document.forms['editStudentProfile'].elements['indexNO'].value = '{{  $Student->indexNO }}';
	document.forms['editStudentProfile'].elements['rollNO'].value = '{{ $Student->rollNO }}';
	document.forms['editStudentProfile'].elements['session_id'].value = '{{ $Student->session_id }}';
	document.forms['editStudentProfile'].elements['group_id'].value = '{{ $Student->group_id }}';
	document.forms['editStudentProfile'].elements['class_id'].value = '{{ $Student->class_id }}';
	document.forms['editStudentProfile'].elements['section_id'].value = '{{ $Student->section_id }}';
	document.forms['editStudentProfile'].elements['shift_id'].value = '{{ $Student->shift_id }}';
	document.forms['editStudentProfile'].elements['gender'].value = '{{ $Student->gender }}';
	document.forms['editStudentProfile'].elements['religion'].value = '{{ $Student->religion }}';
</script>
@endsection
