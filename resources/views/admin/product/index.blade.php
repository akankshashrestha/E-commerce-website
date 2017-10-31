@extends('admin.layout.admin')

@section('content')

	<h3> Products</h3>
	
<ul>

	@forelse($products as $product)
	<li>
		<h2>Name of product:{{$product->name}} </h2>
	</li>

	@empty

	<h3> no products </h3>

	@endforelse
</ul>

@endsection