<!-- -----------MDL DELETE------------ -->
<div style="position: absolute">
  <div class="modal fade" id="mdl_delete_all"  role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="top: 150px;">
        <div class="model-header bg-orange">
          <h2 class="model-tilte text-center" style="font-family: times new roman; font-weight: bold; color: black;">Delete Record</h2>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-12 text-center">
              <h4 style="font-size: 16px; text-align: center;color: black;"><strong>Are you sure you want to delete this record?</strong></h4><br>
              <h1 style="font-family: impact; font-size: 20px; text-align: center; color: red; "></h1>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-danger btn-sm btn-circle" id="yes_d_btn"><span>YES</span></button>
            <button type="button" class="btn btn-success btn-sm btn-circle" data-dismiss="modal"><span id="spm_deld_Faculty">NO</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END MDL DELETE -->

<!-- ################################## Report modal ############################### -->
<div class="modal  fade" id="mdl_All_reports" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-top: 3%">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel"> Report</h4>
        <button type="button" class="exit" style="background-color: white; cursor: pointer;" data-dismiss="modal" aria-label="exit">
          <span aria-hidden="true">&times;</span>
        </button>
        <button type="button" class="btn btn-success btn-sm" id="btn_prt_dt_rpt">PRINT</button> 
      </div>

      <div class="modal-body">
        <div class="row">
          
          <div class="col-md-12">
            <form id="rpt_show_PRINT">
              <div class="col-md-12">
               <center>
                <img src="assets/img/bannel.png" class="img img-fluid " style="width: 100%; height: 130px; margin-top: -2%;">
              </center>
            </div>
            <div class="col-md-12">
              <div id="rpt_show"></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- ---------------Waste request model--------------------------- -->
<div class="modal fade" id="w_request_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Waste Request</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="w_request_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_w_request_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="waste_request_proc"  value="waste_request_proc">
            <input type="hidden" name="request_id" id="request_id">
          </div>
          <div class="col-md-12">
            <label>Status</label>
            <!-- <input type="text" name="wst_stts" id="wst_stts" class="form-control" required> -->
            <select class="form-control" id="wst_status" name="wst_status">
              <option value="Pending">Pending</option>
              <option value="progress">In Progress</option>
              <option value="done">Done</option>
            </select>
          </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <!-- <button type="button" class="btn btn-primary" id="btn_save_w_request_mdl">Save</button> -->
    <button type="button" class="btn btn-primary" id="btn_update_w_request_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Citizen model--------------------------- -->
<div class="modal fade" id="citizen_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Citizens</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="citizen_m_alert"></div>
    <div class="modal-body">
      <form id="frm_citizen_m">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="citizen_proc"  value="citizen_proc">
            <input type="hidden" name="cit_id" id="cit_id">
          </div>
          <div class="col-md-12">
            <label>Citizen Name</label>
            <input type="text" name="citz_name" id="citz_name" class="form-control" placeholder="Enter citizen name" required>
          </div>
          <div class="col-md-12">
            <label>Citizen Tell</label>
            <input type="text" name="citz_tell" id="citz_tell" class="form-control" placeholder="Enter citizen tell" required>
          </div>
          <div class="col-md-12">
            <label>Password</label>
            <input type="text" name="citz_pass" id="citz_pass" class="form-control" placeholder="Enter citizen password" required>
          </div> 
          <div class="col-md-12">
            <label>Email</label>
            <input type="email" name="citz_email" id="citz_email" class="form-control" placeholder="Enter citizen email" required>
          </div> 
          <div class="col-md-12">
            <label>Home Number</label>
            <input type="number" name="citz_h_no" id="citz_h_no" class="form-control" placeholder="Enter home number" required>
          </div> 
          <div class="col-md-12">
            <label>Address</label>
           <?php  
            $coder->fillCombo("select add_no,concat(address.district,', ',address.village,', ',address.zone) from address where deleted=0;","citiz_adres","Select Address");
           ?>
         </div>
         <div class="col-md-12">
            <label>Image</label>
            <input type="file" name="citz_image" id="citz_image" class="form-control" required>
          </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="save_citizen_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_citizen_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Home model--------------------------- -->
<div class="modal fade" id="home_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Homes</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="home_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_home_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="homes_proc"  value="homes_proc">
            <input type="hidden" name="home_id" id="home_id">
          </div>
          <div class="col-md-12">
            <label>Address</label>
            <?php  
              $coder->fillCombo("select add_no,concat(address.district,', ',address.village,', ',address.zone) from address where deleted=0","home_addre","Select Address");
            ?>
          </div>
          <div class="col-md-12">
            <label>Home Number</label>
            <input type="text" name="hom_num" id="hom_num" class="form-control" placeholder="Enter home number" required>
          </div>
          <div class="col-md-12">
            <label>Home Type</label>
            <input type="text" name="ho_type" id="ho_type" class="form-control" placeholder="Enter home type" required>
          </div> 
          <div class="col-md-12">
           <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
         </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_home_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_home_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Address model--------------------------- -->
<div class="modal fade" id="adrs_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Address</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="adrs_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_adrs_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="address_proc"  value="address_proc">
            <input type="hidden" name="add_no" id="add_no">
          </div>
          <div class="col-md-12">
            <label>District</label>
            <input type="text" name="dis_add" id="dis_add" class="form-control" placeholder="Enter district" required>
          </div>
          <div class="col-md-12">
            <label>Village</label>
            <input type="text" name="vill_add" id="vill_add" class="form-control" placeholder="Enter village" required>
          </div>
          <div class="col-md-12">
            <label>Zone</label>
            <input type="text" name="zone_add" id="zone_add" class="form-control" placeholder="Enter zone" required>
          </div> 
          <div class="col-md-12">
           <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
         </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_adrs_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_adrs_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Account model--------------------------- -->
<div class="modal fade" id="accss_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Accounts</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="accss_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_accss_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="account_proc"  value="account_proc">
            <input type="hidden" name="acc_no" id="acc_no">
          </div>
          <div class="col-md-12">
            <label>Account Name</label>
            <input type="text" name="acc_reg" id="acc_reg" class="form-control" placeholder="Enter account name" required>
          </div>
          <div class="col-md-12">
            <label>Account Number</label>
            <input type="text" name="acc_num" id="acc_num" class="form-control" placeholder="Enter account number" required>
          </div>
          <div class="col-md-12">
            <label>Institution</label>
            <input type="text" name="acc_inst" id="acc_inst" class="form-control" placeholder="Enter institution" required>
          </div> 
          <div class="col-md-12">
            <label>Balance</label>
            <input type="text" name="acc_blnc" id="acc_blnc" class="form-control" placeholder="Enter balance" required>
          </div> 
          <div class="col-md-12">
           <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
         </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_accss_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_accss_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Industry model--------------------------- -->
<div class="modal fade" id="indus_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Industries</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="indus_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_indus_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="industry_proc"  value="industry_proc">
            <input type="hidden" name="ind_id" id="ind_id">
          </div>
          <div class="col-md-12">
            <label>Industry Name</label>
            <input type="text" name="indu_name" id="indu_name" class="form-control" placeholder="Enter Industry name" required>
          </div>
          <div class="col-md-12">
            <label>Industry Tell</label>
            <input type="text" name="Indu_tell" id="Indu_tell" class="form-control" placeholder="Enter Industry tell" required>
          </div>
          <div class="col-md-12">
            <label>Address</label>
            <?php  
              $coder->fillCombo("select add_no,concat(address.district,', ',address.village,', ',address.zone) from address where deleted=0;","indus_addr","Select address");
            ?>
          </div> 
          <div class="col-md-12">
            <label>Account</label>
            <?php  
              $coder->fillCombo("select acc_no,acc_name from account where deleted=0","indus_accnss","Select account");
            ?>
          </div>
          <div class="col-md-12">
           <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
         </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_indus_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_indus_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Minstary model--------------------------- -->
<div class="modal fade" id="minst_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Minstaries</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="minst_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_minst_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="minstary_proc"  value="minstary_proc">
            <input type="hidden" name="mins_id" id="mins_id">
          </div>
          <div class="col-md-12">
            <label>Minstary Name</label>
            <input type="text" name="minst_name" id="minst_name" class="form-control" placeholder="Enter Minstary name" required>
          </div>
          <div class="col-md-12">
            <label>Minstary Email</label>
            <input type="text" name="minst_email" id="minst_email" class="form-control" placeholder="Enter Minstary Email" required>
          </div> 
          <div class="col-md-12">
           <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
         </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_minst_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_minst_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Recycle model--------------------------- -->
<div class="modal fade" id="recy_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle " role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Recycling</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="recy_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_recy_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="recycling_proc"  value="recycling_proc">
            <input type="hidden" name="recy_id" id="recy_id">
          </div>
          <!-- <div class="col-md-12">
            <label>Waste Type</label>
            <?php  
              $coder->fillCombo("select waste_id,waste_type from waste where waste_id > 1 and deleted=0","recy_waste","Select waste type");
            ?>
          </div> -->
         <!--  <div class="col-md-12">
            <label>Industry Name</label>
            <?php  
              $coder->fillCombo("select ind_id,ind_name from industry where deleted=0","recy_industry","Select industry");
            ?>
          </div> 
          <div class="col-md-12">
            <label>Citizen Name</label>
            <?php  
              $coder->fillCombo("select cit_id,name from citizen where deleted=0;","rcy_cit","Select citizen name");
            ?>
          </div> -->
          <!-- <div class="col-md-12">
            <label>Quantity</label>
            <input type="number" name="rcy_qty" id="rcy_qty" class="form-control" placeholder="Enter recycle quantity" required>
          </div>
          <div class="col-md-12">
            <label>Requested Date</label>
            <input type="date" name="rcy_date" id="rcy_date" class="form-control" required>
          </div> -->
          <div class="col-md-12">
            <label>Status</label>
            <select class="form-control" id="stts_recyclingss" name="stts_recyclingss">
              <option value="Pending">Pending</option>
              <option value="progress">In Progress</option>
              <option value="done">Done</option>
            </select>
          </div>
          <!-- <div class="col-md-12">
            <label>Wanted Date</label>
            <input type="date" name="rcy_date" id="rcy_date" class="form-control" required>
          </div> -->
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_recy_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_recy_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------waste model--------------------------- -->
<div class="modal fade" id="waste_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Waste</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="waste_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_waste_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="waste_proc"  value="waste_proc">
            <input type="hidden" name="waste_id" id="waste_id">
          </div>
          <div class="col-md-12">
            <label>Waste Type</label>
            <input type="text" name="waste_type" id="waste_type" class="form-control" placeholder="Enter waste type" required>
          </div>
          <div class="col-md-12">
           <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
         </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_waste_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_waste_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------Users model--------------------------- -->
<div class="modal fade" id="user_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle" role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Users</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="user_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_user_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="users_proc"  value="users_proc">
            <input type="hidden" name="user_id" id="user_id">
          </div>
          <div class="col-md-12">
            <label>Username</label>
            <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter username" required>
          </div>
          <div class="col-md-12">
            <label>Password</label>
            <input type="text" name="pass_word" id="pass_word" class="form-control" placeholder="Enter password" required>
          </div>
          <div class="col-md-12">
            <label>Usertype</label>
            <input type="text" name="user_type" id="user_type" class="form-control" placeholder="Enter usertype" required>
          </div>
          <div class="col-md-12">
            <label>Email</label>
            <input type="text" name="user_email" id="user_email" class="form-control" placeholder="Enter email" required>
          </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_user_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_user_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------reporting model--------------------------- -->
<div class="modal fade" id="w_report_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle " role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Reporting</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="w_report_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_w_report_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="reporting_proc"  value="reporting_proc">
            <input type="hidden" name="rep_id" id="rep_id">
          </div>
          <div class="col-md-12">
            <label>Status</label>
            <!-- <input type="text" name="stts_rep" id="stts_rep" class="form-control" placeholder="Enter status" required> -->
            <select class="form-control" id="stts_rep" name="stts_rep">
              <option value="Pending">Pending</option>
              <option value="progress">In Progress</option>
              <option value="done">Done</option>
            </select>
          </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_update_w_report_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- ---------------gov_recycle model--------------------------- -->
<div class="modal fade" id="go_recy_mdl" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog modal-dialog-rounded-circle " role="document">
  <div class="modal-content">
    <div class="modal-header bg-primary">
      <h3 class="modal-title" id="exampleModalLabel">Goverment Recycling</h3>
      <button type="button" class="close fs-5 text-white" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div id="go_recy_mdl_alert"></div>
    <div class="modal-body">
      <form id="frm_go_recy_mdl">
        <div class="row">
          <div class="col-md-12">
            <input type="hidden" name="goverment_recyle_proc"  value="goverment_recyle_proc">
            <input type="hidden" name="gov_id" id="gov_id">
          </div>
          <div class="col-md-12">
            <label>Industry Name</label>
            <?php  
              $coder->fillCombo("select ind_id,ind_name from industry where deleted=0;","gov_ind","Select industry name");
            ?>
          </div>
          <div class="col-md-12">
            <label>Waste Type</label>
            <?php 
              $coder->fillCombo("select waste_id,waste_type from waste where deleted=0 and waste_id !=1","gov_west","Select waste type");
            ?>
          </div> 
          <div class="col-md-12">
            <label>Quantity</label>
            <input type="number" name="quantt_gov" id="quantt_gov" class="form-control" placeholder="Enter quantity" required>
          </div>
          <div class="col-md-12">
            <input type="hidden" name="user_id"  value="<?php echo $_SESSION['user'];?>">
          </div>
       </div>
     </form>
   </div>
   <div class="modal-footer bg-whitesmoke br">
    <button type="button" class="btn btn-primary" id="btn_save_go_recy_mdl">Save</button>
    <button type="button" class="btn btn-primary" id="btn_update_go_recy_mdl">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>

<!-- Model of image display -->
<!-- Modal -->
<div class="modal fade" id="img_display" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Report Details</h5>
        <button type="button" class="close fs-5" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div id="img_display_alert"></div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12 text-center">
              <img src="assets/img/dp.jpg" class="img-fluid" alt="Report Image">
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-md-12">
              <h5>Report Description</h5>
              <!-- <p class="form-control" id="img_desc" name="img_desc"></p> -->
              <input type="text" class="form-control" name="img_desc" id="img_desc">
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>