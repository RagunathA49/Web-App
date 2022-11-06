<?php

$signup = false;

if (isset($_POST['username']) and isset($_POST['password']) and !empty($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone'])) {
    $username=$_POST['username'];
    $phone=$_POST['phone'];
    $email=$_POST['email_address'];
    $password=$_POST['password'];
    $error=User::signup($username, $password, $email, $phone);
   
    $signup=true;
}
?>

<?php
    if ($signup) {
        print_r($error);
        if (!$error) {
            ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        <h1>Signup Success</h1>
        <p class="lead">Now you can login from <a href="login.php">here</a>.</p>

    </div>
</main>
<?php
        } else {
            ?>
<main class="container">
    <div class="bg-light p-5 rounded mt-3">
        
        <h1>Signup Fail</h1>
        <p class="lead">Something went wrong, <?=$error?>
        </p>
    </div>
</main>
<?php
        }
    } else {
        ?>
<main class="form-signup" style="margin-top:50px;">
    <form action=signup.php method="post">
        <img class="logo" src="https://img.freepik.com/free-vector/flat-design-ninja-logo-template_23-2149008465.jpg?w=2000" alt="" width="100" height="100">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
        </div>
		<div class="form-floating">
			<input name="username" type="username" class="form-control" id="floatingInputUsername"
				placeholder="name@example.com">
			<label for="floatingInputUsername">Username</label>
        </div>
        <div class="form-floating">
			<input name="phone" type="phone" class="form-control" id="floatingInput" placeholder="name@example.com">
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
        <p class="account" style="left:20px">Have an account?<a href="login.php">Log in</a></p>
        <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p> -->
    </form>
</main>
<?php
    }
