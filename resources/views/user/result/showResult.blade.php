
@extends('user.master')

@section('title')
    Result
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
            <h1 class="page-header" style="text-align: initial;">Result </h1>{{-- enctype="multipart/form-data" --}}
            @if($message = Session::get('message'))
                    <h1 class="text-center text-success">{{ $message }}</h1>
                @endif
        </div>
    </div>
    <div class="row" style="border-bottom: 1px solid;">
      <div class="col-md-1" style="padding-bottom: 15px;"><img src="{{ asset($studentinfo->avator) }}" alt="{{ $studentinfo->firstName,'  ',$studentinfo->lastName }}" style=" border: 2px solid;height: 100px; width: 100px;">
      </div>
      <div class="col-md-6" style="padding-left: 30px;">
        <b>Name : <a href="{{ url('/student-profile/'.$studentinfo->id) }}">{{ $studentinfo->firstName }}  {{  $studentinfo->lastName }}</a> <br>
        Index : {{ $ChakeResult->indexNO }}<br>
        Class : {{ $ChakeResult->class_name }}<br>
        Session : {{ $ChakeResult->session_name }}<br>
        Exam : {{ $ChakeResult->exam_name }}</b>
        
      </div>
    </div>
	<div class="row col-md-11" style="padding-top: 15px;">
<table class="table table-bordered" >
  <thead>
    <tr>
      <th>SL</th>
      <th>Subject</th>
      <th>Writen</th>
      <th>MCQ</th>
      <th>Practical</th>
      <th>Sub Total</th>
      <th>Gred</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody><?php $a =0; $total = 0; $totalgpa= 0; $t=0; ?>
    @foreach($showResults as $result)
     <?php
    
    $subtotal = $result->written + $result->mcq + $result->practical;

           if($subtotal >=80){
           $sgpa = 'A+' ;
           $gpa = 5 ;

           }
                
          elseif($subtotal >= 70){
           $sgpa = 'A';
           $gpa = 4 ;
          }
          
          elseif($subtotal >= 60){
            $sgpa = 'A-';
            $gpa = 3.5 ;
          }
          
          elseif($subtotal >= 50){
            $sgpa=  'B';
            $gpa = 3 ;
          }
          
          elseif($subtotal >= 40){
            $sgpa ='C';
            $gpa = 2 ;
          }
          elseif($subtotal >= 33){
            $sgpa= 'D';
            $gpa = 1 ;
          }
          else{
            $sgpa= 'F';
            $gpa = 0 ;
          }
    /*echo $m;*/
    ?>
    <tr>
      <th scope="row">{{ $a =$a+1 }}</th>
      <td>{!! $result->subject_name !!}</td>
      <td>{!! $result->written !!}</td>
      <td>{!! $result->mcq !!}</td>
      <td>{!! $result->practical !!}</td>
       
      <td>{{ $subtotal }}</td>
      <td>{{ $sgpa }}</td>
      <td><a href="{{ url('/edit-result/'.$result->id) }}"> Edit </a><a href="{{ url('/delet-result/'.$result->id) }}">  Delet  </a></td>

    <?php $total = $total+$subtotal; if($gpa > 0){
          $t= $t+1;
    } else{
      $t = 0;
    }
    $totalgpa = $gpa+$totalgpa; ?>
    </tr>
    @endforeach
    <tr>
      <?php 

      if($t == $a){
        $totalgpa = $totalgpa/$a;
      }
      else{
        $totalgpa = 0;
      }      
        if($totalgpa==5){
          $gred = 'A+';
        }
        elseif($totalgpa < 5 && $totalgpa >=4){
          $gred = ' A ';
        }
        elseif($totalgpa < 5 && $totalgpa >=4){
          $gred = ' A ';
        }
        elseif($totalgpa < 4 && $totalgpa >=3.5){
          $gred = ' A- ';
        }
        elseif($totalgpa < 3.5 && $totalgpa >=3){
          $gred = ' B ';
        }
        elseif($totalgpa < 3 && $totalgpa >=2){
          $gred = ' C ';
        }
        elseif($totalgpa < 2 && $totalgpa >=1){
          $gred = ' D ';
        }
        else{
          $gred = ' F ';
        }
       ?>
      <td></td>
      <td></td>
      <td></td>
     <td><b>Total MarK = </b></td> 
     <td><b>{{ $total }}</b></td>
      <td><b>GPA = {{ $totalgpa = number_format($totalgpa, 2)  }}</b></td>
     <td><b>{{ $gred }}</b></td>
    </tr>
  </tbody>
</table>
</div>
<div class="continer">
  {!! Form::open(['route' => 'result.save',
        'method' => 'POST', 'class' => 'col-md-12', 'role' => 'form',
        'id'=>'contact-form']) !!}

            <div class="row">
                     <div class="col-md-3">
                        <div class="form-group">
                            <label>Subject</label>
                            <input name="createrUserId" type="hidden" value="{{ Auth::user()->id }}" required>
                            <input name="indexNO" type="hidden" value="{{ $ChakeResult->indexNO }}" required>
                            <input name="exam_id" type="hidden" value="{{ $ChakeResult->exam_id }}" required>
                            <select name="subject_id"  class="form-control" required>
                            @foreach($Subjects as $Subject)
                                <option value="{{ $Subject->id }}">{!! $Subject->subject_code,'    ', $Subject->subject_name !!}</option>
                            @endforeach
                        </select>
                        </div>
                      </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">Writen</label>
                                <input type="number" name="written" class="form-control" placeholder="written">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">MCQ</label>
                                <input type="number" name="mcq" class="form-control" placeholder="MCQ">
                            </div>
                        </div>
                        
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="form_phone">Practical</label>
                                <input type="number" name="practical" class="form-control" placeholder="Practical">
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
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                      <div class="form-group">
                        <div class="col-sm-2">
                            <input type="reset" name="btn" class="btn btn-warning btn-block" value="Reset"/>
                        </div>
                        <div class="col-sm-9">
                            <input type="submit" name="btn" class="btn btn-success btn-block" value="  ADD New  Result  "/>
                        </div>
                    </div>
                  </div>

        {!! Form::close() !!}
</div><div class="continer" style="height: 100px;"></div>

</div>

    
@endsection

@section('plugjs')
<script>
    
</script>
@endsection
