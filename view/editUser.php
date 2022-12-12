<?php include 'header.php';?>
	<!-- Header End====================================================================== -->
	<div id="mainBody">
		<div class="container">
			<div class="row">
				<!-- Sidebar ================================================== -->
				
				<!-- Sidebar end=============================================== -->
				<div class="span9">
					<ul class="breadcrumb">
						<li><a href="index.html">Home</a> <span class="divider">/</span></li>
						<li class="active">Registration</li>
					</ul>
					<h3> Registration</h3>
					<div class="well">

						<form class="form-horizontal" method="post" action="./action.php?post=True" >
							<h4>Your personal information</h4>
						
							<div class="control-group">
								<label class="control-label" for="inputLnam">Username <sup>*</sup></label>
								<div class="controls">

									<input name="username" value="<?php echo $profile["username"]; ?>" type="text" id="inputLnam" placeholder="Username">
									<input name="id" value="<?php echo $profile["id"]; ?>" type="hidden" id="inputLnam" placeholder="Username">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="input_email">Email <sup>*</sup></label>
								<div class="controls">
									<input type="text" name="email" value="<?php echo $profile["email"]; ?>" id="input_email" placeholder="Email">
								</div>
							</div>
						
							
							<div class="control-group">
								<label class="control-label" for="address">Address<sup>*</sup></label>
								<div class="controls">
									<input type="text" name="address" value="<?php echo $profile["address"]; ?>" id="address" placeholder="Adress" /> <span>Street
										address, P.O. box, company name, c/o</span>
								</div>
							</div>

							<div class="control-group">
								<label class="control-label" for="mobile">Mobile Phone<sup>*</sup></label>
								<div class="controls">
									<input type="text" value="<?php echo $profile["phone"]; ?>" name="phone" id="mobile" placeholder="Mobile Phone" />
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mobile">Role<sup>*</sup></label>
								<div class="controls">
									<input type="text" value="<?php echo $profile["role"]; ?>" name="role" id="mobile" placeholder="Role" />
								</div>
							</div>

							<p><sup>*</sup>Required field </p>

							<div class="control-group">
								<div class="controls">
									<input type="hidden" name="email_create" value="1">
									<input type="hidden" name="is_new_customer" value="1">
									<input class="btn btn-large btn-success" type="submit" value="Register" />
								</div>
							</div>

						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- MainBody End ============================= -->
	<!-- Footer ================================================================== -->
	<?php include 'footer.php';?>