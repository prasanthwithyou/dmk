<?php include "header.php"; ?>



        <div class="main-content">

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
	
</div>

  <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.pie.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/jquery.flot.resize.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/jquery.flot.orderBars.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-flot/plugins/curvedLines.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-fr-merc-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-map.js" type="text/javascript"></script>
    <script src="assets/lib/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js" type="text/javascript"></script>
    <script src="assets/lib/countup/countUp.min.js" type="text/javascript"></script>
    <script src="assets/lib/chartjs/Chart.min.js" type="text/javascript"></script>
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

      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dashboard();
      
      });
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
      	App.livePreview();
      });
      
    </script>
    
  </body>

<!-- Mirrored from foxythemes.net/preview/products/amaretti-v1.1.7/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2016 21:13:14 GMT -->
</html>
