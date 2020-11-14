<!DOCTYPE html>
<html>
<head>
	<title>Customer Home page</title>
</head>
<body>
	<h1>Welcome to Computer Shop</h1>

<h3>want to buy anything</h3>
	
	<a href="/product/casing">Casing</a> |
	<a href="/product/storage">Storage</a> |
	<a href="/product/monitor">Monitor</a> |
	<a href="/product/laptop">laptop</a> |
	<br>
	<h3>our popular product</h3> <br>

	<table border="0">

	@for( $i=0; $i< count($user); $i++)
		
			
			
		<td>{{$user[$i]->name}}</td></tr>
		<tr>
			<td>price:</td>
		<td>{{$user[$i]->price}}</td></tr>
		<tr>
			<td>Brand</td>
			<td>{{$user[$i]->cname}}</td></tr>
		<tr><td>{{$user[$i]->description}}</td>

	
		<td>
			<a href="/user/cart/">Add to cart  </a> | 
			<a href="/user/review/{{$user[$i]->id}}">Review  </a> | 
			
		</td>
	</tr>
	
		
@endfor
	</table>
	<a href="/customer">Home</a> |
	<a href="{{route('user.product')}}">Back</a> |
	<a href="/logout">logout</a>
</body>
</html>