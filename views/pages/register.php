<div class="container-fluid">
		<div class="container">
			<div class="formBox">
				<form method="post" id="register">
                                <div class="row">
                                        <div class="col-sm-12 text-center">
                                                <h1>Register</h1>
                                        </div>
                                </div>

                                <div class="row">
                                        <div class="col-sm-6">
                                                <div class="inputBox ">
                                                        <div class="inputText">First Name</div>
                                                        <input type="text" class="input" name="firstname" minlength="2" required>

                                                </div>
                                        </div>

                                        <div class="col-sm-6">
                                                <div class="inputBox">
                                                        <div class="inputText">Last Name</div>
                                                        <input type="text" class="input" name="lastname" minlength="2" required>

                                                </div>
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
                                            <div class="inputBox">
                                                        <div class="inputText">Email</div>
                                                        <input type="email" class="input" id="email" name="email" required>
                                                </div>
                                        </div>
                                </div>

                                <div class="row">
                                        <div class="col-sm-6">
                                                <a href="index.php"><button type="button" class="button">Cancel</button></a>
                                        </div>
                                    <div class="col-sm-6">
                                                <input type="submit" name='register' value="Register" class="button"/><br />
                                        </div>
                                </div>
				</form>
			</div>
		</div>
	</div>
 