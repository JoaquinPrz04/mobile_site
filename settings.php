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
<title>My Account</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<!-- Floating Button -->
	
<a href="#" class="float">
<i class="fa fa-plus my-float"></i>
</a>

<div id="top">
  <table border="0" cellpadding="0" cellspacing="15" id="topMenu">
    <tr>
      <td align="center"><a href="index.php">HOME</a> |  <a href="myProfile.php">PROFILE</a> | <a href="logout.php">LOGOUT</a></td>
    </tr>
  </table>
</div>
<div>
  <form id="form1" method="post" action="">
    <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
      <tr>
        <td align="center"><img src="../<?php echo $user['gender']; ?>.png" alt="" width="200" height="200" id="profilePic" /></td>
      </tr>
      <tr>
        <td align="center">FIRST NAME</td>
      </tr>
      <tr>
        <td align="center"><label for="first_name"></label>
          <input name="first_name" type="text" id="first_name" value="<?php echo $user['first_name']; ?>" /></td>
      </tr>
      <tr>
        <td align="center">LAST NAME</td>
      </tr>
      <tr>
        <td align="center"><input name="last_name" type="text" id="last_name" value="<?php echo $user['last_name']; ?>" /></td>
      </tr>
      <tr>
        <td align="center">BIRTHDATE</td>
      </tr>
      <tr>
        <td align="center"><span style="font-size: 14px">
          <select name="bDay" id="bDay">
            <option value="0" <?php if($user['bDay']=='0') { ?>selected="selected"<?php } ?>>Day</option>
            <option value="1" <?php if($user['bDay']=='') { ?>selected="selected"<?php } ?>>1</option>
            <option value="2" <?php if($user['bDay']=='2') { ?>selected="selected"<?php } ?>>2</option>
            <option value="3" <?php if($user['bDay']=='3') { ?>selected="selected"<?php } ?>>3</option>
            <option value="4" <?php if($user['bDay']=='4') { ?>selected="selected"<?php } ?>>4</option>
            <option value="5" <?php if($user['bDay']=='5') { ?>selected="selected"<?php } ?>>5</option>
            <option value="6" <?php if($user['bDay']=='6') { ?>selected="selected"<?php } ?>>6</option>
            <option value="7" <?php if($user['bDay']=='7') { ?>selected="selected"<?php } ?>>7</option>
            <option value="8" <?php if($user['bDay']=='8') { ?>selected="selected"<?php } ?>>8</option>
            <option value="9" <?php if($user['bDay']=='9') { ?>selected="selected"<?php } ?>>9</option>
            <option value="10" <?php if($user['bDay']=='10') { ?>selected="selected"<?php } ?>>10</option>
            <option value="11" <?php if($user['bDay']=='11') { ?>selected="selected"<?php } ?>>11</option>
            <option value="12" <?php if($user['bDay']=='12') { ?>selected="selected"<?php } ?>>12</option>
            <option value="13" <?php if($user['bDay']=='13') { ?>selected="selected"<?php } ?>>13</option>
            <option value="14" <?php if($user['bDay']=='14') { ?>selected="selected"<?php } ?>>14</option>
            <option value="15" <?php if($user['bDay']=='15') { ?>selected="selected"<?php } ?>>15</option>
            <option value="16" <?php if($user['bDay']=='16') { ?>selected="selected"<?php } ?>>16</option>
            <option value="17" <?php if($user['bDay']=='17') { ?>selected="selected"<?php } ?>>17</option>
            <option value="18" <?php if($user['bDay']=='18') { ?>selected="selected"<?php } ?>>18</option>
            <option value="19" <?php if($user['bDay']=='19') { ?>selected="selected"<?php } ?>>19</option>
            <option value="20" <?php if($user['bDay']=='20') { ?>selected="selected"<?php } ?>>20</option>
            <option value="21" <?php if($user['bDay']=='21') { ?>selected="selected"<?php } ?>>21</option>
            <option value="22" <?php if($user['bDay']=='22') { ?>selected="selected"<?php } ?>>22</option>
            <option value="23" <?php if($user['bDay']=='23') { ?>selected="selected"<?php } ?>>23</option>
            <option value="24" <?php if($user['bDay']=='24') { ?>selected="selected"<?php } ?>>24</option>
            <option value="25" <?php if($user['bDay']=='25') { ?>selected="selected"<?php } ?>>25</option>
            <option value="26" <?php if($user['bDay']=='26') { ?>selected="selected"<?php } ?>>26</option>
            <option value="27" <?php if($user['bDay']=='27') { ?>selected="selected"<?php } ?>>27</option>
            <option value="28" <?php if($user['bDay']=='28') { ?>selected="selected"<?php } ?>>28</option>
            <option value="29" <?php if($user['bDay']=='29') { ?>selected="selected"<?php } ?>>29</option>
            <option value="30" <?php if($user['bDay']=='30') { ?>selected="selected"<?php } ?>>30</option>
            <option value="31" <?php if($user['bDay']=='31') { ?>selected="selected"<?php } ?>>31</option>
          </select>
          <select name="bMonth" id="bMonth">
            <option value="0" selected="selected" <?php if($user['bMonth']=='0') { ?>selected="selected"<?php } ?>>Month</option>
            <option value="jan" <?php if($user['bMonth']=='jan') { ?>selected="selected"<?php } ?>>January</option>
            <option value="feb" <?php if($user['bMonth']=='feb') { ?>selected="selected"<?php } ?>>February</option>
            <option value="mar" <?php if($user['bMonth']=='mar') { ?>selected="selected"<?php } ?>>March</option>
            <option value="apr" <?php if($user['bMonth']=='apr') { ?>selected="selected"<?php } ?>>April</option>
            <option value="may" <?php if($user['bMonth']=='may') { ?>selected="selected"<?php } ?>>May</option>
            <option value="jun" <?php if($user['bMonth']=='jun') { ?>selected="selected"<?php } ?>>June</option>
            <option value="jul" <?php if($user['bMonth']=='jul') { ?>selected="selected"<?php } ?>>July</option>
            <option value="aug" <?php if($user['bMonth']=='aug') { ?>selected="selected"<?php } ?>>August</option>
            <option value="sep" <?php if($user['bMonth']=='sep') { ?>selected="selected"<?php } ?>>September</option>
            <option value="oct" <?php if($user['bMonth']=='oct') { ?>selected="selected"<?php } ?>>October</option>
            <option value="nov" <?php if($user['bMonth']=='nov') { ?>selected="selected"<?php } ?>>November</option>
            <option value="dec" <?php if($user['bMonth']=='dec') { ?>selected="selected"<?php } ?>>December</option>
          </select>
          <input name="bYear" type="text" id="bYear" placeholder="Year" value="<?php echo $user['bYear']; ?>" size="10" />
        </span></td>
      </tr>
      <tr>
        <td align="center" >GENDER</td>
      </tr>
      <tr>
        <td align="center"><select name="gender" id="gender">
          <option value="0" <?php if($user['gender']=='0') { ?>selected="selected"<?php } ?>>Select One</option>
          <option <?php if($user['gender']=='m') { ?>selected="selected"<?php } ?>>Male</option>
          <option <?php if($user['gender']=='f') { ?>selected="selected"<?php } ?>>Female</option>
        </select></td>
      </tr>
      <tr>
        <td align="center">CITY</td>
      </tr>
      <tr>
        <td align="center"><input name="city" type="text" id="city" value="<?php echo $user['city']; ?>" /></td>
      </tr>
      <tr>
        <td align="center">STATE</td>
      </tr>
      <tr>
        <td align="center"><span style="font-size: 14px">
          <select name="state" id="state">
            <option value="0" <?php if($user['state']=='0') { ?>selected="selected"<?php } ?>>Select a State</option>
            <option value="AL" <?php if($user['state']=='AL') { ?>selected="selected"<?php } ?>>Alabama</option>
            <option value="AK" <?php if($user['state']=='AK') { ?>selected="selected"<?php } ?>>Alaska</option>
            <option value="AZ" <?php if($user['state']=='AZ') { ?>selected="selected"<?php } ?>>Arizona</option>
            <option value="AR" <?php if($user['state']=='AR') { ?>selected="selected"<?php } ?>>Arkansas</option>
            <option value="CA" <?php if($user['state']=='CA') { ?>selected="selected"<?php } ?>>California</option>
            <option value="CO" <?php if($user['state']=='CO') { ?>selected="selected"<?php } ?>>Colorado</option>
            <option value="CT" <?php if($user['state']=='CT') { ?>selected="selected"<?php } ?>>Connecticut</option>
            <option value="DE" <?php if($user['state']=='DE') { ?>selected="selected"<?php } ?>>Delaware</option>
            <option value="FL" <?php if($user['state']=='FL') { ?>selected="selected"<?php } ?>>Florida</option>
            <option value="GA" <?php if($user['state']=='GA') { ?>selected="selected"<?php } ?>>Georgia</option>
            <option value="HI" <?php if($user['state']=='HI') { ?>selected="selected"<?php } ?>>Hawaii</option>
            <option value="ID" <?php if($user['state']=='ID') { ?>selected="selected"<?php } ?>>Idaho</option>
            <option value="IL" <?php if($user['state']=='IL') { ?>selected="selected"<?php } ?>>Illinois</option>
            <option value="IN" <?php if($user['state']=='IN') { ?>selected="selected"<?php } ?>>Indiana</option>
            <option value="IA" <?php if($user['state']=='IA') { ?>selected="selected"<?php } ?>>Iowa</option>
            <option value="KS" <?php if($user['state']=='KS') { ?>selected="selected"<?php } ?>>Kansas</option>
            <option value="KY" <?php if($user['state']=='KY') { ?>selected="selected"<?php } ?>>Kentucky</option>
            <option value="LA" <?php if($user['state']=='LA') { ?>selected="selected"<?php } ?>>Louisiana</option>
            <option value="ME" <?php if($user['state']=='ME') { ?>selected="selected"<?php } ?>>Maine</option>
            <option value="MD" <?php if($user['state']=='MD') { ?>selected="selected"<?php } ?>>Maryland</option>
            <option value="MA" <?php if($user['state']=='MA') { ?>selected="selected"<?php } ?>>Massachisetts</option>
            <option value="MI" <?php if($user['state']=='MI') { ?>selected="selected"<?php } ?>>Michigan</option>
            <option value="MN" <?php if($user['state']=='MN') { ?>selected="selected"<?php } ?>>Minnesota</option>
            <option value="MS" <?php if($user['state']=='MS') { ?>selected="selected"<?php } ?>>Mississippi</option>
            <option value="MO" <?php if($user['state']=='MO') { ?>selected="selected"<?php } ?>>Missouri</option>
            <option value="MT" <?php if($user['state']=='MT') { ?>selected="selected"<?php } ?>>Montana</option>
            <option value="NE" <?php if($user['state']=='NE') { ?>selected="selected"<?php } ?>>Nebraska</option>
            <option value="NV" <?php if($user['state']=='NV') { ?>selected="selected"<?php } ?>>Nevada</option>
            <option value="NH" <?php if($user['state']=='NH') { ?>selected="selected"<?php } ?>>New Hampshire</option>
            <option value="NJ" <?php if($user['state']=='NJ') { ?>selected="selected"<?php } ?>>New Jersey</option>
            <option value="NM" <?php if($user['state']=='NM') { ?>selected="selected"<?php } ?>>New Mexico</option>
            <option value="NY" <?php if($user['state']=='NY') { ?>selected="selected"<?php } ?>>New York</option>
            <option value="NC" <?php if($user['state']=='NC') { ?>selected="selected"<?php } ?>>North Carolina</option>
            <option value="ND" <?php if($user['state']=='ND') { ?>selected="selected"<?php } ?>>North Dakota</option>
            <option value="OH" <?php if($user['state']=='OH') { ?>selected="selected"<?php } ?>>Ohio</option>
            <option value="OK" <?php if($user['state']=='OK') { ?>selected="selected"<?php } ?>>Oklahoma</option>
            <option value="OR" <?php if($user['state']=='OR') { ?>selected="selected"<?php } ?>>Oregon</option>
            <option value="PA" <?php if($user['state']=='PA') { ?>selected="selected"<?php } ?>>Pennsylvania</option>
            <option value="RI" <?php if($user['state']=='RI') { ?>selected="selected"<?php } ?>>Rhode Island</option>
            <option value="SC" <?php if($user['state']=='SC') { ?>selected="selected"<?php } ?>>South Carolina</option>
            <option value="SD" <?php if($user['state']=='SD') { ?>selected="selected"<?php } ?>>South Dakota</option>
            <option value="TN" <?php if($user['state']=='TN') { ?>selected="selected"<?php } ?>>Tennessee</option>
            <option value="TX" <?php if($user['state']=='TX') { ?>selected="selected"<?php } ?>>Texas</option>
            <option value="UT" <?php if($user['state']=='UT') { ?>selected="selected"<?php } ?>>Utah</option>
            <option value="VT" <?php if($user['state']=='VT') { ?>selected="selected"<?php } ?>>Vermont</option>
            <option value="VA" <?php if($user['state']=='VA') { ?>selected="selected"<?php } ?>>Virginia</option>
            <option value="WA" <?php if($user['state']=='WA') { ?>selected="selected"<?php } ?>>Washington</option>
            <option value="WV" <?php if($user['state']=='WV') { ?>selected="selected"<?php } ?>>West Virginia</option>
            <option value="WI" <?php if($user['state']=='WI') { ?>selected="selected"<?php } ?>>Wisconsin</option>
            <option value="WY" <?php if($user['state']=='WY') { ?>selected="selected"<?php } ?>>Wyoming</option>
          </select>
        </span></td>
      </tr>
    </table>
    <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
      <tr>
        <td align="center"><input type="submit" name="save" id="save" value="Save Changes" /></td>
      </tr>
    </table>
    <?php

					if(isset($_POST["register"])) {
					// Create connection
					?>
    <table width="100%" border="0" cellpadding="0" cellspacing="10" id="alert" class="card">
      <tbody>
        <tr>
          <td align="center" style="font-size: 16px; font-weight: bold; color: #ffffff;">ALERTS</td>
        </tr>
        <tr>
          <td><?php
					$username = $_POST['username'];
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$password = $_POST['password'];
					$password2 = $_POST['password2'];
					$passwordHashed = password_hash($password, PASSWORD_DEFAULT);
					$passwordHashed2 = password_hash($password2, PASSWORD_DEFAULT);
					$bDay = $_POST['bDay'];
					$bMonth = $_POST['bMonth'];
					$bYear = $_POST['bYear'];
					$gender = $_POST['gender'];
					$email = $_POST['email'];
					$city = $_POST['city'];
					$state = $_POST['state'];
					$register = $_POST["register"];	
					$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");					
					$sql = "INSERT INTO `user` (first_name, last_name, bDay, bMonth, bYear, gender, username, email, password, password2, city, state) VALUES ('$first_name', '$last_name', '$bDay', '$bMonth', '$bYear', '$gender', '$username', '$email', '$passwordHashed', '$passwordHashed2', '$city', '$state')";
					
					//Check if any required fieldsare empty
                    if($first_name=='' or $last_name=='' or $bDay=='0' or $bMonth=='0' or $bYear=='' or $gender=='0' or $username=='' or $email=='' or $password=='' or $password2=='') { echo "- Make sure all the fields are filled.<br>"; } else
					
					//Check if password islonger than 8 characters
					if(strlen($password) < 8) {
						echo "Your password is too short";
					} else
						
					//Check if passwords match
                    if($password!=$password2) { 
						
					echo "- Your Passwords dont march.<br>";
										 
											  } else
						
                    
						if(mysqli_query($conn, $sql)) {
							if (!file_exists('./photos/'.$username.'')) {
    mkdir('./photos/'.$username.'', 0777);
}
							echo "Se registro";
							?>
            <script>
                        window.location = "login.php";
						</script>
            <?php
						} else echo "No se registro" . mysqli_error($conn);
					?></td>
        </tr>
      </tbody>
    </table>
    <?php
					}
				?>
  </form>
</div>
</body>
</html>