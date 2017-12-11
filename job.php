<?php include "header.php"; 
include "manage/db.php";
$db = new Db();
$name=$_SESSION['Name'];
	
?>

<div id="blog" class="container">
	
<div class="center">
<h2>Job Information</h2>
<p class="lead">DMK Engineer's Wing -- Hi & Welcome's you <b><?php echo $name;?></b></p>
</div>

  <section>
         <div id="head">
            <div class="line">
               <h1>Job Opportunity</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                  <div class="row">
                 
                 <?php     $memberList = $db -> select("SELECT * FROM `tbl_job` WHERE `status`='active' "); 
				for($i=0;$i<count($memberList);$i++){ ?>
                   <div class="col-md-3">
                     <div class="content-block margin-bottom">
                        <i class="icon-mail icon2x"></i>
                        <h3><?php echo $memberList[$i]['companyName'];?></h3>
                        <p>Job Name : <?php echo $memberList[$i]['addJobName'];?></p>
                        <p>Experience : <?php echo $memberList[$i]['addJobExperience'];?></p>
                        <p>Qualify : <?php echo $memberList[$i]['addJobQualify'];?></p>
                        <p>Salary : <?php echo $memberList[$i]['addJobSalary'];?></p>
                        <p>Location : <?php echo $memberList[$i]['addJobLocation'];?></p>
                        <p>Reference : <?php echo $memberList[$i]['addJobReference'];?></p>
                        <a href="">Click To See Full details</a>
                     </div><br>
                  </div>
                  <?php } ?>
               </div><br>
               </div>
            </div>
         </div>
      
      </section>


</div>

