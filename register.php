<?php
session_start();
if(isset($_SESSION['id']) or isset($_SESSION['email'])) {
	header("Location: myProfile.php?");
} else
?>
<!DOCTYPE html PUBLIC "-//WAPFORUM//DTD XHTML Mobile 1.0//EN" "http://www.wapforum.org/DTD/xhtml-mobile10.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Abel|Quicksand" rel="stylesheet">
</head>

<body>
<div id="top">
  <table border="0" cellpadding="0" cellspacing="15" id="topMenu">
    <tr>
      <td align="center"><a href="index.php">HOME</a> | <a href="login.php">LOGIN</a> | <a href="myProfile.php">PROFILE</a> | <a href="register.php">REGISTER</a></td>
    </tr>
  </table>
</div>
<div>
  <form id="form1" method="post" action="">
    <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
      <tr>
        <td align="center">FIRST NAME</td>
      </tr>
      <tr>
        <td align="center"><label for="first_name"></label>
          <input name="first_name" type="text" id="first_name" /></td>
      </tr>
      <tr>
        <td align="center">LAST NAME</td>
      </tr>
      <tr>
        <td align="center"><input name="last_name" type="text" id="last_name" /></td>
      </tr>
      <tr>
        <td align="center">BIRTHDATE</td>
      </tr>
      <tr>
        <td align="center"><span style="font-size: 14px">
          <select name="bDay" id="bDay">
            <option value="0">Day</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <select name="bMonth" id="bMonth">
            <option value="0" selected="selected">Month</option>
            <option value="jan">January</option>
            <option value="feb">February</option>
            <option value="mar">March</option>
            <option value="apr">April</option>
            <option value="may">May</option>
            <option value="jun">June</option>
            <option value="jul">July</option>
            <option value="aug">August</option>
            <option value="sep">September</option>
            <option value="oct">October</option>
            <option value="nov">November</option>
            <option value="dec">December</option>
          </select>
          <input name="bYear" type="text" id="bYear" placeholder="Year" value="" size="10" />
        </span></td>
      </tr>
      <tr>
        <td align="center" >GENDER</td>
      </tr>
      <tr>
        <td align="center"><select name="gender" id="gender">
          <option value="0">Select One</option>
          <option value="m">Male</option>
          <option value="f">Female</option>
        </select></td>
      </tr>
      <tr>
        <td align="center">CITY</td>
      </tr>
      <tr>
        <td align="center"><input name="city" type="text" id="city" /></td>
      </tr>
      <tr>
        <td align="center">STATE</td>
      </tr>
      <tr>
        <td align="center"><span style="font-size: 14px">
          <select id="state" name="state">
            <option value="0">Select a State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachisetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </span></td>
      </tr>
    </table>
    <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
      <tr>
        <td align="center">USERNAME</td>
      </tr>
      <tr>
        <td align="center"><label for="city"></label>
          <input name="username" type="text" id="username" /></td>
      </tr>
      <tr>
        <td align="center">EMAIL</td>
      </tr>
      <tr>
        <td align="center"><input name="email" type="text" id="email" /></td>
      </tr>
      <tr>
        <td align="center">PASSWORD</td>
      </tr>
      <tr>
        <td align="center"><input name="password" type="password" id="password" /></td>
      </tr>
      <tr>
        <td align="center" >ENTER  PASSWORD AGAIN</td>
      </tr>
      <tr>
        <td align="center"><input name="password2" type="password" id="password2" /></td>
      </tr>
    </table>
    <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
      <tr>
        <td align="center"><input type="checkbox" name="checkbox" id="checkbox" />
          <label for="checkbox">By checking this box you agree with our Terms &amp; Conditions.</label></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="register" id="register" value="Create Account" /></td>
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
					$bDay = $_POST['bDay'];
					$bMonth = $_POST['bMonth'];
					$bYear = $_POST['bYear'];
					$gender = $_POST['gender'];
					$email = $_POST['email'];
					$city = $_POST['city'];
					$state = $_POST['state'];
					$register = $_POST["register"];	
					$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");					
					$sql = "INSERT INTO `user` (first_name, last_name, bDay, bMonth, bYear, gender, username, email, password, password2, city, state) VALUES ('$first_name', '$last_name', '$bDay', '$bMonth', '$bYear', '$gender', '$username', '$email', '$password', '$password2', '$city', '$state')";
					
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
							if (!file_exists('./mobile/photos/'.$username.'')) {
    mkdir('./mobile/photos/'.$username.'', 0777);
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