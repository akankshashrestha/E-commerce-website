@extends('blog.master')

@section('content')
	<form method="post" action="{{Route('blog.store')}}">

		<h2><em><u>Add Blogs</u></em></h2>
		
		Title:
		<input type="text" name="title" class="form-control" value="{{old('first-name')}}"><br>
			@foreach($errors->get('title') as $t)
				<span style="color:red;">*{{$t}}<span>
			@endforeach
		<br>
		Description:
		<textarea rows=10 name="description" class="form-control"></textarea>
		
		@foreach($errors->get('description') as $d)
				<span style="color:red;">*{{$d}}<span><br><br>
		@endforeach

		<input type="submit" value="Add"  class="btn btn-primary">
		<br>

		{{csrf_field()}}
		
	</form>
@endsection