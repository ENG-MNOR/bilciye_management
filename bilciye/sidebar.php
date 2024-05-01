<div class="sidebar-container">
	<div class="sidemenu-container navbar-collapse collapse fixed-menu">
		<div id="remove-scroll">
			<ul class="sidemenu page-header-fixed p-t-20" data-keep-expanded="false"  data-auto-scroll="true" id="mydev" 
			data-slide-speed="200">
			<li class="sidebar-toggler-wrapper hide">
				<div class="sidebar-toggler">
					<span></span>
				</div>
			</li>
			<li class="sidebar-user-panel">
				<div class="user-panel">
					<div class="row">
						<div class="sidebar-userpic">
							<img src="assets/img/logos.png" class="img-responsive" alt=""> </div>
						</div>
						<div class="profile-usertitle">
							<div class="sidebar-userpic-name text-warning"> <?php echo ucfirst($_SESSION['username']); ?> </div>
							<div class="sidebar-userpic-name text-warning"> <?php echo ucfirst($_SESSION['usertype']); ?> </div>
						</div>
					</div>
				</li>
				<?php if(strcasecmp($_SESSION['usertype'], "admin")==0){ ?>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">dashboard</i>
						<span class="title font-weight-bold">Dashboard</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item active">
							<a data-toggle="tab" class="nav-link " href="#dash">
								<i class="material-icons">home</i>
								<span class="title">Home</span>
								<span class="selected"></span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">account_box</i>
						<span class="title">Registrations</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#address_tab" >
								<span class="title">Address</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#account_tab" >
								<span class="title">Accounts</span>
							</a>
						</li> -->
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#waste_tab" >
								<span class="title">Waste</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">group</i>
						<span class="title">Industries</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#indus_tab" >
								<span class="title">Industry</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">public</i>
						<span class="title">Minstaries</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#minst_tab" >
								<span class="title">Minstary</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">report</i>
						<span class="title">Report Illegal Dump</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab" class="nav-link " href="#reportings_tab" >
								<span class="title">Report</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">archive</i>
						<span class="title">Waste Request</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab" class="nav-link " href="#request_w_tab" >
								<span class="title">Request Waste</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">archive</i>
						<span class="title">Recycling</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#recycle_tab" >
								<span class="title">Recycle</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">person_outline</i>
						<span class="title">Users</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#users_tab" >
								<span class="title">User</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">report</i>
						<span class="title">Report</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#cit_rep_tab" >
								<span class="title">Citizen</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#dump_rep_tab" >
								<span class="title">Illegal Dump</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#recyl_rep_tab" >
								<span class="title">Recycling</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#waste_rep_tab" >
								<span class="title">Waste Request</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#recyl_gov_rep_tab" >
								<span class="title">Recycling</span>
							</a>
						</li>
					</ul>
				</li>
			<?php }if(strcasecmp($_SESSION['usertype'], "industry")==0){ ?>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">dashboard</i>
						<span class="title font-weight-bold">Dashboard</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item active">
							<a data-toggle="tab" class="nav-link " href="#dash">
								<i class="material-icons">home</i>
								<span class="title">Home</span>
								<span class="selected"></span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">account_box</i>
						<span class="title">Registrations</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab" class="nav-link " href="#address_tab" >
								<span class="title">Address</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#waste_tab" >
								<span class="title">Waste</span>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#citizen_tab" >
								<span class="title">Citizen</span>
							</a>
						</li> -->
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">archive</i>
						<span class="title">Recycling</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#recycle_tab" >
								<span class="title">Recycle</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">archive</i>
						<span class="title">Waste Request</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab" class="nav-link " href="#request_w_tab" >
								<span class="title">Request Waste</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">report</i>
						<span class="title">Report Illegal Dump</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab" class="nav-link " href="#reportings_tab" >
								<span class="title">Report</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">report</i>
						<span class="title">Report</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#cit_rep_tab" >
								<span class="title">Citizen</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#dump_rep_tab" >
								<span class="title">Illegal Dump</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#recyl_rep_tab" >
								<span class="title">Recycling</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#waste_rep_tab" >
								<span class="title">Waste Request</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
			<?php if(strcasecmp($_SESSION['usertype'], "Gov")==0){ ?>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">dashboard</i>
						<span class="title font-weight-bold">Dashboard</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item active">
							<a data-toggle="tab" class="nav-link " href="#dash">
								<i class="material-icons">home</i>
								<span class="title">Home</span>
								<span class="selected"></span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item start">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">public</i>
						<span class="title font-weight-bold">Goverment Recycling</span>
						<span class="selected"></span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item active">
							<a data-toggle="tab" class="nav-link " href="#gov_recycle">
								<span class="title">Recycle</span>
								<span class="selected"></span>
							</a>
						</li>

					</ul>
				</li>
				<li class="nav-item">
					<a href="#" class="nav-link nav-toggle">
						<i class="material-icons">report</i>
						<span class="title">Report</span>
						<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#cit_rep_tab" >
								<span class="title">Citizen</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#dump_rep_tab" >
								<span class="title">Illegal Dump</span>
							</a>
						</li>
						<li class="nav-item">
							<a data-toggle="tab"  class="nav-link " href="#recyl_gov_rep_tab" >
								<span class="title">Recycling</span>
							</a>
						</li>
					</ul>
				</li>
			<?php } ?>
			</ul>
		</div>
	</div>
</div>