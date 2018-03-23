@extends('user.master')

@section('title')
	Student Profile
@endsection

@section('plug')
<style>
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

</style>

@endsection

@section('content')

<div id="page-wrapper">
 <div class="container">
      <div class="row">
      
        <div class="col-md-10" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Student Profile </h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12"> <img alt="{!! $student->firstName,'  ', $student->lastName !!}" src="{{ url($student->avator) }}" class="img-responsive" style="height: 200px; width: 200px;">
     <a href="{{ url('/change-student-phpto/'.$student->id) }}" data-original-title="Change Photo"  data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-user"></i></a>
                  <div class=" col-md-12"> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Roll:</td>
                        <td>{!! $student->rollNO !!}</td>
                      </tr>
                      <tr>
                        <td>Index No:</td>
                        <td>{!! $student->indexNO !!}</td>
                      </tr>
                      <tr>
                        <td>Class:</td>
                        <td>{!! $student->class_name !!}</td>
                      </tr>
                      <tr>
                        <td>Group : </td>
                        <td>{!! $student->group_name !!}</td>
                      </tr>
                   
                        <tr>
                        <td>Section : </td>
                        <td>{!! $student->section_name !!}</td>
                      </tr>
                        <tr>
                        <td>Shift</td>
                        <td>{!! $student->shift_name !!}</td>
                      </tr>
                        <tr>
                        <td>Name</td>
                        <td>{!! $student->firstName,'  ', $student->lastName !!}</td>
                        
                      </tr>
                      <tr>
                        <td>Date of Birth:</td>
                        <td>{!! $student->birthdate !!}</td>
                      </tr>
                        <tr>
                        <td>Phone NO</td>
                        <td>{!! $student->phonNO !!}</td>
                      </tr>
                      <tr>
                        <tr>
                        <td>Email : </td>
                        <td>{!! $student->email !!}</td>
                      </tr>
                      <tr>
                        <tr>
                        <td>Perent Name:</td>
                        <td>{!! $student->gardiansFirstName, '    ',$student->gardiansLastName !!}</td>
                      </tr>
                      <tr>
                        <tr>
                        <td>Perent NID:</td>
                        <td>{!! $student->gardiansNID !!}</td>
                      </tr>
                      <tr>
                        <td>Perent Email:</td>
                        <td>{!! $student->gardiansEmail !!}</td>
                      </tr>
                      <tr>
                        <td>Perent Phone No:</td>
                        <td>{!! $student->gardiansPhonNO !!}</td>
                      </tr>
                      <tr>
                        <td>Permanent Adress:</td>
                        <td>{!! $student->permanentAdress !!}</td>
                      </tr>
                      <tr>
                        <td>Present Adress:</td>
                        <td>{!! $student->presentAdress !!}</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message"  data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="{{ url('/edit-student/'.$student->id) }}" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a data-original-title="Remove this user" href="{{ url('/delete-student/'.$student->id) }}" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

@section('plugjs')
<script>
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>
@endsection
