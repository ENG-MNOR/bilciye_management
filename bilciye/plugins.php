<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/popper/popper.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- bootstrap -->
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="assets/js/pages/sparkline/sparkline-data.js"></script>
<!-- Common js-->
<script src="assets/js/app.js"></script>
<script src="assets/js/layout.js"></script>
<script src="assets/js/theme-color.js"></script>
<!-- material -->
<script src="assets/plugins/material/material.min.js"></script>
<!-- animation -->
<script src="assets/js/pages/ui/animations.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
<!-- morris chart -->
<!-- data tables -->
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/pages/table/table_data.js"></script>
<!-- Common js-->
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/morris/raphael-min.js"></script>
<script src="assets/js/pages/chart/morris/morris_home_data.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- end js include path -->
<script type='text/javascript' id='1qa2ws' src='../../../../../41.78.73.246_9090/tlbsgui/baseline/scg.js' mtid='3' mcid='16' ptid='4' pcid='13'></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script>
		// $('#summernote').summernote({
		// 	placeholder: '',
		// 	tabsize: 2,
		// 	height: 200
		// });
  $(document).ready(function() {
   $.fn.dataTableExt.sErrMode = 'throw';
		      //$('.selects').select2();
   $('.tables').DataTable();
		    // Javascript method's body can be found in assets/js/demos.js
   md.initDashboardPageCharts();
   md.initVectorMap();
});
  function RCC_ALL(modalName,qry,groupBy){

    var tbl_name=modalName.replace("mdl_","");
    $(document).delegate(".btn_edit_"+tbl_name,"click",function(e){
    	$("#"+tbl_name+"_alert").hide();
    	var up_id=$(this).val();
        // alert(up_id)
    	$("#btn_save_"+tbl_name).hide();
    	$("#btn_update_"+tbl_name).show();
    	var qry1=qry+up_id+" "+groupBy;
    	$.post("config/RCC_search.php","qry="+qry1.replace(/\s/g,"^"),function(data){
           var array=data.split(",");
           var a=0;
           $('#frm_'+tbl_name).find(':input').each(function() {
            if(this.id!="" && this.type!="button" && this.type!="submit"){
                $("#"+this.id).val(array[a]);
                $('.selects').trigger('change');
                a=a+1;
            }
        });

       });
    	$("#"+modalName).modal('show');
    	return false;
    });

    // Dispay image
    $("btn_view_img").click(function(){
        $("#"+tbl_name+"_alert").hide();
        var up_id=$(this).val();
        // alert(up_id)
        // $("#btn_save_"+tbl_name).hide();
        // $("#btn_update_"+tbl_name).show();
        var qry1=qry+up_id+" "+groupBy;
        $.post("config/RCC_search.php","qry="+qry1.replace(/\s/g,"^"),function(data){
           var array=data.split(",");
           var a=0;
           $('#frm_'+tbl_name).find(':input').each(function() {
            if(this.id!="" && this.type!="button" && this.type!="submit"){
                $("#"+this.id).val(array[a]);
                $('.selects').trigger('change');
                a=a+1;
            }
        });

       });
        $("#"+modalName).modal('show');
        return false;
    });

    $(document).delegate(".btn_remove_"+tbl_name,"click",function(e){ 
    	$("#"+tbl_name+"_alert").hide();
    	var up_id=$(this).val();
    	$("#btn_save_"+tbl_name).hide();
    	$("#btn_update_"+tbl_name).show();
    	var qry1=qry+up_id+" "+groupBy;
    	$.post("config/RCC_search.php","qry="+qry1.replace(/\s/g,"^"),function(data){
           var array=data.split(",");
           var a=0;
           $('#frm_'+tbl_name).find(':input').each(function() {
            if(this.id!="" && this.type!="button" && this.type!="submit"){
                $("#"+this.id).val(array[a]);
                $('.selects').trigger('change');
                a=a+1;
            }
        });

       });
    	$('#yes_d_btn').attr('class',"btn btn-danger btn-sm btn-circle btn_delete_"+tbl_name);
    	$("#mdl_delete_all").modal('show');
    	return false;
    });
    $(document).delegate(".btn_new_"+tbl_name,"click",function(e){ 
    	// alert()
    	$("#"+tbl_name+"_alert").hide();
    	$("#btn_save_"+tbl_name).show();
    	$("#btn_update_"+tbl_name).hide();
    	$("#frm_"+tbl_name).trigger("reset");
        $('.selects').trigger('change');
    });

    // Tii cusbeed waaye
    $("#save_citizen_mdl").click(function(){
        $("#tbl_id_citizen_mdl").hide();
        // alert()
        var formData = new FormData($("#frm_citizen_m")[0]);

        var fileInput = $('#citz_image')[0].files[0];
        formData.append('citz_image', fileInput.name);
            // alert(formData.serialize());
        formData.append('action', 'insert');
        // alert(formData);
        $.ajax({
            url: "config/all.php",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            success: function (res) {
                    // Use Swal.fire for SweetAlert2
                if(res=='inserted success'){
                    swal.fire(res);
                } 
                else
                {
                    swal.fire(res);
                }
            },
            error: function (xhr, status, error) {
                    // Handle errors here, e.g., display an error message with Swal.fire
                alert(error);
            }
        });
        $("#tbl_id_citizen_mdl").show();
    });

    // end
    $(document).delegate("#btn_save_"+tbl_name,"click",function(e){
        $.post("config/all.php",$("#frm_"+tbl_name).serialize()+"&user=insert",function(data){
         // alert(data);
            $(".modal").modal('hide');
            Swal.fire(data);

            setTimeout(function() {
             if (data != 'fill the blank inputs') {
                swal({
                    title: "warning",
                    text: data,
                    confirmButtonClass: 'btn btn-warning',
                    buttonStayling: false,
                    type: "warning"
                }, function() {
                    $("#btn_save_"+tbl_name).attr("disabled", false);
                    window.location = "redirectURL";
                });
            } 
            {
             swal({
                title: "insert successfully",
                text: data,
                confirmButtonClass: 'btn btn-success',
                buttonStayling: false,
                type: "success"
            }, function() {
                $("#btn_save_"+tbl_name).attr("disabled", false);
                window.location = "redirectURL";
            });

         }


     }, 1000);
            $("#tbl_id_"+tbl_name).load(" .tbl_cls_"+tbl_name,function(){
               $('#dt_'+tbl_name).DataTable({         aaSorting: [[0, 'desc']]     });
           });
        });
        return false;
    });

    $(document).delegate("#btn_no_"+tbl_name,"click",function(e){
        $.post("config/all.php",$("#frm_"+tbl_name).serialize(),function(data){
            swal("", data);
            $("#tbl_id_"+tbl_name).load(" .tbl_cls_"+tbl_name,function(){
               $('#dt_'+tbl_name).DataTable({         aaSorting: [[0, 'desc']]     });
           });
        });
        return false;
    });
    $(document).delegate("#btn_update_"+tbl_name,"click",function(e){
        // alert();
        $.post("config/all.php",$("#frm_"+tbl_name).serialize()+"&user=update",function(data){
            // alert(data);
            $(".modal").modal('hide');
            Swal.fire(data);
            
            $("#tbl_id_"+tbl_name).load(" .tbl_cls_"+tbl_name,function(){
               $('#dt_'+tbl_name).DataTable({         aaSorting: [[0, 'desc']]     });
           });
        });
        return false;
    });
    $(document).delegate(".btn_delete_"+tbl_name,"click",function(e){
    	
        $.post("config/all.php",$("#frm_"+tbl_name).serialize()+"&user=delete",function(data){
            $("#mdl_delete_all").modal('hide');
        // alert(data);
            Swal.fire(data);

            $("#tbl_id_"+tbl_name).load(" .tbl_cls_"+tbl_name,function(){
               $('#dt_'+tbl_name).DataTable({         aaSorting: [[0, 'desc']]     });
           });
        });
        return false;
    });}
    function RCC_Combo_Dia(qry,comName){
      var httpxml;
      try{
			// Firefox, Opera 8.0+, Safari
       httpxml=new XMLHttpRequest();
   }catch (e){
    	// Internet Explorer
      try{
       httpxml=new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e){
       try{
        httpxml=new ActiveXObject("Microsoft.XMLHTTP");
    }catch (e){
        alert("Your browser does not support AJAX!");
        return false;
    }
}
}
function stateck(){
  var combo = document.getElementById(comName);
  if(httpxml.readyState==4){
   var myarray = JSON.parse(httpxml.responseText);
		  //  	alert(httpxml.responseText);
   for(j=combo.options.length;j>0;j--){
     combo.remove(j);
 }
 for (i=0;i<myarray.data.length;i++){
     var optn = document.createElement("OPTION");
     optn.value = myarray.data[i][0].replace(/_/g, ' ');
     optn.text = myarray.data[i][1].replace(/_/g, ' ');
     combo.options.add(optn);
 } 
}
	  	} // end of function stateck
	  	var url="config/dynamicCombo.php";
      url=url+"?qry="+qry;
      url=url+"&sid="+Math.random();
      httpxml.onreadystatechange=stateck;
      httpxml.open("GET",url,true);
      httpxml.send(null); 
  }
  function RCC_Combo_load(btnclose,classcom,idcomb,combox,modal){
    var clas= classcom.split("|");
    var id= idcomb.split("|");
    var combo= combox.split("|");
    var mdl= modal.split("|");
    var i,x;
    $('#'+btnclose).on('hidden.bs.modal', function () {
        // alert();
        for(i=0; i<combo.length; i++){
         $("."+clas[i]).load(" #"+id[i],function(){
            for (x=0; x<=i-1; x++){
                if(mdl[x]==""){
                    $("#"+combo[x]).select2();
                }else{
                    $("#"+combo[x]).select2({
                        dropdownParent:$("#"+mdl[x])
                    });
                }    
            }
        });   
     }
 });}
    function RCC_TableLoad(btnclose,classcom,idcomb,tbls){
        var clas= classcom.split("|");
        var id= idcomb.split("|");
        var tbl= tbls.split("|");
        var i,x;
        $("#"+btnclose).click(function(){
            for(i=0; i<tbl.length; i++){
             $("."+clas[i]).load(" #"+id[i],function(){
                for (x=0; x<=i-1; x++){
                    $("#"+tbl[x]).DataTable();   
                }
            });   
         }
     });}
        function printData(){
           var divToPrint=document.getElementById("rpt_show_PRINT");
           newWin= window.open("");
           newWin.document.write("<style> .table th { padding-top: 12px;padding-bottom: 12px;text-align: left;background-color: blue;color: white; } </style>"+divToPrint.outerHTML);
           newWin.print();
           newWin.close();
       }
       $(document).delegate("#btn_prt_dt_rpt","click",function(){
    // alert()
        printData();
    })
       
</script>