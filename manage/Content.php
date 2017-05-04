<?php include "header.php"; 
include "db.php";
 $db = new Db();
    $memberList = $db -> select("SELECT `userId`,`EmailId` FROM `tbl_User` WHERE `status`='active' and `usertypeId`='2'");


?>
      
      <div class="main-content">
              <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Send Content to Member's</h3>
                </div>
                <div class="panel-body" >
                  <form action="" style="border-radius: 0px;" id="contentForm" name="contentForm" action="" method="POST" class="form-horizontal group-border-dashed">
              <div class="form-group row">
                <label class="col-sm-2 control-label">Select Member's</label>
                <div class="col-sm-10">
                  <select multiple="" class="tags" name="memberId[]" class="form-control" id="memberId">
		<?php for($i=0;$i<count($memberList);$i++){ ?>
                    <option value="<?php echo $memberList[$i]['userId']?>" ><?php echo $memberList[$i]['EmailId']?></option>
                                       	<?php } ?>
                  </select>
                </div>
              </div>
           
		<div class="form-group row">
                <label class="col-sm-2 control-label">Message Subject</label>
                <div class="col-sm-10">
            <div class="email-subject">
            <input type="text" name="Subject" id="Subject" placeholder="Enter your subject here">
          </div>
	  </div>
            </div>
         
		<div class="form-group row">
                <label class="col-sm-2 control-label">Message Content</label>
                <div class="col-sm-10">
          		<textarea id="Content" name="Content" class="form-control" ></textarea>
          		</div>
  		</div>
            <div class="form-group row">
		<label class="col-sm-2 control-label"></label>
		<div class="col-sm-10">
              <button type="button" class="btn btn-primary btn-space" onclick="submitForm();"><i class="icon s7-mail"></i> Send</button>
              <button class="btn btn-default btn-space"><i class="icon s7-close"></i> Cancel</button>
            </div>
          </div>
                  </form>
        </div>
      </div>
     </div>
   
    <script src="../assets/lib/select2/js/select2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
function submitForm(){
  $.ajax({
        type:"GET",
        url:'action.php',
        data:$('#contentForm').serialize() + "&type=contentForm",
        success: function(response){
		$("#result").html("<div>"+response+"</div>");
            $('#contentForm')[0].reset();
        }
    });

}
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.emailCompose();
      });
     $(document).ready(function(){
      	App.livePreview();
      });
    </script>
 
