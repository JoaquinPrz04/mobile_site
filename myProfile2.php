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

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo "".$user['first_name']." ".$user['last_name']."'s Profile"; ?></title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Abel|Quicksand" rel="stylesheet">
</head>

<body>

<div id="middle" align="center">
  <table width="850" border="0" align="center" cellpadding="0" cellspacing="10">
    <tbody>
      <tr>
        <td colspan="2" align="right" valign="middle"><span style="font-size: 12px">Logged in as <a href="myProfile.php"><?php echo $_SESSION['first_name']; ?> <?php echo $_SESSION['last_name']; ?></a> (<a href="settings.php"> MY ACCOUNT </a>| <a href="logout.php">LOGOUT</a> )</span></td>
      </tr>
      <tr>
        <td colspan="2" valign="middle" align="right"><div id="topbar" ><a href="search.php">SEARCH</a> | UPLOAD</div></td>
      </tr>
      <?php if($user['alertstatus']=='on') { ?>
       <tr>
        <td colspan="2" align="center" valign="top" >
         
         <table width="100%" border="0" cellpadding="0" cellspacing="10" id="useralert">
          <tbody>
            <tr>
              <td width="618" height="0"><div id="postBody3"><marquee>
                <?php echo $user['alertmessage']; ?>
</marquee></div></td>
            </tr>
          </tbody>
        </table></td>
      </tr>
      <?php } else ?>
      <tr>
        <td width="331" align="center" valign="top" ><table width="100%" border="0" cellpadding="0" cellspacing="10" id="postTable">
          <tbody>
            <tr>
              <td align="center"><img src="../<?php echo $user['gender']; ?>.png" alt="klk" name="profilePicture" width="499" height="auto" id="profilepic"/></td>
            </tr>
            <tr>
              <td align="center" style="font-size: 25px"><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
            </tr>
            <tr>
              <td align="center" style="font-size: 25px"><span style="font-size: 14px"><?php echo mysqli_num_rows(mysqli_query($conn, "SELECT * FROM `subscriptions` WHERE userid = ".$user['id']."")); ?>  Subscribers</span></td>
            </tr>
          </tbody>
        </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="10" id="postTable">
            <tbody>
              <tr>
                <td width="28%" height="0" style="font-size: 14px"><strong>Age:</strong></td>
                <td width="72%" style="font-size: 14px"><?php echo $age; ?> years old</td>
              </tr>
              <tr>
                <td height="0" style="font-size: 14px"><strong>Gender:</strong></td>
                <td style="font-size: 14px"><?php if($user['gender']=='f') { echo "Female"; } else if($user['gender']='m') { echo "Male"; } ?></td>
              </tr>
              <tr>
                <td height="0" style="font-size: 14px"><span style="text-align: left"><strong>Lives in:</strong></span></td>
                <td style="font-size: 14px"><span style="text-align: left"><?php echo $user['city']; ?>, <?php echo $user['state'] ?></span></td>
              </tr>
              <tr>
                <td height="0" style="font-size: 14px"><span style="text-align: left"><strong>My Social:</strong></span></td>
                <td style="font-size: 14px"><?php if($user['snapchat']!='') { ?><a href="https://www.snapchat.com/add/<?php echo $user['snapchat']; ?>" target="_blank"><img src="if_Snapchat_2744940 (1).png" width="20" height="20" alt=""/></a><?php } ?><?php if($user['twitch']!='') { ?><a href="https://www.twitch.tv/<?php echo $user['twitch']; ?>" target="_blank"><img src="if_Twitch_2744989.png" width="20" height="20" alt=""/></a><?php } ?><?php if($user['twitter']!='') { ?><a href="https://www.twitter.com/<?php echo $user['twitter']; ?>" target="_blank"><img src="if_Twitter_2744988.png" width="20" height="20" alt=""/></a><?php } ?><?php if($user['instagram']!='') { ?><a href="https://www.instagram.com/<?php echo $user['instagram']; ?>" target="_blank"><img src="if_Instagram_2744976.png" width="20" height="20" alt=""/></a><?php } ?><?php if($user['facebook']!='') { ?><a href="https://www.facebook.com/<?php echo $user['facebook']; ?>" target="_blank"><img src="if_Facebook_2745008.png" width="20" height="20" alt=""/></a><?php } ?></td>
              </tr>
            </tbody>
        </table></td>
        <td width="648" align="center" valign="top" ><form method="post" enctype="multipart/form-data" name="form1" id="form1">

           <table width="100%" border="0" cellpadding="0" cellspacing="10" id="postTable">
            <tbody>
              <tr>
                <td height="0"><strong style="font-size: 16px">WHAT IS IN YOUR MIND?
               
                </strong></td>
              </tr>
              <tr>
                <td width="100%" height="0">
                  <textarea name="post_text" id="post_text"></textarea>
                </td>
              </tr>
              <tr>
                <td height="0"><input name="submitPost" type="submit" class="form" id="submitPost" value="Post!">
                  <?php
				if(isset($_POST["submitPost"])) {						   
				// Create connection										   
				$date_day =  date("F jS, Y");
				$date_time = date("g:1 a");						   
				$post_text = mysqli_real_escape_string($conn, $_POST['post_text']);
				$author_id = $_SESSION['id'];
				$author_name = "".$_SESSION['first_name']." ".$_SESSION['last_name']."";
				$author_email = $_SESSION['email'];
				$author_username = $_SESSION['username'];
				$submitButton = $_POST['submitPost'];
				
				$sql2 = "INSERT INTO `post` (author_id, author_name, author_email, author_username, date_day, date_time, post_text) VALUES ('$author_id', '$author_name', '$author_email', '$author_username', '$date_day', '$date_time', '$post_text')";
						
						if(mysqli_query($conn, $sql2)) {
							$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");
							echo "Se registro";
						} else echo "No se registro" . mysqli_error(mysqli_query($conn, $sql2));
					}
				?></td>
              </tr>
            </tbody>
          </table>
           <?php
			$post_query = mysqli_query($conn, "SELECT * FROM `post` WHERE author_email='".$user['email']."' && author_id='".$user['id']."' && author_username='".$user['username']."' ORDER BY id DESC");
			if(mysqli_num_rows($post_query)==0) {
			?>
			<table width="100%" border="0" cellpadding="0" cellspacing="10" id="postTable">
			  <tbody>
			    <tr>
			      <td width="618" height="0"><div id="postBody2">This user has not posted anything yet.</div></td>
		        </tr>
		      </tbody>
		    </table>
			<?php
			} else
			while($post=mysqli_fetch_assoc($post_query)) {
			?>
          </form>
          <table width="100%" border="0" cellpadding="0" cellspacing="10" id="postTable">
            <tbody>
              <tr>
                <td width="35"><img src="../<?php echo $user['gender']; ?>.png" alt="" id="postpic"/></td>
                <td width="583"><span style="font-size: 14px; font-weight: bold"><?php echo $post['author_name']; ?></span><br>
                <span style="font-size: 10px; font-weight: bold;"><?php echo $post['date_day']; ?> at <?php echo $post['date_time']; ?> [LIKE] [DISLIKE] [<a href="delete_post.php?id=<?php echo $post['id']; ?>">DELETE</a>]</span></td>
              </tr>
              <tr>
                <td height="0" colspan="2"><div id="postBody"><?php echo nl2br($post['post_text']); ?></div></td>
              </tr>
            </tbody>
          </table>
          
            
              <?php
			}
		  ?>
        </td>
      </tr>
      <tr>
        <td colspan="2" align="center" valign="top" ><div id="bottombar">CREDTED BY JUAN ANALISTA (2017)</div></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>