<!DOCTYPE html>
<html>
<head>
	<title>Products</title>
</head>
<body>
	
	<h4>
		<a href="/product/ram">Ram</a> <br>
		<a href="/product/casing">Casing</a> <br>
		<a href="/product/storage">Storage</a> <br>
		<a href="/product/monitor">Monitor</a> <br>
		<a href="/product/graphics">Graphics</a> <br>
	</h4>

	<br>

	<center>
		<h2>Products</h2>
		<table border="1">
	        <thead>
	            <tr>
	                <th>Product Name</th>
	                <th>Price</th>
	                <th>Brand</th>
	                <th>Description</th>
	                <th>Add to cart</th>
	                <th>Review</th>
	            </tr>
	        </thead>
	        <tbody>
	            @for( $i=0; $i< 12; $i++)
	            <tr>
	                <td>{{$user[$i]->name}}</td>
	                <td>{{$user[$i]->price}}</td>
	                <td>{{$user[$i]->cname}}</td>
	                <td>{{$user[$i]->description}}</td>
	                <td><a href="/user/cart/">Add to cart</a></td>
	                <td><a href="/user/review/{{$user[$i]->id}}">Review</a></td>
	            </tr>
	            @endfor
	        </tbody>
    	</table>
    </center>	


    <center>
	    <h5>
	    	<a href="/customer">Home</a> |
			<a href="/logout">logout</a>
		</h5>
	</center>

</body>

</html>