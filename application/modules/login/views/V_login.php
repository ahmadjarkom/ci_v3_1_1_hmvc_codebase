<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<!-- Bootstrap CSS -->
	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet" type="text/css" />

	<link rel="shortcut icon" href="<?php echo base_url('assets/images/main/png/logo_black.png') ?>">
	
	<!-- thanks to bootsnip https://bootsnipp.com/snippets/dldxB -->
	<link href="<?php echo base_url('assets/css/style_login.css')?>" rel="stylesheet" type="text/css" />

	<link href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css" />
	
</head>
<body>
	<div class="wrapper">
	  <div id="formContent">
	    <!-- Tabs Titles -->

	    <!-- Icon -->
	    <div style="padding-top: 30px;">
	      <h2>e-Disposisi</h2>
	      <hr class="colorgraph">
	    </div>

	    <!-- Login Form -->
	    <form method="post" action="<?php echo base_url('/login/login_submit') ?>">
	      	<small id="wrongpassword" class="form-text text-muted text-red">
	      		<?php echo !empty(@$this->session->flashdata('wrong')) ? $this->session->flashdata('wrong')."&nbsp;&nbsp;&nbsp;<i class='fa fa-close' onclick='clear_wrong_pass()'></i>" : "" ; ?>
      		</small>
	      	<input type="text" id="login" name="username" placeholder="Username" required />
	      	<input type="password" class="form-input" id="password" name="password" placeholder="Password" required />
	      	<input type="submit" value="Log In" />
	    </form>
	  </div>
	</div>
	
	<script type="text/javascript">
		function clear_wrong_pass(){
			document.getElementById('wrongpassword').innerHTML = '';
		}	
	</script>
</body>
</html>

