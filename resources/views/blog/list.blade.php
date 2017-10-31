@extends('blog.master')

@section('content')
	
	<h1 class="glyphicon glyphicon-list-alt"><u>List of Blogs</u></h1><br>


	@foreach ($blogs as $blog)

		<h3 ><a href="{{Route('blog.show',$blog['id'])}}"> {{$blog['title']}}</a></h3>

	@endforeach
	
@endsection