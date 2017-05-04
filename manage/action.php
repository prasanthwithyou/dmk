<?php 
include "db.php";
	$db = new Db();
$type=$_REQUEST['type'];
//print_r($_REQUEST);
$date = $db -> quote(date('Y-m-d H:i:s'));
if($type=="userForm") {

	$name = $db -> quote($_REQUEST['Name']);
	$Email =$db -> quote($_REQUEST['Email']);
	$Password = $db -> quote($_REQUEST['Password']);
	$Mobile = $db -> quote($_REQUEST['Mobile']);
	$result =  $db -> query('INSERT INTO `tbl_User` (`userName`,`password`,`Name`,`mobileNo`,`EmailId`,`usertypeId`,`createdAt`) VALUES ('.$Email . ',' .$Password . ','. $name . ',' . $Mobile . ','. $Email . ',"2",'.$date.')');
	echo "Success";
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
if($type=="contentForm") {
	$Subject = $db -> quote($_REQUEST['Subject']);
	$Content =$db -> quote($_REQUEST['Content']);
	$memberId =$db ->quote(implode(',',$_REQUEST['memberId']));
	$result = $db -> query('INSERT INTO `tbl_messageContent` (`memberId`,`messageSubject`,`messageContent`,`createdAt`) VALUES ('.$memberId . ',' .$Subject . ','. $Content . ','.$date.')');
	$msgContentArray = $db -> select('SELECT * FROM `tbl_messageContent` ORDER BY `msgId` DESC LIMIT 1');
	//print_r($msgContentArray);
	$userList = $db -> select('SELECT `EmailId` FROM `tbl_User` WHERE `userId` in ('.$msgContentArray[0]['memberId'].')');
	$userName="";
	for($i=0;$i<count($userList);$i++){
		$userName.=$userList[$i]['EmailId'].",";	
	}
	$userName=rtrim($userName,',');	
	
	$to = $userName;
	$subject = $msgContentArray[0]['messageSubject'];
 	$message = $msgContentArray[0]['messageContent'];
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <lakmitech@gmail.com>' . "\r\n";
	mail($to,$subject,$message,$headers);
echo "Success";


}
?>
