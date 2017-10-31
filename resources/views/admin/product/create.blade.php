@extends('admin.layout.admin')

@section('content')

<h3>Add Product </h3>


<div class="row">


	<div class="col-md-6 col-md-offset-3">

		{!! Form::open(['route' => 'product.store','method' => 'post','files'=> true]) !!}

			<div class="form-group">

				{{Form::label('name','Name')}}
				{{Form::text('name',null,array('class'=>'form-control'))}}

			</div>

		<div class="form-group">

				{{Form::label('description','Description')}}
				{{Form::text('description',null,array('class'=>'form-control'))}}

		</div>

		<div class="form-group">

			{{Form::label('price','Price')}}
			{{Form::text('price',null,array('class'=>'form-control'))}}


		</div>

		<div class="form-group">

			{{Form::label('category_id','Categories')}}
			{{Form::select('category_id',['men'],null,['class'=>'form-control','placeholder'=>'select category'])}}

		</div>


		<div class="form-group">

				{{Form::label('size','Size')}}
				{{Form::select('size',['small' => 'Small','medium' => 'Medium', 'large' =>'Large'],null,['class'=>'form-control'])}}

		</div>

		<div class="form-group">

				{{Form::label('image','Image')}}
				{{Form::file('image',null,array('class'=>'form-control'))}}

		</div>

		{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}
			
		{!! Form::close() !!}
		
		

	</div>

</div>


@endsection


