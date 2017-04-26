<?php include "header.php"; 
include "/../db.php"; 

?>
 
      <div class="am-content">
        <div class="page-head">
          <h2>Add Member's</h2>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">manage</a></li>
            <li class="active">Member's</li>
          </ol>
        </div>
        <div class="main-content">
              <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Add Member's</h3>
                </div>
                <div class="panel-body">
                  <form action="#" style="border-radius: 0px;" class="form-horizontal group-border-dashed">
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
                      <label class="col-sm-3 control-label"></label>
                      <div class="col-sm-6">
                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
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
    <script src="../assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="../assets/lib/jquery.nanoscroller/javascripts/jquery.nanoscroller.min.js" type="text/javascript"></script>
    <script src="../assets/js/main.js" type="text/javascript"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/lib/theme-switcher/theme-switcher.min.js" type="text/javascript"></script>
    <script src="../assets/lib/prettify/prettify.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
      	//initialize the javascript
      	App.init();
      		});
         </script>
       
  </body>

<!-- Mirrored from foxythemes.net/preview/products/amaretti-v1.1.7/layouts-nosidebar-left.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Jul 2016 21:13:19 GMT -->
</html>
