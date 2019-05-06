<div class="container-fluid">
		<div class="container">
			<div class="formBox">
				<form method="post" id="login">
                                <div class="row">
                                        <div class="col-sm-12 text-center">
                                                <h1>Login</h1>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-6">
                                                <div class="inputBox">
                                                        <div class="inputText">Username</div>
                                                        <input type="text" class="input" name="username" minlength="2" required>
                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="inputBox">
                                                        <div class="inputText">Password</div>
                                                        <input type="password" class="input" name="password" minlength="6" required>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-sm-12">
                                                <input type="submit" name="login" class="button" value="Login" /> 
                                        </div>
                                  <div class="row" id="login-register">
                                        <div class="col-sm-12">   
                                            <p><h5>Please <a href="?controller=pages&action=register">register</a> if this is your first time logging in!</h5></p>
                                        </div>
                                </div>
				</form>
			</div>
		</div>
	</div>
 