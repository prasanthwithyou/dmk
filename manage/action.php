<?php 
include "db.php";
	$db = new Db();
$type=$_REQUEST['type'];
if($type=="userForm") {
	$date = $db -> quote(date('Y-m-d H:i:s'));
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
?>
