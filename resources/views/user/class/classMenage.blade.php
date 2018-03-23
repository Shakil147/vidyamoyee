@extends('user.master')

@section('title')
	Class Menage
@endsection
@section('plug')
@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h4 class="page-header"> Menage Class
	        @if($message = Session::get('message'))
	        <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
		        </h4>
	    </div>
	</div>
	<div class="continer">
		<div class="row" style="text-align: center;"><h2>All Class</h2></div>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Sl</th>
		      <th scope="col">ID</th>
		      <th scope="col">Class</th>
		      <th scope="col">Acrion</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $a=0 ?>
		  	@foreach($labels as $labels)
		    <tr>
		      <th scope="row">{{ $a= $a+1 }}</th>
		      <td>{{ $labels->id }}</td>
		      <td>{{ $labels->class_name }}</td>
		      <td><a href="{{ url('/edit-class/'.$labels->id) }}">Edit </a> <a href="{{ url('/delete-class/'.$labels->id) }}">Delete </a> </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</div>

	
@endsection