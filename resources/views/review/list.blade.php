<!DOCTYPE html>
<html>
<head>
	<title>Review list</title>
</head>
<body>
	<h1>Review List</h1>	
    <center>

	<table border="1">
		<tr>
			<td>ID</td>
			
			<td>Name</td>
			<td>Comment</td>
			<td>Product id</td>
			<td>ACTION</td>
		</tr>


	@foreach($users as $std)
		<tr>
			<td>{{ $std->id }}</td>
		
			<td>{{ $std->name }}</td>
			<td>{{ $std->comment }}</td>
			<td>{{ $std->productid }}</td>
			<td>
			
				<a href="{{ route('review.delete', $std->id) }}"> DELETE </a> | 
				
			</td>
		</tr>
	@endforeach

	</table>

	<br>
	
	<h5>
		<a href="{{route('home.index')}}">Back</a> |
		<a href="{{route('logout.index')}}">logout</a>
	</h5>
	</center>
</body>
</html>