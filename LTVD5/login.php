<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./reset.css">
<link rel="stylesheet" href="./style.css">
<title>Login Page</title>
</head>

<body>

<div class="wrapper fade-in-down">
<div id="form-content">

<!-- Tabs -->
<a href="/LTW_ltvd5-main/login.php">
<h2 class="active">Đăng nhập</h2>
</a>

<a href="/LTW_ltvd5-main/register.php">
<h2 class="inactive underline-hover">Đăng ký</h2>
</a>

<!-- Icon -->
<div class="fade-in first">
<img src="./imgs/avatar.png" id="avatar" alt="User Icon">
</div>

<!-- Login Form -->
<form>

<input
type="email"
class="fade-in second"
name="email"
placeholder="Email"
>

<input
type="password"
class="fade-in third"
name="password"
placeholder="Mật khẩu"
>

<input
type="submit"
class="fade-in fourth"
value="Đăng nhập"
>

</form>

<!-- Footer -->
<div id="form-footer">
<a class="underline-hover" href="#">Quên mật khẩu?</a>
</div>

</div>
</div>

</body>
</html>