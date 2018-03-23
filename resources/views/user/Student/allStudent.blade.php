@extends('user.master')

@section('title')
	All Subject
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

</style>

@endsection

@section('content')
	<br><br>
<div class="container">
 <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
 	@foreach($students as $student)
        <div class="row user-row">
            <div " class="col-xs-3 col-sm-2 col-md-1 col-lg-1"><a href="{{ url('/student-profile/'.$student->id) }}">
                <img class="img-circle" src="{{ url($student->avator) }}" style="height: 60px; width: 60px;" alt="{!! $student->firstName,'  ', $student->lastName !!}"></a>
            </div>
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong><a href="{{ url('/student-profile/'.$student->id) }}">{!! $student->firstName,'  ', $student->lastName !!}</a> </strong><br>
                <span class="text-muted">Class:{!! $student->class_name ,'   ', $student->group_name,'    ', $student->section_name,'     ',$student->shift_name, '    ',$student->session_name,'    ' !!}ADD by :{!! $student->name !!}</span>
            </div>
         </div>
        <!-- <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">User information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle"
                                     src="{{ url($student->avator) }}" style="height: 100px; width: 100px;"
                                     alt="User Pic">
                            </div>
                            
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <strong>{!! $student->firstName,'  ', $student->lastName !!}</strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>User level:</td>
                                        <td>Administrator</td>
                                    </tr>
                                    <tr>
                                        <td>birthdate:</td>
                                        <td>{!! $student->birthdate !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>{!! $student->gender !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Religion</td>
                                        <td>{!! $student->religion !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Session</td>
                                        <td>{!! $student->session_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Class :</td>
                                        <td>{!! $student->class_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Group :</td>
                                        <td>{!! $student->group_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Section</td>
                                        <td>{!! $student->section_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>shift</td>
                                        <td>{!! $student->shift_name !!}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-sm btn-primary" type="button"
                                data-toggle="tooltip"
                                data-original-title="Send message to user"><i class="glyphicon glyphicon-envelope"></i></button>
                        <span class="pull-right">
                            <button class="btn btn-sm btn-warning" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Edit this user"><i class="glyphicon glyphicon-edit"></i></button>
                            <button class="btn btn-sm btn-danger" type="button"
                                    data-toggle="tooltip"
                                    data-original-title="Remove this user"><i class="glyphicon glyphicon-remove"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div> -->
        @endforeach


        
        
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
