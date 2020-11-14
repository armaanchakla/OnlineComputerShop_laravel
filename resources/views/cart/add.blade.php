<!DOCTYPE html>
<html>
<head>
	<title>Add Cart</title>
</head>
<body>
	<h1>Cart</h1>
	
	<form method="post" >
		@csrf
		<table>
		<tr>
				<td>Product id</td>
				<td><input type="text" name="product" value="{{$id}}"></td>
				<td>{{$errors->first('product')}}</td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="text" name="price" value="{{$user[0]->price}}"></td>
				<td>{{$errors->first('price')}}</td>
			</tr>
			<tr>
				<td>Payment</td>
				<td><input type="radio" name="radio"  value="1"> Cash</td>
				<td><input type="radio" name="radio"  value="2"> Online</td>
				<td>{{$errors->first('radio')}}</td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
				<td></td>
			</tr>
		</table>
	</form>
</body>
</html>