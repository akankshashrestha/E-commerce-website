@extends('admin.layout.admin')

@section('content')

	<h3>Add Category</h3><br>

	<div class="row">
			{!! Form::open(['route'=>'category.store','method'=>'post']) !!}


			 <div class="form-group">
							
				{{Form::label('name','Name')}}
				{{Form::text('name' , null,array('class' => 'form-control'))}}

			</div>

			<button type="button" class="btn btn-primary"> Save Changes</button>
			

			{!! Form::close() !!}   
			
	</div>

	
@endsection
