<?php
$signup = false;
// print_r($_POST);
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])){
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email_address'];
$phone = $_POST['phone'];
$error = signup($username,$password,$email,$phone);
$signup =true;
}
?>
<?php
	if($signup){
		if (!$error){
		?>
		<main class="container">
		<div class="bg-light p-5 rounded mt-3">
		<h1>Signup Success</h1>
		<p class="lead">Now you can login from <a href="/app/login.php">Here</a>.</p>
	</div>
</main>
<?php
		}else{
		?>
		<main class="container">
	<div class="bg-light p-5 rounded mt-3">
		<h1>Sinup Fail</h1>
		<p class="lead">Something Went Wrong :( <?= $error?></p>
	</div>
</main>
<?php
	}
}else{
	?>
	<form method="post" action="signup.php">
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
		<button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
	</form>
</main>
	<?}?>