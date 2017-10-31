@extends('layout.main')
@section('content')

<div class="row">
	<h3>cart item</h3>



	<table class="table table-hover">
		<thead>
			<tr>
				<td> Name</td>
				<td> Price </td>
				<td> size </td>
				<td> qty </td>
				<td> action </td>
			</tr>
		</thead>
		<tbody>

			@foreach($cartItems as $cartItem)

			<tr>
				<td>{{$cartItem->name }}</td>
				<td>{{$cartItem->price }}</td>

				
				<td width="50px">

					{!! Form::open(['route' => ['cart.update',$cartItem->rowId],'method'=>'PUT']) !!}
						<input name="qty" type="text" value="{{$cartItem->qty}}">
				</td>
				<td>
						<div>
						{!! Form::select('size',['small'=>'Small','medium' => 'Medium','large' =>'Large'],$cartItem->options->has('size')?$cartItem->options->size:'')!!}
						</div> 

				</td>

				<td>
						<input type="submit" class="button sucess small" value="ok">	
						{!!Form::close() !!}

							<form action="{{route('cart.destroy',$cartItem->rowId)}}" method='post'>

								{{csrf_field()}}
								{{method_field('DELETE')}}

								<input class="button" type="submit" value="Delete">

							</form
				</td>
			</tr>
			@endforeach


			<tr>

				<td> </td>
				<td>Tax: {{Cart::tax()}} <br> 
					Grand Total : $ {{Cart::total()}} 
				</td>
				<td> Items: {{Cart::count()}} </td>
			</tr>
		</tbody>
	</table>

		<a href="{{url('/checkout')}}" class="button">checkout </a>
		
</div>

@endsection
