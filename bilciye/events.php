<script type="text/javascript">
	RCC_ALL("w_request_mdl","select request_id,status from waste_request where deleted=0 and request_id=","");
	RCC_ALL("citizen_mdl","select * from citizen where cit_id=","");
	RCC_ALL("home_mdl","select * from homes where home_id=","");
	RCC_ALL("adrs_mdl","select * from address where add_no=","");
	RCC_ALL("indus_mdl","select * from industry where ind_id=","");
	RCC_ALL("minst_mdl","select * from minstary where mins_id=","");
	// RCC_ALL("recy_mdl","select * from recycling where recy_id=","");
	RCC_ALL("waste_mdl","select * from waste where waste_id=","");
	RCC_ALL("user_mdl","select * from users where user_id=","");
	RCC_ALL("w_report_mdl","select rep_id,Status from reporting where rep_id=","");
	RCC_ALL("go_recy_mdl","select * from goverment_recyle where gov_id=","");
	RCC_ALL("accss_mdl","select * from account where acc_no=","");
	RCC_ALL("img_display","select rep_id,description from reporting where deleted=0 and rep_id=","");
	RCC_ALL("recy_mdl","select recy_id,status from recycling where deleted=0 and recy_id=","");

	
	// ----------------------------------------------------------------

	// Address report
	$(".btn_address_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_address()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// // desc_desplay
	// $("#btn_view_img").click(function(){
	// 	$("#img_display").modal("show");
	// 	var qry="call getDesc('"+$("#desc_dis").val()+"')";
	// 	$.post("config/RCC_Table.php","qry="+qry,function(data){
	// 		$("#rpt_show").html(data);
	// 	});
	// })

	// Account report
	$(".btn_accontss_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_account()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// citizen report all
	$(".btn_citizen_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_citizen()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// citizen report single
	$(".btn_citizen_re_single").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_single_citizen('"+$("#cbm_cit_rpts_print").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// view citizen points report single
	$(".btn_view_every_cit_points").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call View_Citizen_Points('"+$("#cbm_cit_ponts_rpts_print").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// illegal dump citizen report all
	$(".btn_illegal_citizen_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_reporting()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// illegal dump citizen report single
	$(".btn_illegal_citizen_re_single").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_single_reporting('"+$("#cbm_illegl_dump_cit_rpts_print").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	//  recycle citizen report all
	$(".btn_recyc_citizen_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_recycling()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// recycle citizen report single
	$(".btn_recyc_citizen_re_single").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_single_recycling('"+$("#cbm_recyc_cit_rpts_print").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	//  waste request citizen report all
	$(".btn_was_req_rep_citizen_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_waste_request()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// waste request citizen report single
	$(".btn_was_req_rep_citizen_re_single").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_single_waste_request('"+$("#cbm_wa_requ_rpts_print").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// industry report single
	$(".btn_indus_vie_re_single").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_single_recycle_gov('"+$("#cbm_industry_select_print").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	//  industry report all
	$(".btn_indus_vie_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_goverment_recyle()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})


	// Industry report
	$(".btn_indus_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_industry()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Minstary report
	$(".btn_minst_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_minstary()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Recycling report
	$(".btn_recycle_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_recycling()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})
	
	// Reporting report
	$(".btn_reporting_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_reporting()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Waste type report
	$(".btn_waste_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_waste()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Waste Request report
	$(".btn_was_req_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_waste_request()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Users report
	$(".btn_users_rep").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_users()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// View Points Report
	$(".btn_point_view").dblclick(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call View_Citizen_Points('"+$("#citz_point_view").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// View Points industry Report
	$(".btn_point_indtry_view").dblclick(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_industry_point('"+$("#indtry_point_view").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Last Action
	$("#eventdh").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call last_action()";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})


	// Status
	$(".btn_was_req_rep_sttts_re").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call view_waste_request_status	('"+$("#wst_stts_reprt").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	// Betwen Dates
	$(".btn_date_btwn").click(function(){
		$("#mdl_All_reports").modal("show");
		var qry="call waste_between_2_dates	('"+$("#betwn_date1").val()+"','"+$("#betwn_date2").val()+"')";
		$.post("config/RCC_Table.php","qry="+qry,function(data){
			$("#rpt_show").html(data);
		});
	})

	
</script>