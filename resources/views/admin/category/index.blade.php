@extends('admin.layout.admin')

@section('content')


	<h3>List Of categories</h3>
		<table class="table table-striped">
						@if(!empty($categories))
							
							@forelse($categories as $category)
								<tr>
									<td><a href="{{route('category.show',$category->id)}}">{{$category->name}}</a></td>
								</tr>

							@empty
								<tr>
									<td>No data</td>
								</tr>
							@endforelse
							
						@endif
											
		</table><br>


		@if(!empty($products))
			<section>
				<h3>Products</h3>

				<table>
					<thead>
						<tr>
							<th>Products</th>
						</tr>
					</thead>

					<tbody>
					@forelse($products as $product)
						<tr>
							
							<td>{{$product->name}}</td>

						</tr>

						@empty

							<tr>
								<td>No Data</td>
							</tr>

					@endforelse
					</tbody>
				</table>

			</section>

	@endif



	</div>


@endsection