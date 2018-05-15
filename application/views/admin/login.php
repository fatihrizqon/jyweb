<main class="mdl-layout__content black-material-bg">
  <div class="page-content">
    <div class="mdl-grid">
    	<div class="mdl-cell mdl-cell--4-col">
    		<!-- Spacer -->
    	</div>
    	<div class="mdl-cell mdl-cell--4-col" align="justify">

		<div class="login-card-layout white-bg mdl-shadow--2dp">	
			<h5 class="ubuntu-font" align="center"><b>Admin Panel</b></h5>
			<hr>
			<div class="login-card" align="justify">
			<!-- Simple Textfield -->
			<?php echo form_open_multipart('admin/action_login');?>

		      <md-input-container class="md-block">
		        <label>Username</label>
		        <input md-maxlength="30" required md-no-asterisk name="username" ng-model="myApp.username">
		        <div ng-messages="myApp.username.$error">
		          <div ng-message="required">This is required.</div>
		          <!-- <div ng-message="md-maxlength">The description must be less than 30 characters long.</div> -->
		        </div>
		      </md-input-container>

		      <md-input-container class="md-block">
		        <label>Password</label>
		        <input md-maxlength="30" required md-no-asterisk name="password" type="password" ng-model="myApp.password">
		        <div ng-messages="myApp.password.$error">
		          <div ng-message="required">This is required.</div>
		          <!-- <div ng-message="md-maxlength">The description must be less than 30 characters long.</div> -->
		        </div>
		      </md-input-container>


			  <div align="center">
				<button class="mdl-button mdl-js-button mdl-button--primary">
				  Login
				</button>
			  </div>
			  <hr>
			  </div>

			</div>		

			<br>
		</div>

    	</div>
    	<div class="mdl-cell mdl-cell--4-col">
    		<!-- Spacer -->
    	</div>
    </div>
   </div>
</main>