<?php include "header.php"; 
include "db.php";

    $db = new Db();
    $memberList = $db -> select("SELECT * FROM `tbl_User` WHERE `status`='active' and `usertypeId`='2'");

?>

 <div class="main-content">
              <!--Basic Elements-->
          <div class="row">
            <div class="col-md-12">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>Member's List</h3>
                </div>
              <div class="panel-body" >
               <table id="table1" class="table table-striped table-hover table-fw-widget">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile No</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

			<?php for($i=0;$i<count($memberList);$i++){ ?>
                    <tr class="odd gradeX">
                      <td><?php echo $memberList[$i]['Name']?></td>
                      <td><?php echo $memberList[$i]['userName']?></td>
                      <td><?php echo $memberList[$i]['mobileNo']?></td>
                      <td class="center"><b> Edit</b></td>
                      <td class="center"><b>Delete</b></td>
                    </tr>
                    	<?php } ?>
                   
                  </tbody>
                </table>    
                </div>
              </div>
            </div>
          </div>
         
        </div>
      </div>

<script>
$(document).ready(function(){
      	//initialize the javascript
      	App.init();
      	App.dataTables();
      		});
</script>
