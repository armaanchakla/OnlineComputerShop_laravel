<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register Here</h1>

	<form method="post" >
		@csrf
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
				<td>{{$errors->first('username')}}</td>

			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
				<td>{{$errors->first('password')}}</td>
			</tr>

			<tr>
				<td></td>
				<td><input type="radio" name="radio"  value="1"> Admin</td>
				<td><input type="radio" name="radio"  value="2"> Customer</td>
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