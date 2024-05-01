<?php session_start(); 
if (isset($_SESSION['username']) && isset($_SESSION['user'])) {
	?>
	<!DOCTYPE html>
	<html lang="en">
	<!-- BEGIN HEAD -->
	<?php include 'head.php'; ?>
	<?php include 'config/RCC_Class.php';
	$coder=new rccClass();
	?>
	<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo center text-white">
					<img src="assets/img/bannel2.png">						
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search..." name="query">
						<span class="input-group-btn search-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
				data-target=".navbar-collapse">
				<span></span>
			</a>
			<!-- end mobile menu -->
			<!-- start header menu -->
			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					<!-- start notification dropdown -->
					<!-- end message dropdown -->
					<!-- start manage user dropdown -->
					<li class="dropdown dropdown-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
						data-close-others="true">
						<img alt="" class="img-circle " src="assets/img/logos.png" />
						<span class="username username-hide-on-mobile"> <?php echo ucfirst($_SESSION['username']); ?> </span>
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default animated jello">
						<li>
							<a href="logout.php">
								<i class="icon-logout"></i> Log Out </a>
							</li>
						</ul>
					</li>
					<!-- end manage user dropdown -->
					
			</ul>
		</div>
	</div>
</div>
<!-- end header -->
<!-- start page container -->
<div class="page-container">
	<!-- start sidebar menu -->
	<?php include 'sidebar.php'; ?>
	<!-- end sidebar menu -->
	<!-- start page content -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="panel tab-border card-topline-aqua">
				<div class="tab-content" >
					<?php  include 'home.php'; ?>	
				</div>
			</div>	

		</div>
	</div>
	<!-- end page content -->
</div>
<!-- end page container -->
<!-- start footer -->
<div class="page-footer" id="eventdh">
	<div class="page-footer-inner"> 2024 &copy; Bilciye Environment Cleaning System Developed By <mark>RCC Group SIX</mark>
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- end footer -->
</div>
<!-- start js include path -->
</body>
<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Jan 2020 10:32:13 GMT -->
</html>
<?php include 'plugins.php'; ?>
<?php include 'modal.php'; ?>
<?php include 'events.php'; ?>

<script type="text/javascript">
	$("#mydev").click(function(){
		$(".nav-link").removeClass("active");
	});
</script>

<?php 
}else {
	?>
	<?php 
	$url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/login.php';
	header('Location: '. $url);
}
?>