<main class="form-signup">
	<form method="post" action="test.php">
		<img class="mb-4"
			src="https://img.freepik.com/free-vector/flat-design-ninja-logo-template_23-2149008465.jpg?w=2000" alt=""
			width="150" height="150">
		<h1 class="h3 mb-3 fw-normal">Please signup here</h1>

		<div class="form-floating">
			<input name="username" type="text" class="form-control" id="floatingInputUsername"
				placeholder="name@example.com">
			<label for="floatingInputUsername">Username</label>
		</div>
		<div class="form-floating">
			<input name="phone" type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
			<label for="floatingInput">Phone</label>
		</div>
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
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
	</form>
</main>