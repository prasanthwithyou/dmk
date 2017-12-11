<?php 
include "db.php";
	$db = new Db();
$type=$_REQUEST['type'];
//print_r($_REQUEST);
$date = $db -> quote(date('Y-m-d H:i:s'));
if($type=="addmember") {

	$name = $db -> quote($_REQUEST['Name']);
	$Email =$db -> quote($_REQUEST['Email']);
	$Password = $db -> quote($_REQUEST['Password']);
	$Mobile = $db -> quote($_REQUEST['Mobile']);
	$district = $db -> quote($_REQUEST['district']);
	$result =  $db -> query('INSERT INTO `tbl_User` (`userName`,`password`,`Name`,`mobileNo`,`EmailId`,`districtId`,`usertypeId`,`createdAt`) VALUES ('.$Email . ',' .$Password . ','. $name . ',' . $Mobile . ','. $Email . ','. $district . ',"2",'.$date.')');
	echo "Success";
}
if($type=="district") {

	$district = $db -> quote($_REQUEST['district']);
	$result =  $db -> query('INSERT INTO `tbl_district` (`district`,`createdAt`) VALUES ('.$district . ','.$date.')');
	echo "Success";
}
if($type=="Logout") {
// remove all session variables
session_start();
session_unset(); 
            session_destroy();
 echo '<script>window.location.href = "../index";</script>';
}
if($type=="LoginForm"){

	$Username = $db -> quote($_REQUEST['Username']);
	$Password = $db -> quote($_REQUEST['Password']);
	$loginCheck = $db -> select('SELECT * FROM `tbl_User` WHERE `userName`='.$Username.' and `password`='.$Password.'');
	$userType = $db -> select('SELECT * FROM `tbl_userType` WHERE `usertypeId`='.$loginCheck[0]['usertypeId'].'');
	if($userType[0]['userType']=="Admin"){
		echo "1";
	}
	else{
		echo "Invalid Login";
	}

}
if($type=="Content") {
	$Subject = $db -> quote($_REQUEST['Subject']);
	$Content =$db -> quote($_REQUEST['Content']);
	$memberIdArray =$_REQUEST['memberId'];
	$memberId =$db ->quote(implode(',',$_REQUEST['memberId']));
//print_r($memberId);
	$result = $db -> query('INSERT INTO `tbl_messageContent` (`messageSubject`,`messageContent`,`createdAt`) VALUES (' .$Subject . ','. $Content . ','.$date.')');

	$msg_id=$result;
	for($i=0;$i<count($memberIdArray);$i++){
	  $result = $db -> query('INSERT INTO `tbl_mapMsgcontent` (`memberId`,`msgId`,`createdAt`) VALUES (' .$memberIdArray[$i] . ','. $msg_id . ','.$date.')');	
	}
	

	$msgContentArray = $db -> select('SELECT * FROM `tbl_messageContent` ORDER BY `msgId` DESC LIMIT 1');

	$userList = $db -> select('SELECT `EmailId` FROM `tbl_User` WHERE `userId` in ('.$memberId.')');

	$userName="";
	for($i=0;$i<count($userList);$i++){
		$userName.=$userList[$i]['EmailId'].",";	
	}
	$userNamenew=rtrim($userName,',');	
	
	$to = $userName;
	$subject = $msgContentArray[0]['messageSubject'];
 	$message = $msgContentArray[0]['messageContent'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: <admin@dmkengwing.com>' . "\r\n";
	mail($to,$subject,$message,$headers);
	
echo "Success";


}
if($type=="LoginFormMember"){

	$Username = $db -> quote($_REQUEST['username']);
	$Password = $db -> quote($_REQUEST['Password']);
	$loginCheck = $db -> select('SELECT * FROM `tbl_User` WHERE `userName`='.$Username.' and `password`='.$Password.'');
//print_r($loginCheck);
	$userType = $db -> select('SELECT * FROM `tbl_userType` WHERE `usertypeId`='.$loginCheck[0]['usertypeId'].'');
	if($userType[0]['userType']=="Member"){

		session_start();
		$_SESSION['userId']=$loginCheck[0]['userId'];
		$_SESSION['Name']=$loginCheck[0]['Name'];
		echo "1";


	}
	else{
		echo "Invalid Login";
	}

}
if($type=="getMembers") { 
$districtId=$_REQUEST['districtId'];
?>
 <select multiple="" class="tags" name="memberId[]" class="form-control" id="memberId">
		<?php  $memberList = $db -> select("SELECT `userId`,`EmailId` FROM `tbl_User` WHERE `status`='active' and `usertypeId`='2' and `districtId`='".$districtId."' ");
			for($i=0;$i<count($memberList);$i++){ ?>
                    <option value="<?php echo $memberList[$i]['userId']?>" ><?php echo $memberList[$i]['EmailId']?></option>
                                       	<?php } ?>
                  </select>
	
<?php } ?>
