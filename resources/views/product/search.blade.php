<!DOCTYPE html>
<html>
<head>
	<title>Search</title>
</head>
<body>
	<h1>Search Here</h1>

	<form method="post" >
		@csrf
		<table>
			<tr>
				<td>Search</td>
				<td><input type="text" name="search"></td>
				<td>{{$errors->first('search')}}</td>

			</tr>
			<tr>
				<td>Price Below</td>
				<td><input type="text" name="price"></td>
				<td>{{$errors->first('price')}}</td>
			</tr>

			
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>