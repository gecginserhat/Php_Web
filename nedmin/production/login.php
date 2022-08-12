<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGİN</title>
	<!--<link rel="stylesheet" type="text/css" href="style.css">-->
	<style>
		body {
	background: white;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

* {
	font-family: sans-serif;
	box-sizing: border-box;
}
form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}
h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}

label {
	color: #888;
	font-size: 18px;
	padding: 10px;

}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}

button:hover {
	opacity: .7;
}
.error {
	background: #F2DEDE;
	color: #A94442;
	padding: 10px;
	width: 95%;
	border-radius: 5px;
	margin: 20px auto;

}

h1 {
	text-align: center;
	color: #fff;
}

a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover {
	opacity: .7;
}
img {
	width: 400px;
	padding-bottom: 20px;
}
form {
	background: #2A3F54;
}
	</style>
</head>
<body>
	<img src="logo.png">
	<form action="login1.php" method="post">

		<h2>PERSONEL GİRİŞ PANELİ</h2>
		<?php if(isset($_GET['error'])){ ?>
			<p class="error"><?php echo $_GET['error']; ?></p>
		<?php } ?>

		<label>Kullanıcı Adı</label>
		<input type="text" name="uname" placeholder="Kullanıcı Adını Giriniz"> <br>

		<label>Şifre</label>
		<input type="password" name="password" placeholder="Şifrenizi Giriniz"><br>

		<button type="submit">Giriş Yap</button>

	</form>
</body>
</html>