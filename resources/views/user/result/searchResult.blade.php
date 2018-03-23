@extends('user.master')

@section('title')
    Result Add
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
            <h1 class="page-header" style="text-align: center;">Search Result </h1>
            @if($message = Session::get('message'))
                    <h1 class="text-center text-success">{{ $message }}</h1>
                @endif
        </div>
    </div>
        {!! Form::open(['route' => 'result.find',
        'method' => 'GET', 'class' => 'col-md-10 col-md-offset-1', 'role' => 'form',
        'id'=>'contact-form']) !!}

            <div class="messages"></div>

            <div class="controls">

            <div class="row">
                     <div class="col-md-2">
                        <div class="form-group">
                            <label>Indx NO</label>
                            <input id="form_name" type="num" name="indexNO" class="form-control" placeholder="indexNO" required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                     <div class="col-md-2">
                        <div class="form-group">
                            <label for="form_name">Class</label>
                            <select name="class_id"  class="form-control" required>
                            @foreach($lavels as $lavel)
                                <option value="{{ $lavel->id }}">{!! $lavel->class_name !!}</option>
                            @endforeach
                        </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="form_name">Year</label>
                            <select name="session_id"  class="form-control" required>
                            @foreach($years as $year)
                                <option value="{{ $year->id }}">{!! $year->session_name !!}</option>
                            @endforeach
                        </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="form_name">Exam</label>
                            <select name="exam_id"  class="form-control" required>
                            @foreach($exams as $exam)
                                <option value="{{ $exam->id }}">{!! $exam->exam_name !!}</option>
                            @endforeach
                        </select>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">
                            <input type="reset" class="btn btn-warning btn-block" value="Reset"/>
                        </div>
                        <div class="col-sm-6">
                            <input type="submit" class="btn btn-success btn-block" value="  Save  Result  "/>
                        </div>
                    </div>
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
    
</script>
@endsection
