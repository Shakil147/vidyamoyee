@extends('user.master')

@section('title')
    Result Update
@endsection
@section('plug')
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
<style>

</style>

@endsection
@section('content')

<div id="page-wrapper" class="container" style=" background-color: #f8f8f8;">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" style="text-align: center;">Update Result </h1>{{-- enctype="multipart/form-data" --}}
            @if($message = Session::get('message'))
                    <h1 class="text-center text-success">{{ $message }}</h1>
                @endif
        </div>
    </div>
        {!! Form::open(['route' => 'result.updet','name' => 'resultupdetfrom',
        'method' => 'POST', 'class' => 'col-md-10 col-md-offset-1', 'role' => 'form']) !!}

            <div class="messages"></div>

            <div class="controls">

            <div class="row">
                     <div class="col-md-2">
                        <div class="form-group">
                            <label>Indx NO</label>
                            <input id="form_name" value="{{ $result->indexNO }}" type="num" name="indexNO" class="form-control" disabled>
                            <input name="createrUserId" type="hidden" value="{{ Auth::user()->id }}" required>
                            <input name="id" type="hidden" value="{{ $result->id}}" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="form-group">
                            <label>Subject</label>
                            <select name="subject_id" id="disabledSelect"  class="form-control" disabled>
                            @foreach($Subjects as $Subject)
                                <option value="{{ $Subject->id }}">{!! $Subject->subject_code,'    ', $Subject->subject_name !!}</option>
                            @endforeach
                        </select>
                        <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="form-group">
                            <label for="form_name">Exam</label>
                            <select name="exam_id" id="disabledSelect" class="form-control" disabled>
                            @foreach($exams as $exam)
                                <option value="{{ $exam->id }}">{!! $exam->exam_name !!}</option>
                            @endforeach
                        </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     <div class="col-md-2">
                        <div class="form-group">
                            <label for="form_name">Session</label>
                            <select name="session_id" id="disabledSelect" class="form-control" disabled>
                            @foreach($Sessions as $Sessions)
                                <option value="{{ $Sessions->id }}">{!! $Sessions->session_name !!}</option>
                            @endforeach
                        </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>

                    <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">Writen</label>
                                <input type="number" value="{{ $result->written }}" name="written" class="form-control" placeholder="written">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">MCQ</label>
                                <input type="number" value="{{ $result->mcq }}" name="mcq" class="form-control" placeholder="MCQ">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">Practical</label>
                                <input type="number" value="{{ $result->practical }}" name="practical" class="form-control" placeholder="Practical">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">Atendens</label>
                                <select name="status"  class="form-control" required>
                            
                                <option value="1">Present</option>
                                <option value="0">Absent</option>
                                <option value="3">Exfail</option>
                           
                        </select>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="reset" name="btn" class="btn btn-warning btn-block" value="Reset"/>
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="  Save  Result  "/>
                        </div>
                    </div>
                </div>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>

    
@endsection

@section('plugjs')
<script>
    document.forms['resultupdetfrom'].elements['exam_id'].value="{{ $result->exam_id }}" ;
    document.forms['resultupdetfrom'].elements['subject_id'].value ="{{  $result->subject_id }}" ;
    document.forms['resultupdetfrom'].elements['session_id'].value ="{{  $result->session_id }}" ;
    document.forms['resultupdetfrom'].elements['status'].value ="{{  $result->status }}" ;
    
</script>
@endsection
