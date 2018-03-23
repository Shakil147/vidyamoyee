@extends('user.master')

@section('title')
	Group Menage
@endsection
@section('plug')
@endsection


@section('content')
<div id="page-wrapper">
	<div class="row">
	    <div class="col-lg-12">
	        <h4 class="page-header"> Group Menage
	        @if($message = Session::get('message'))
	        <h1 class="text-center text-success">{{ $message }}</h1>
		        @endif
		        </h4>
	    </div>
	</div>
	<div class="continer">
		<div class="row" style="text-align: center;"><h2>All Group</h2></div>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">Sl</th>
		      <th scope="col">ID</th>
		      <th scope="col">Geoup Name</th>
		      <th scope="col">Acrion</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $a=0 ?>
		  	@foreach($allgroup as $group)
		    <tr>
		      <th scope="row">{{ $a= $a+1 }}</th>
		      <td>{{ $group->id }}</td>
		      <td>{{ $group->group_name }}</td>
		      <td><a href="{{ url('/edit-group/'.$group->id) }}">Edit </a> <a href="{{ url('/delete-group/'.$group->id) }}">Delete </a> </td>
		    </tr>
		    @endforeach
		  </tbody>
		</table>
	</div>
</div>

	
@endsection