<?php include "header.php"; 
include "manage/db.php";
$db = new Db();

	$msgContentArray = $db -> select('SELECT k.messageSubject,k.messageContent,k.createdAt FROM tbl_mapMsgcontent j INNER JOIN tbl_messageContent k on k.msgId=j.msgId where j.memberId='.$_SESSION['userId'].' ORDER BY k.createdAt DESC');
	
?>
<div id="blog" class="container">
<div class="center">
<h2>Content</h2>
<p class="lead">DMK</p>
</div>

<div class="col-md-12">
<h1 id="comments_title"><?php echo count($msgContentArray); ?> Comments</h1>
<?php //print_r($_SESSION); 	
for($i=0;$i<count($msgContentArray);$i++){ ?>


<div class="media comment_section">
<div class="pull-left post_comments">
<a href="#"><img src="images/blog/girl.png" class="img-circle" alt=""/></a>
</div>
<div class="media-body post_reply_comments">
<h3><?php echo $msgContentArray[$i]['messageSubject']; ?> </h3>
<h4><?php echo $msgContentArray[$i]['createdAt']; ?></h4>
<p><?php echo $msgContentArray[$i]['messageContent']; ?></p>
<a href="#">Reply</a>
</div>
</div>
<?php } ?>

</div></div>

