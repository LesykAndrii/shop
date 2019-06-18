@foreach(App\Categories::all() as $category)
	<p>
		<a href='/categories/{{$category->url}}'>
				{{$category->name}}
		</a>
	</p>
@endforeach