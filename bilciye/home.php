<div class="tab-pane active" id="dash">
	<div class="page-bar">
		<div class="page-title-breadcrumb">
			<div class="pull-left">
				<div class="page-title">Dashboard</div>
			</div>
			<!-- <ol class="breadcrumb page-breadcrumb pull-right">
				<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
					href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
				</li>
				<li class="active">Dashboard</li>
			</ol> -->
		</div>
	</div>
	<?php if (strcasecmp($_SESSION['usertype'], "admin") == 0) { ?>
		<!--------------------------- Admin widgets --------------------------------->
	<div class="state-overview">
		<div class="row">
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-blue">
					<span class="info-box-icon push-bottom"><i class="material-icons">place</i></span>
					<div class="info-box-content btn_address_re">
						<span class="info-box-text">
							<h4>Address</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from address where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-orange">
					<span class="info-box-icon push-bottom"><i class="material-icons">people</i></span>
					<div class="info-box-content btn_citizen_re">
						<span class="info-box-text">
							<h4>Citizens</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from citizen where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-purple">
					<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
					<div class="info-box-content btn_indus_re">
						<span class="info-box-text">
							<h4>Industries</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from industry where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-success">
					<span class="info-box-icon push-bottom"><i class="material-icons">archive</i></span>
					<div class="info-box-content btn_was_req_re">
						<span class="info-box-text">
							<h4>Waste Request</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from waste_request where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-blue">
					<span class="info-box-icon push-bottom"><i class="material-icons">public</i></span>
					<div class="info-box-content btn_minst_re">
						<span class="info-box-text">
							<h4>Minstaries</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from minstary where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-orange">
					<span class="info-box-icon push-bottom"><i class="material-icons">archive</i></span>
					<div class="info-box-content btn_recycle_re">
						<span class="info-box-text">
							<h4>Recycles</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from recycling where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-purple">
					<span class="info-box-icon push-bottom"><i class="material-icons">report</i></span>
					<div class="info-box-content btn_reporting_re">
						<span class="info-box-text">
							<h4>Reports</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from reporting where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-success">
					<span class="info-box-icon push-bottom"><i class="material-icons">archive</i></span>
					<div class="info-box-content btn_waste_re">
						<span class="info-box-text">
							<h4>Waste Types</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from waste where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<!-- <div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-danger">
					<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
					<div class="info-box-content text-center btn_point_view">
						<span class="info-box-text">
							<h4>View Every Citizen Point</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php $coder->fillCombo("select cit_id, name from citizen where deleted=0;", "citz_point_view", "Select Citizen Name"); ?>
						</span>
					</div>
				</div>
			</div> -->
				<!-- <div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-danger">
					<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
					<div class="info-box-content text-center btn_point_indtry_view">
						<span class="info-box-text">
							<h4>View Every Industry Point</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php $coder->fillCombo("select ind_id, ind_name from industry where deleted=0;", "indtry_point_view", "Select industry name"); ?>
						</span>
					</div>
				</div>
			</div> -->
				<!-- <div class="col-xl-3 col-md-6 col-12">
				<div class="info-box bg-danger text-center">
					<span class="info-box-icon push-bottom"><i class="material-icons">people</i></span>
					<div class="info-box-content btn_users_rep">
						<span class="info-box-text">
							<h4>Users</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from users where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div> -->

				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div id="piechart" style="width: 100%; height: 700px;"></div>
						</div>
						<div class="col-md-6">
							<div id="top_x_div" style="width: 50%; height: 500px;"></div>
							<!-- <div id="columnchart_values" style="width: 900px; height: 300px;"></div> -->
						</div>
					</div>
				</div>




			</div>

			<!-- <div class="row">
				<div class="col-md-12">
					<div class="card card-topline-red">
						<div class="card-head">
							<header>AREA LINE CHART</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body no-padding height-9">
							<div class="row">
								<div id="area_line_chart" class="chart-window"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="card card-topline-red">
						<div class="card-head">
							<header>DONUT CHART</header>
							<div class="tools">
								<a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
								<a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
								<a class="t-close btn-color fa fa-times" href="javascript:;"></a>
							</div>
						</div>
						<div class="card-body no-padding height-9">
							<div class="row">
								<div id="donut_chart" class="chart-window"></div>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!-- <div>
				<html>
				<head>
					<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
					<script type="text/javascript">
						google.charts.load("current", {packages:["corechart"]});
						google.charts.setOnLoadCallback(drawChart);
						function drawChart() {
							var data = google.visualization.arrayToDataTable([
								<?php
								$db = new mysqli("localhost", "root", "", "bilciye");
								$sql1 = "select * from waste_request where ind_id=1";
								$query_run = mysqli_query($db, $sql1);
								$row = mysqli_num_rows($query_run);
								?>
								['Language', 'Speakers (in millions)'],
								['German', <?php echo '<h4>' . $row . '</h4>' ?>],
								['French',  1.66],
								['Italian', 0.316],
								['Romansh', 0.0791]
								]);
							

							var options = {
								legend: 'none',
								pieSliceText: 'label',
								title: 'Swiss Language Use (100 degree rotation)',
								pieStartAngle: 100,
							};

							var chart = new google.visualization.PieChart(document.getElementById('piechart'));
							chart.draw(data, options);
						}
					</script>
				</head>
				<body>
					<div id="piechart" style="width: 900px; height: 500px;"></div>
				</body>
				</html>
			</div> -->

		</div>
		<!----------------------------- End admin widget --------------------------------->

	<!--------------------------- Start industry widget --------------------------------->
	<?php }
	if (strcasecmp($_SESSION['usertype'], "industry") == 0) { ?>
	<div class="state-overview">
		<div class="row">
			<div class="col-xl-4 col-md-6 col-12 btn_address_re">
				<div class="info-box bg-blue">
					<span class="info-box-icon push-bottom"><i class="material-icons">place</i></span>
					<div class="info-box-content">
						<span class="info-box-text">
							<h4>Address</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from address where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-orange">
					<span class="info-box-icon push-bottom"><i class="material-icons">people</i></span>
					<div class="info-box-content btn_citizen_re">
						<span class="info-box-text">
							<h4>Citizens</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from citizen where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-orange">
					<span class="info-box-icon push-bottom"><i class="material-icons">archive</i></span>
					<div class="info-box-content btn_recycle_re">
						<span class="info-box-text">
							<h4>Recycles</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from recycling where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-purple">
					<span class="info-box-icon push-bottom"><i class="material-icons">report</i></span>
					<div class="info-box-content btn_reporting_re">
						<span class="info-box-text">
							<h4>Reports</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from reporting where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-orange">
					<span class="info-box-icon push-bottom"><i class="material-icons">archive</i></span>
					<div class="info-box-content btn_was_req_re">
						<span class="info-box-text">
							<h4>Waste Request</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php
							$db = new mysqli("localhost", "root", "", "bilciye");
							$query = "select * from waste_request where deleted=0";
							$query_run = mysqli_query($db, $query);
							$row = mysqli_num_rows($query_run);
							echo '<h4>' . $row . '</h4>';
							?>
						</span>
					</div>
				</div>
			</div>
			<div class="col-xl-4 col-md-6 col-12">
				<div class="info-box bg-danger">
					<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
					<div class="info-box-content text-center btn_point_view">
						<span class="info-box-text">
							<h4>View Every Citizen Point</h4>
						</span>
						<span class="info-box-number"></span>
						<span class="progress-description">
							<?php $coder->fillCombo("select cit_id, name from citizen where deleted=0;", "citz_point_view", "Select Citizen Name"); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ENd ind widget -->

	<?php }
	if (strcasecmp($_SESSION['usertype'], "Gov") == 0) { ?>
		<div class="state-overview">
			<div class="row">
				<!-- <div class="col-xl-6 col-md-6 col-12">
					<div class="info-box bg-blue">
						<span class="info-box-icon push-bottom"><i class="material-icons">place</i></span>
						<div class="info-box-content btn_address_re">
							<span class="info-box-text">
								<h4>Address</h4>
							</span>
							<span class="info-box-number"></span>
							<span class="progress-description">
								<?php
								$db = new mysqli("localhost", "root", "", "bilciye");
								$query = "select * from address where deleted=0";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo '<h4>' . $row . '</h4>';
								?>
							</span>
						</div>
					</div>
				</div> -->
				<div class="col-xl-6 col-md-6 col-12">
					<div class="info-box bg-blue">
						<span class="info-box-icon push-bottom"><i class="material-icons">people</i></span>
						<div class="info-box-content btn_citizen_re">
							<span class="info-box-text">
								<h4>Citizens</h4>
							</span>
							<span class="info-box-number"></span>
							<span class="progress-description">
								<?php
								$db = new mysqli("localhost", "root", "", "bilciye");
								$query = "select * from citizen where deleted=0";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo '<h4>' . $row . '</h4>';
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-md-6 col-12">
					<div class="info-box bg-orange">
						<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						<div class="info-box-content btn_indus_re">
							<span class="info-box-text">
								<h4>Industries</h4>
							</span>
							<span class="info-box-number"></span>
							<span class="progress-description">
								<?php
								$db = new mysqli("localhost", "root", "", "bilciye");
								$query = "select * from industry where deleted=0";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo '<h4>' . $row . '</h4>';
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-md-6 col-12">
					<div class="info-box bg-orange">
						<span class="info-box-icon push-bottom"><i class="material-icons">archive</i></span>
						<div class="info-box-content btn_recycle_re">
							<span class="info-box-text">
								<h4>Recycles</h4>
							</span>
							<span class="info-box-number"></span>
							<span class="progress-description">
								<?php
								$db = new mysqli("localhost", "root", "", "bilciye");
								$query = "select * from recycling where deleted=0";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo '<h4>' . $row . '</h4>';
								?>
							</span>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-md-6 col-12">
					<div class="info-box bg-danger">
						<span class="info-box-icon push-bottom"><i class="material-icons">report</i></span>
						<div class="info-box-content btn_reporting_re">
							<span class="info-box-text">
								<h4>Reports</h4>
							</span>
							<span class="info-box-number"></span>
							<span class="progress-description">
								<?php
								$db = new mysqli("localhost", "root", "", "bilciye");
								$query = "select * from reporting where deleted=0";
								$query_run = mysqli_query($db, $query);
								$row = mysqli_num_rows($query_run);
								echo '<h4>' . $row . '</h4>';
								?>
							</span>
						</div>
					</div>
				</div>
				<!-- <div class="col-xl-6 col-md-6 col-12">
					<div class="info-box bg-danger">
						<span class="info-box-icon push-bottom"><i class="material-icons">group</i></span>
						<div class="info-box-content text-center btn_point_indtry_view">
							<span class="info-box-text">
								<h4>View Every Industry Point</h4>
							</span>
							<span class="info-box-number"></span>
							<span class="progress-description">
								<?php $coder->fillCombo("select ind_id, ind_name from industry where deleted=0;", "indtry_point_view", "Select industry name"); ?>
							</span>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	<?php } ?>
	<div id="piechart" style="width: 100%; height: 500px;"></div>
</div>

<!--------------------------- Waste Request --------------------------------->
<div class="tab-pane" id="request_w_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="wast_request" data-toggle="tab" href="#tb_wast_request" role="tab"
							aria-controls="profile" aria-selected="false">Waste Request</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_wast_request" role="tabpanel" aria-labelledby="wast_request">
						<div class="row">
							<div class="col-md-12">
								<!-- <button type="button" class="btn btn-primary btn_new_w_request_mdl" data-toggle="modal" data-target="#w_request_mdl">Add New</button>					 -->
								<div class="col-md-12">
									<?php $user = $_SESSION['user'] ?>
									<div id="tbl_id_w_request_mdl" class="tbl_cls_w_request_mdl">
										<?php
										if (strcasecmp($_SESSION['usertype'], "admin") == 0) {
											$coder->Table("call view_waste_request()", "dt_w_request_mdl", "n");
										} else {
											$coder->Table("call view_waste_req_indus('$user')", "dt_w_request_mdl", "n");
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Citizens --------------------------------->
<div class="tab-pane" id="citizen_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="citizeen" data-toggle="tab" href="#tb_citizeen" role="tab"
							aria-controls="profile" aria-selected="false">Citizen Registration</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_citizeen" role="tabpanel" aria-labelledby="citizeen">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_citizen_mdl" data-toggle="modal"
									data-target="#citizen_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_citizen_mdl" class="tbl_cls_citizen_mdl">
										<?php $coder->Table("call view_citizen()", "dt_citizen_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Houses --------------------------------->
<div class="tab-pane" id="home_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="homess" data-toggle="tab" href="#tb_homess" role="tab"
							aria-controls="profile" aria-selected="false">Home Registration</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_homess" role="tabpanel" aria-labelledby="homess">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_home_mdl" data-toggle="modal"
									data-target="#home_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_home_mdl" class="tbl_cls_home_mdl">
										<?php $coder->Table("call view_homes()", "dt_home_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Address --------------------------------->
<div class="tab-pane" id="address_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="adresss" data-toggle="tab" href="#tb_adresss" role="tab"
							aria-controls="profile" aria-selected="false">Address</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_adresss" role="tabpanel" aria-labelledby="adresss">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_adrs_mdl" data-toggle="modal"
									data-target="#adrs_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_adrs_mdl" class="tbl_cls_adrs_mdl">
										<?php $coder->Table("call view_address()", "dt_adrs_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Accounts --------------------------------->
<div class="tab-pane" id="account_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="acconts" data-toggle="tab" href="#tb_acconts" role="tab"
							aria-controls="profile" aria-selected="false">Accounts</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_acconts" role="tabpanel" aria-labelledby="acconts">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_accss_mdl" data-toggle="modal"
									data-target="#accss_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_accss_mdl" class="tbl_cls_accss_mdl">
										<?php $coder->Table("call view_account()", "dt_accss_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Industary --------------------------------->
<div class="tab-pane" id="indus_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="industrii" data-toggle="tab" href="#tb_industrii" role="tab"
							aria-controls="profile" aria-selected="false">Industry</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_industrii" role="tabpanel" aria-labelledby="industrii">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_indus_mdl" data-toggle="modal"
									data-target="#indus_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_indus_mdl" class="tbl_cls_indus_mdl">
										<?php $coder->Table("call view_industry()", "dt_indus_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Minstary --------------------------------->
<div class="tab-pane" id="minst_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="minstarii" data-toggle="tab" href="#tb_minstarii" role="tab"
							aria-controls="profile" aria-selected="false">Minstary</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_minstarii" role="tabpanel" aria-labelledby="minstarii">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_minst_mdl" data-toggle="modal"
									data-target="#minst_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_minst_mdl" class="tbl_cls_minst_mdl">
										<?php $coder->Table("call view_minstary()", "dt_minst_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Recycle --------------------------------->
<div class="tab-pane" id="recycle_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="recycles" data-toggle="tab" href="#tb_recycles" role="tab"
							aria-controls="profile" aria-selected="false">Recycling</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_recycles" role="tabpanel" aria-labelledby="recycles">
						<div class="row">
							<div class="col-md-12">
								<!-- <button type="button" class="btn btn-primary btn_new_recy_mdl" data-toggle="modal"
									data-target="#recy_mdl">Add New</button> -->
								<div class="col-md-12">
									<?php $user = $_SESSION['user'] ?>
									<div id="tbl_id_recy_mdl" class="tbl_cls_recy_mdl">
										<?php
										if (strcasecmp($_SESSION['usertype'], "admin") == 0) {
											$coder->Table("call View_recycling_admin()", "dt_recy_mdl", "n");
										} else {
											$coder->Table("call view_recycling('$user')", "dt_recy_mdl", "n");
										}
										?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Waste --------------------------------->
<div class="tab-pane" id="waste_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="wastee" data-toggle="tab" href="#tb_wastee" role="tab"
							aria-controls="profile" aria-selected="false">Waste</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_wastee" role="tabpanel" aria-labelledby="wastee">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_waste_mdl" data-toggle="modal"
									data-target="#waste_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_waste_mdl" class="tbl_cls_waste_mdl">
										<?php $coder->Table("call view_waste()", "dt_waste_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Users --------------------------------->
<div class="tab-pane" id="users_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="userss" data-toggle="tab" href="#tb_userss" role="tab"
							aria-controls="profile" aria-selected="false">Users</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_userss" role="tabpanel" aria-labelledby="userss">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_user_mdl" data-toggle="modal"
									data-target="#user_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_user_mdl" class="tbl_cls_user_mdl">
										<?php $coder->Table("call view_users()", "dt_user_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- Reporting --------------------------------->
<div class="tab-pane" id="reportings_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="was_report" data-toggle="tab" href="#tb_was_report" role="tab"
							aria-controls="profile" aria-selected="false">Reporting</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_was_report" role="tabpanel" aria-labelledby="was_report">
						<div class="row">
							<div class="col-md-12">
								<!-- <button type="button" class="btn btn-primary btn_new_w_report_mdl" data-toggle="modal" data-target="#w_report_mdl">Add New</button>					 -->
								<div class="col-md-12">
									<div id="tbl_id_w_report_mdl" class="tbl_cls_w_report_mdl">
										<?php $coder->Table("call view_reporting()", "dt_w_report_mdl", "i") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!--------------------------- gov_recycle --------------------------------->
<div class="tab-pane" id="gov_recycle">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="gov_rcy" data-toggle="tab" href="#tb_gov_rcy" role="tab"
							aria-controls="profile" aria-selected="false">Recycling</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_gov_rcy" role="tabpanel" aria-labelledby="gov_rcy">
						<div class="row">
							<div class="col-md-12">
								<button type="button" class="btn btn-primary btn_new_go_recy_mdl" data-toggle="modal"
									data-target="#go_recy_mdl">Add New</button>
								<div class="col-md-12">
									<div id="tbl_id_go_recy_mdl" class="tbl_cls_go_recy_mdl">
										<?php $coder->Table("call view_goverment_recyle()", "dt_go_recy_mdl", "n") ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------------Citizen Report ----------------------------------->
<div class="tab-pane" id="cit_rep_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="citizz_repts" data-toggle="tab" href="#tb_citizz_repts" role="tab"
							aria-controls="profile" aria-selected="false">Citizen</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="view_cit_pnts" data-toggle="tab" href="#tb_view_cit_pnts" role="tab"
							aria-controls="profile" aria-selected="false">Cizien Points</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_citizz_repts" role="tabpanel" aria-labelledby="citizz_repts">
						<div class="row">
							<div class="col-md-8">
								<?php
								$coder->fillCombo("select cit_id,name from citizen where deleted=0", "cbm_cit_rpts_print", "Select Citizen Name");
								?>
								<button class="btn btn-sm btn-primary btn_citizen_re_single">Single Citizen</button>
								<button class="btn btn-sm btn-primary btn_citizen_re">All Citizens</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane" id="tb_view_cit_pnts" role="tabpanel" aria-labelledby="view_cit_pnts">
						<div class="row">
							<div class="col-md-8">
								<?php
								$coder->fillCombo("select cit_id,name from citizen where deleted=0", "cbm_cit_ponts_rpts_print", "Select Citizen Name");
								?>
								<button class="btn btn-sm btn-primary btn_view_every_cit_points">View Citizen
									Points</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------------Illegal Dump Report ----------------------------------->
<div class="tab-pane" id="dump_rep_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="Illegal_d_rep" data-toggle="tab" href="#tb_Illegal_d_rep" role="tab"
							aria-controls="profile" aria-selected="false">Illegal Dump</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_Illegal_d_rep" role="tabpanel" aria-labelledby="Illegal_d_rep">
						<div class="row">
							<div class="col-md-8">
								<?php
								$coder->fillCombo("select cit_id,name from citizen where deleted=0", "cbm_illegl_dump_cit_rpts_print", "Select Citizen Name");
								?>
								<button class="btn btn-sm btn-primary btn_illegal_citizen_re_single">Single
									report</button>
								<button class="btn btn-sm btn-primary btn_illegal_citizen_re">All reports</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------------Recycle Report ----------------------------------->
<div class="tab-pane" id="recyl_rep_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="rcycle_cit_rep" data-toggle="tab" href="#tb_rcycle_cit_rep" role="tab"
							aria-controls="profile" aria-selected="false">Recycle</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_rcycle_cit_rep" role="tabpanel"
						aria-labelledby="rcycle_cit_rep">
						<div class="row">
							<div class="col-md-8">
								<?php
								$coder->fillCombo("select cit_id,name from citizen where deleted=0", "cbm_recyc_cit_rpts_print", "Select Citizen Name");
								?>
								<button class="btn btn-sm btn-primary btn_recyc_citizen_re_single">Single
									report</button>
								<button class="btn btn-sm btn-primary btn_recyc_citizen_re">All reports</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------------Waste request Report ----------------------------------->
<div class="tab-pane" id="waste_rep_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="was_req_rep" data-toggle="tab" href="#tb_was_req_rep" role="tab"
							aria-controls="profile" aria-selected="false">Waste request</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="wst_2_date" data-toggle="tab" href="#tb_wst_2_date" role="tab"
							aria-controls="profile" aria-selected="false">Waste Request Between Dates</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="was_req_stts_rep" data-toggle="tab" href="#tb_was_req_stts_rep"
							role="tab" aria-controls="profile" aria-selected="false">Waste request status</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_was_req_rep" role="tabpanel" aria-labelledby="was_req_rep">
						<div class="row">
							<div class="col-md-8">
								<?php
								$coder->fillCombo("select cit_id,name from citizen where deleted=0", "cbm_wa_requ_rpts_print", "Select Citizen Name");
								?>
								<button class="btn btn-sm btn-primary btn_was_req_rep_citizen_re_single">Single
									report</button>
								<button class="btn btn-sm btn-primary btn_was_req_rep_citizen_re">All reports</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane" id="tb_wst_2_date" role="tabpanel" aria-labelledby="wst_2_date">
						<div class="row">
							<div class="col-md-4">
								<label>From</label>
								<input type="date" name="betwn_date1" id="betwn_date1" class="form-control">
								<label>To</label>
								<input type="date" name="betwn_date2" id="betwn_date2" class="form-control">
								<button class="btn btn-sm btn-primary btn_date_btwn">All reports</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane" id="tb_was_req_stts_rep" role="tabpanel" aria-labelledby="was_req_stts_rep">
						<div class="row">
							<div class="col-md-8">
								<select class="form-control" id="wst_stts_reprt" name="wst_stts_reprt">
									<option value="Pending">Pending</option>
									<option value="progress">In Progress</option>
									<option value="done">Done</option>
								</select>
								<p></p>
								<button class="btn btn-sm btn-primary btn_was_req_rep_sttts_re">All reports</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>

<!---------------------------Recycle gov Report ----------------------------------->
<div class="tab-pane" id="recyl_gov_rep_tab">
	<div class="row">
		<div class="col-12">
			<header class="panel-heading panel-heading-gray custom-tab" style="margin-bottom: 3%">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link" id="recy_gov_tab" data-toggle="tab" href="#tb_recy_gov_tab" role="tab"
							aria-controls="profile" aria-selected="false">Recycle</a>
					</li>
				</ul>
			</header>
			<div class="panel-body">
				<div class="tab-content">
					<!-- ----------------------------------------------------- -->
					<div class="tab-pane active" id="tb_recy_gov_tab" role="tabpanel" aria-labelledby="recy_gov_tab">
						<div class="row">
							<div class="col-md-8">
								<?php
								$coder->fillCombo("select ind_id,ind_name from industry where deleted=0", "cbm_industry_select_print", "Select Industry Name");
								?>
								<button class="btn btn-sm btn-primary btn_indus_vie_re_single">Single report</button>
								<button class="btn btn-sm btn-primary btn_indus_vie_re">All reports</button>
							</div>
						</div>
					</div>
					<!-- ----------------------------------------------------- -->
				</div>
			</div>
		</div>
	</div>
</div>
<script src="../wep/assets/js/main.js"></script>
<script src="../wep/app.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	$(document).ready(function () {


		count();
		function count() {
			$.ajax({
				method: "POST",
				dataType: "JSON",
				data: {
					action: "count",
				},
				url: "../wep/application/api/admin.php",
				success: (res) => {
					console.log(res.data);
					google.charts.load('current', { 'packages': ['corechart'] });
					google.charts.setOnLoadCallback(() => drawChart(res.data)); // Pass the response data to drawChart
				},
				error: (err) => {
					console.log(err);
				},
			});
		}

		function drawChart(data) {
			// Convert the received data to a format suitable for Google Charts
			var chartData = [['Most', 'Requestedcompany']];
			data.forEach(item => {
				chartData.push([item.ind_name, parseInt(item.request_count)]);
			});

			// Create a DataTable from the data
			var dataTable = google.visualization.arrayToDataTable(chartData);

			var options = {
				title: 'Companies Request Count'
			};

			var chart = new google.visualization.PieChart(document.getElementById('piechart'));

			chart.draw(dataTable, options);
		}

		function count2() {
			$.ajax({
				method: "POST",
				dataType: "JSON",
				data: {
					action: "count",
				},
				url: "../wep/application/api/admin.php",
				success: (res) => {
					console.log(res.data);
					google.charts.load('current', { 'packages': ['bar'] });
					google.charts.setOnLoadCallback(() => drawChart2(res.data)); // Pass the response data to drawChart
				},
				error: (err) => {
					console.log(err);
				},
			});
		}

		function drawChart2(data) {
			// Convert the received data to a format suitable for Google Charts
			var chartData = [['Opening Move', 'Percentage']];
			data.forEach(item => {
				chartData.push([item.ind_name, parseInt(item.request_count)]);
			});

			// Create a DataTable from the data
			var dataTable = google.visualization.arrayToDataTable(chartData);

			var options = {
				title: 'Chess opening moves',
				width: 500,
				legend: { position: 'none' },
				chart: {
					title: '',
					subtitle: ''
				},
				bars: 'horizontal', // Required for Material Bar Charts.
				axes: {
					x: {
						0: { side: 'top', label: 'Percentage' } // Top x-axis.
					}
				},
				bar: { groupWidth: "90%" }
			};

			var chart = new google.charts.Bar(document.getElementById('top_x_div'));
			chart.draw(dataTable, google.charts.Bar.convertOptions(options));
		}

		count();
		function count2() {
			$.ajax({
				method: "POST",
				dataType: "JSON",
				data: {
					action: "countAddress",
				},
				url: "../wep/application/api/admin.php",
				success: (res) => {
					console.log(res.data);
					google.charts.load('current', { 'packages': ['bar'] });
					google.charts.setOnLoadCallback(() => drawChart2(res.data)); // Pass the response data to drawChart
				},
				error: (err) => {
					console.log(err);
				},
			});
		}

		function drawChart2(data) {
			// 	// Convert the received data to a format suitable for Google Charts
			var chartData = [['The Address', 'Percentage']];
			data.forEach(item => {
				chartData.push([item.name, parseInt(item.citizens)]);
			});

			// Create a DataTable from the data
			var dataTable = google.visualization.arrayToDataTable(chartData);

			var options = {
				title: '',
				width: 500,
				legend: { position: 'none' },
				chart: {
					title: '',
					subtitle: ''
				},
				bars: 'horizontal', // Required for Material Bar Charts.
				axes: {
					x: {
						0: { side: 'top', label: 'Percentage' } // Top x-axis.
					}
				},
				bar: { groupWidth: "90%" }
			};

			var chart = new google.charts.Bar(document.getElementById('top_x_div'));
			chart.draw(dataTable, google.charts.Bar.convertOptions(options));
		}

		count2();// Call count function to fetch data and draw chart
		function drawChart3(data) {
			// Create a DataTable from the data
			var chartData = [['Opening Move', 'Percentage']];
			data.forEach(item => {
				chartData.push([item.ind_name, parseInt(item.request_count)]);
			});

			var dataTable = google.visualization.arrayToDataTable(chartData);

			var options = {
				title: 'Chess opening moves',
				width: 500,
				legend: { position: 'none' },
				chart: {
					title: '',
					subtitle: ''
				},
				bars: 'horizontal',
				axes: {
					x: {
						0: { side: 'top', label: 'Percentage' }
					}
				},
				bar: { groupWidth: "90%" }
			};

			var chart = new google.charts.Bar(document.getElementById('top_x_div'));
			chart.draw(dataTable, google.charts.Bar.convertOptions(options));
		}

		// $(".login").click((e) => {

	});
</script>
</script>