<div id="infoMessage"><?php echo $message;?></div>
<div class="container">
	<div class="card card-container">
		<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<?php echo form_open("auth/login", array('class' => "form-signin"));?>
			<span id="reauth-email" class="reauth-email"></span>
			<?php echo form_input($identity);?>
			<?php echo form_input($password);?>
			<div id="remember" class="checkbox">
				<label>
					<?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
		<?php echo form_close();?><!-- /form -->
		<a href="forgot_password" class="forgot-password">
			Forgot the password?
		</a>
	</div><!-- /card-container -->
</div><!-- /container -->


