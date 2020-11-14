<!DOCTYPE html>
<html>
<head>
	<title>Review page</title>
</head>
<body>
	<h1>Review</h1>
	
	<form method="post" >
		@csrf
		<table>
		<tr>
				<td>Product id</td>
				<td><input type="text" name="product" value="{{$id}}"></td>
				<td>{{$errors->first('product')}}</td>
			</tr>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
				<td>{{$errors->first('name')}}</td>
			</tr>
			<tr>
				<td>Comment</td>
				<td><input type="text" name="comment"></td>
				<td>{{$errors->first('comment')}}</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>