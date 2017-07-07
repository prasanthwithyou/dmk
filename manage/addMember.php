<?php include "header.php"; 
include "db.php";
$type=$_REQUEST['type'];
    $db = new Db();
   
?>
 
     
        <div class="main-content">
              <!--Basic Elements-->
	<?php if($type=='addmember'){?>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Add Member's</h3>
                </div>
		<div id="result"></div>
                <div class="panel-body" >
                  <form action="#" style="border-radius: 0px;" id="userForm" name="userForm" action="" method="POST" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Name</label>
                      <div class="col-sm-6">
                        <input type="text" placeholder="Name" name="Name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-6">
                        <input type="text" name="Email" placeholder="Email Id (Login Username)" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-6">
                        <input type="password" name="Password" placeholder="Password" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-sm-3 control-label">Mobile No</label>
                      <div class="col-sm-6">
                        <input type="text" name="Mobile" placeholder="Mobile No" class="form-control">
                      </div>
                    </div>
		    <div class="form-group">
                      <label class="col-sm-3 control-label">District</label>
                      <div class="col-sm-6">
			<?php  $districtList = $db -> select("SELECT * FROM `tbl_district` WHERE 1"); ?>
			<select class="select2 col-sm-12" name="district" id="district">
                          <option>Select district</option>
			<?php for($i=0;$i<count($districtList);$i++){ ?>
 				<option value="<?php echo $districtList[$i]['districtId']; ?>"><?php echo $districtList[$i]['district']; ?></option>
			<?php } ?>
                        
                        </select>
                      </div>
                    </div>
                
			       <div class="form-group">
                      <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-6">
                        <button type="button" class="btn btn-space btn-primary" name="submit" value="user" id="submit" onclick="submitForm()">Submit</button>
                        <button class="btn btn-space btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <script>
  $(document).ready(function(){
      	     	$('#district').select2();
      		});
         </script>
        </div>

	<?php } elseif($type=='district'){?>
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Add District</h3>
                </div>
		<div id="result"></div>
                <div class="panel-body" >
                  <form action="#" style="border-radius: 0px;" id="userForm" name="userForm" action="" method="POST" class="form-horizontal group-border-dashed">
                    <div class="form-group">
                      <label class="col-sm-3 control-label">District</label>
                      <div class="col-sm-6">
                        <input type="text" placeholder="district" name="district" class="form-control">
                      </div>
                    </div>                 
                
			<div class="form-group">
                      <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-6">
                        <button type="button" class="btn btn-space btn-primary" name="submit" value="user" id="submit" onclick="submitForm()">Submit</button>
                        <button class="btn btn-space btn-default">Cancel</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
         
        </div>

<?php } elseif($type=='Content'){?>
           <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Send Content to Member's</h3>
                </div>
                <div class="panel-body" >
                  <form action="" style="border-radius: 0px;" id="userForm" name="userForm" action="" method="POST" class="form-horizontal group-border-dashed">
		<div class="form-group row">
                <label class="col-sm-2 control-label">Select District</label>
                <div class="col-sm-10">
                  <select class="tags" name="districtId" class="form-control" id="districtId" onchange="getMembers(this.value)">
		<?php  $districtList = $db -> select("SELECT `districtId`,`district` FROM `tbl_district` WHERE `status`='active'");
			for($i=0;$i<count($districtList);$i++){ ?>
                    <option value="<?php echo $districtList[$i]['districtId']?>" ><?php echo $districtList[$i]['district']?></option>
                                       	<?php } ?>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Select Member's</label>
                <div class="col-sm-10">
		<div id="memberdiv">
                  <select multiple="" class="tags" name="memberId[]" class="form-control" id="memberId">
		<?php  $memberList = $db -> select("SELECT `userId`,`EmailId` FROM `tbl_User` WHERE `status`='active' and `usertypeId`='2'");
			for($i=0;$i<count($memberList);$i++){ ?>
                    <option value="<?php echo $memberList[$i]['userId']?>" ><?php echo $memberList[$i]['EmailId']?></option>
                                       	<?php } ?>
                  </select>
		</div>
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
  <script>
$(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.emailCompose();
      });
         </script>
	<?php } ?>	
      </div>
   
    <script type="text/javascript">


function submitForm(){

  $.ajax({
        type:"GET",
        url:'action.php',
        data:$('#userForm').serialize() + "&type=<?php echo $type; ?>",
        success: function(response){
		$("#result").html("<div>"+response+"</div>");
            $('#userForm')[0].reset();
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
function getMembers(districtId){
	var type="getMembers";
	$.get('action.php',{type:type,districtId:districtId},function(data){
		$('#memberdiv').html(data);
      	App.emailCompose();
	});	
	
	}
              </script>
       
  </body>

</html>
