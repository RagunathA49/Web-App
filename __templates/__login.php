<?php
$username = $_POST['email_address'];
$password = $_POST['password'];

$result = User::login($username, $password);

if ($result) {
    ?>
<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>LOGIN SUCESS</h1>
		<p class="lead">This example is to LOgin page</p>
	</div>
</main>
<?php
} else {
    ?>
<main class="form-signin">
	<form method="post" action="login.php">
		<img class="mb-4"
			src="https://img.freepik.com/free-vector/flat-design-ninja-logo-template_23-2149008465.jpg?w=2000" alt=""
			width="150" height="150">
		<h1 class="h3 mb-3 fw-normal">Please
			<??>
		</h1>

		<div class="form-floating">
			<input name="email_address" type="email" class="form-control" id="floatingInput"
				placeholder="name@example.com">
			<label for="floatingInput">Email address</label>
		</div>
		<div class="form-floating">
			<input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
			<label for="floatingPassword">Password</label>
		</div>

		<div class="checkbox mb-3">
			<label>
				<input type="checkbox" value="remember-me"> Remember me
			</label>
		</div>
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
	</form>
</main>
<?php
}
