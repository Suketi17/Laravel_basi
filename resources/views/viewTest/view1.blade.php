
 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css"/>
</head>
<body>

	<h1><?php echo $bien_duyhau; ?></h1>

	<form method="post" action="{{route('linkView2')}}" class="form">
		@csrf
		<h2>Đăng ký thành viên</h2>

		Username: <input type="text" name="username" value="" required/><br/>

		Password: <input type="text" name="password" value="" required/><br/>

		Email: <input type="email" name="email" value="" required/><br/>

		<input type="submit" name="dangky" value="Đăng Ký"/><br/>

	</form>

</body>
</html>