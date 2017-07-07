<?php include "header.php"; ?>
<div class="container">
<div class="row">     
	      <div class="col-md-2"></div>
            <div class="col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Member Login</h3>
                </div>
		<div id="result"></div>
                <div class="panel-body" >
                  <form action="#" style="border-radius: 0px;" id="userForm" name="userForm" action="" method="POST" class="form-horizontal group-border-dashed">
		            <div class="form-group">
		              <label class="col-sm-3 control-label">User Name</label>
		              <div class="col-sm-6">
		                <input type="text" placeholder="Email" name="username" class="form-control">
		              </div>
		            </div>                 
				<div class="form-group">
				<label class="col-sm-3 control-label">Password</label>
				<div class="col-sm-6">
				<input type="password" placeholder="Password" name="Password" class="form-control">
				</div>
				</div>    
			<div class="form-group">
                      <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-6">
                        <button type="button" class="btn btn-space btn-primary" name="submit" value="user" id="submit" onclick="submitForm()">Login</button>

                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>         
        </div>
	
</div> 
    <script type="text/javascript">


function submitForm(){
	  $.ajax({
		type:"GET",
		url:'manage/action.php',
		data:$('#userForm').serialize() + "&type=LoginFormMember",
		success: function(response){
			if(response!=1){
				$("#result").html("<div>"+response+"</div>");

			}else{
				window.location.href = "content";
			}
			 $('#userForm')[0].reset();
		}
	    });

	}
     
    </script>
    
  </body>

