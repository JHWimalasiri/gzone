
<html>

<head>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/style.css" media="all"/>
	<link href="<?php echo base_url(); ?>/assets/css/font-awesome.css" rel="stylesheet">
</head>

<body>
<!--Top header-->

<div class="topword">
<div class="hnavbar">





    <?php if (!$this->session->userdata('logged_in')):; ?>
        <a href="<?php echo base_url('User/customer_register'); ?>">Sign up</a>
        <a href="<?php echo base_url('User/agent_register'); ?>">Be an Agent</a>
        <a href="<?php echo base_url('User/login'); ?>">Login</a>
    <?php endif; ?>

    <?php if ($this->session->userdata('logged_in')):; ?>

        <div class="hdropdown">
            <button class="hdropbtn">
                <i class="fa fa-user"></i>
            </button>
            <div class="hdropdown-content">
                <a href="viewdetails.php">View Profile</a>
                <a href="deleteprofile.php">Delete Profile</a>
                <a href="changepassword.php">Change Password</a>
            </div>
        </div>

        <a href="view_cart.php"><button class="view-cart" ><i class="fa fa-cart-arrow-down"></i></button></a>
        <a href="<?php echo base_url('User/logout'); ?>">(Logged in as <?php echo ($this->session->userdata('username')); ?>) Logout</a>
    <?php endif; ?>
</div>
</div>




<!--    --><?php //if(isset($_SESSION['SESS_LOGGEDIN']) == 1){ ?>
<!--        <a href="logout.php" style='color:white';>--><?php //echo "<text style='color:white;'>".$_SESSION['SESS_USERNAME']."</text>"; ?><!-- (Log out)</a>-->
<!---->
<!--    --><?php //}else{ echo "error"?>
<!--        <a class="link" href="login.php" style='color:white';>Login</a>-->
<!--    --><?php //} ?>





    <!-- <a href="#home">Sign up</a>
    <a href="#home">Be an Agent</a> -->



<!--//Top header-->

<!--Botttom header-->
<div class="header_bottom">
	<div class="container">
		<a href="index.php"><img src="<?php echo base_url(); ?>/assets/images/logo.png" id="logo"></a>
			<div class="search_bar">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="search" name="user_query" placeholder="Search..." required="">
					<!-- <input type="submit" name="Search" value="Search"> -->
					<button type="submit" name="search" value="Search" class="btn btn-default search" aria-label="Left Align">
					<i class="fa fa-search" aria-hidden="true"> </i>
					</button>
				</form>
			</div>
	</div>
</div>
<!--//Botttom header-->

<!-- Flash messages -->
<div>
    <?php if ($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
    <?php endif; ?>

    <?php if ($this->session->flashdata('user_loggedout')): ?>
        <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
    <?php endif; ?>

</div>

<!--<div class="menu">-->

  <div class="hbnavbar">
	  <a href="index.php">Home</a>
	  <a href="all_product.php">All Products</a>

		<div class="hbdropdown">
	    <button class="hbdropbtn">Mobile & Tablets
	      <i class="fa fa-caret-down"></i>
	    </button>

	    <div class="hbdropdown-content">

	     <a href="#">Mobile & Tablets</a>
	      <a href="#">Mobile & Tablets Accessories</a>
	      <a href="#">Other Smart Devices</a>
	    </div>
	  </div>

		<div class="hbdropdown">
			<button class="hbdropbtn">Computers & Laptops
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="hbdropdown-content">
				<a href="#">Computer Accessories</a>
				<a href="#">Datacards & Routers</a>
				<a href="#">Storage</a>
				<a href="#">Gaming</a>

			</div>
		</div>

		<div class="hbdropdown">
			<button class="hbdropbtn">Electronics
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="hbdropdown-content">
			    <a href="#">Camera</a>
				<a href="#">Audio & Video Accessories</a>
				<a href="#">Speakers</a>
				<a href="#">Headphones</a>
				<a href="#">Personal Care Applications</a>

			</div>
		</div>

		 <a href="#">Other Products</a>




</div>



