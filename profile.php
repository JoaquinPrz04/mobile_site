<?php
session_start();
if(!isset($_SESSION['id']) or !isset($_SESSION['email']) or !isset($_SESSION['username'])) {
?>

<script>
window.location = "login.php";
</script>
<?php
} else

$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");
$user_query = "SELECT * FROM `user` WHERE id = ".$_SESSION['id']."";
$result = mysqli_query($conn, $user_query);
$user = mysqli_fetch_array($result);


$bDate = "".$user['bDay']."/".$user['bMonth']."/".$user['bYear']."";
$dob = strtotime(str_replace("/","-",$bDate));       
$tdate = time();
$age = 0;
while( $tdate > $dob = strtotime('+1 year', $dob))
{
    ++$age;

}
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Abel|Quicksand" rel="stylesheet">
<style type="text/css">
#my_postTable {		border: <?php echo $user['borders']; ?> thin solid;
		border-radius: 4px 4px 4px 4px;
		background-color: <?php echo $user['cards']; ?>;
		margin-bottom: 10px;
		color: <?php echo $user['text']; ?>;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.form {		color: #000000;
}
</style>
</head>

<body>

<!-- Floating Button -->
	
<a href="#" class="float">
<i class="fa fa-plus my-float"></i>
</a>

<div id="top">
  <table border="0" align="center" cellpadding="0" cellspacing="15" id="topMenu">
    <tr>
      <td align="center"><a href="index.php">HOME</a> | <a href="myProfile.php">PROFILE</a> | <a href="settings.php">MY ACCOUNT</a> | <a href="logout.php">LOGOUT</a></td>
    </tr>
  </table>
</div>
<div>
  <table border="0" align="center" cellpadding="0" cellspacing="15" id="userCard">
    <tr>
      <td align="center"><div id="userInfo"><img src="../<?php echo $user['gender']; ?>.png" alt="" width="200" height="200" id="profilePic" /></div></td>
    </tr>
    <tr>
      <td align="center"><strong style="font-size: 18px"><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></strong></td>
    </tr>
    <tr>
      <td align="center">@<?php echo $user['username']; ?> (Verified User)</td>
    </tr>
    <tr>
      <td align="center"><?php if($user['gender'] == "m") { echo "Male"; } if($user['gender'] == "f") { echo "Female"; } ?> | <?php echo $age; ?> years old | Married | <span style="font-size: 14px"><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `subscriptions` WHERE userid = ".$user['id']."")); ?></span> Subscribers</td>
    </tr>
    <tr>
      <td align="center"><form id="form2" method="post">
        <?php 
				  if($_SESSION['id']!=$user['id'] && $_SESSION['username']!=$user['username']) { 
				  if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `subscriptions` WHERE userid = ".$user['id']." && subscriberid = ".$_SESSION['id'].""))==0) { 
				 ?>
        <input type="submit" name="subscribe" id="subscribe" value="SUBSCRIBE" />
        <?php } else { ?>
        <input type="submit" name="unsubscribe" id="unsubscribe" value="UNSUBSCRIBE" />
        <?php } ?>
        <?php
				  
				  $userid = $user['id'];
				  $user_username = $user['username'];
				  $subscriberid = $_SESSION['id'];
				  $subscriber_username = $_SESSION['username'];
				  $date = date("m/d/Y");
				  
				  if(isset($_POST['subscribe'])){
					  if(mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `subscriptions` WHERE userid = ".$user['id']." && subscriberid = ".$_SESSION['id'].""))>0) {
						echo   "You are already subscribed.";
					  } else
					  $subscribe = "INSERT INTO `subscriptions` (userid, subscriberid, date, user_username, subscriber_username) VALUES ('$userid', '$subscriberid', '$date', '$user_username', '$subscriber_username')";
						
						if(mysqli_query($conn, $subscribe)) {
							$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");
							echo "Se registro";
							?>
        <script>
								window.location = "refresh.php";
				  			</script>
        <?php
						} else echo "No se registro" . mysqli_error(mysqli_query($conn, $subscribe));
					}
				  
				  if(isset($_POST['unsubscribe'])) {
				  $conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");
$delete_query = "DELETE FROM `subscriptions` WHERE userid=".$user['id']." && subscriberid=".$_SESSION['id']."";
if(mysqli_query($conn, $delete_query)) {
echo "Loading...";
	?>
        <script>
window.location = "refresh.php";
      </script>
        <?php
} } } else
				?>
      </form></td>
    </tr>
    <tr>
      <td align="center"><?php if($user['facebook']!="") { ?><a href="https://www.facebook.com/<?php echo $user['facebook']; ?>"><img src="imgs/if_Facebook_2745008.png" width="20" height="20" alt="" /></a><?php } if($user['instagram']!="") { ?><a href="https://www.instagram.com/<?php echo $user['instagram']; ?>"><img src="imgs/if_Instagram_2744976.png" width="20" height="20" alt=""/></a><?php } if($user['snapchat']!="") { ?><a href="https://www.snapchat.com/add/<?php echo $user['snapchat']; ?>"><img src="imgs/if_Snapchat_2744940 (1).png" width="20" height="20" alt=""/></a><?php } if($user['twitch']!="") { ?><a href="https://www.twitch.com/<?php echo $user['twitch']; ?>"><img src="imgs/if_Twitch_2744989.png" width="20" height="20" alt=""/></a><?php } if($user['twitter']!="") { ?><a href="https://www.twitter.com/<?php echo $user['twitter']; ?>"><img src="imgs/if_Twitter_2744988.png" width="20" height="20" alt=""/></a><?php } ?></td>
    </tr>
  </table>
</div>
<div>
  <?php
			$post_query = mysqli_query($conn, "SELECT * FROM `post` WHERE author_email='".$user['email']."' && author_id='".$user['id']."' && author_username='".$user['username']."' ORDER BY id DESC");
			if(mysqli_num_rows($post_query)==0) {
			?>
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="10" id="cards">
    <tbody>
      <tr>
        <td height="0"><div id="postBody2">This user has not posted anything yet.</div></td>
      </tr>
    </tbody>
  </table>
  <?php
			} else
			while($post=mysqli_fetch_assoc($post_query)) {
			?>
	
	
  <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
    <tr>
      <td align="left"><div style="font-size: 22px"><?php echo nl2br($post['post_text']); ?></div></td>
    </tr>
    <tr>
      <td align="left"><div style="font-size: 12px">POSTED ON <?php echo $post['date_day']; ?> at <?php echo $post['date_time']; ?> <strong>LIKE | DISLIKE | <a href="deletePost.php?id=<?php echo $post['id']; ?>">DELETE</a></strong><a href="deletePost.php?id=<?php echo $post['id']; ?>"></a></div></td>
    </tr>
  </table>
	<?php
			}
		  ?>
</div>
</body>
</html>