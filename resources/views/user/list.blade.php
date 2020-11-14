<!DOCTYPE html>
<html>
<head>
	<title>userlist</title>
</head>
<body>
	<center>
	<h1>User List</h1>


	<table border="1">
		<tr>
			<td>ID</td>
			
			<td>USERNAME</td>
			<td>Type</td>
			<td>PASSWORD</td>
			<td>ACTION</td>
		</tr>

		@foreach($users as $std)
		<tr>
			<td>{{ $std->id }}</td>
		
			<td>{{ $std->username }}</td>
			<td>{{ $std->type }}</td>
			<td>{{ $std->password }}</td>
			<td><a href="{{ route('user.delete', $std->id) }}"> DELETE</a></td>
		</tr>
		@endforeach

	</table>
	<h5>
		<a href="{{route('home.index')}}">Back</a> |
		<a href="{{route('logout.index')}}">logout</a>
	</h5>
	</center>
</body>
</html>