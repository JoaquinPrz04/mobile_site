<?php
session_start();
if(isset($_SESSION['id']) or isset($_SESSION['email']) or isset($_SESSION['username'])) {
?>
<script>
window.location = "myProfile.php";
</script>
<?php
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
<div>
  <table border="0" cellpadding="0" cellspacing="15" id="topMenu">
    <tr>
      <td align="center"><a href="index.php">HOME</a> | <a href="login.php">LOGIN</a> | <a href="register.php">REGISTER</a></td>
    </tr>
  </table>
</div>
<div>
  <form id="form1" method="post" action="">
    <table border="0" align="center" cellpadding="0" cellspacing="15" id="cards">
      <tr>
        <td align="center">EMAIL</td>
      </tr>
      <tr>
        <td align="center"><label for="email"></label>
          <input name="email" type="text" id="email" /></td>
      </tr>
      <tr>
        <td align="center">PASSWORD</td>
      </tr>
      <tr>
        <td align="center"><input name="password" type="password" id="password" /></td>
      </tr>
      <tr>
        <td align="center"><input type="submit" name="login" id="login" value="Login" />
          <?php
						if(isset($_POST['login'])) {
						$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");
						$checkexist = "SELECT * FROM `user` WHERE email = '".$_POST['email']."' && password = '".$_POST['password']."'";
						if(mysqli_num_rows(mysqli_query($conn, $checkexist))>0) {
						
						$conn2 = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");	
						$user_query = "SELECT * FROM `user` WHERE email = '".$_POST['email']."'";
						$result = mysqli_query($conn2, $user_query);
						$user = mysqli_fetch_array($result);
						$_SESSION['email'] = $user['email'];
						$_SESSION['id'] = $user['id'];
						$_SESSION['username'] = $user['username'];
						$_SESSION['first_name'] = $user['first_name'];
						$_SESSION['last_name'] = $user['last_name'];
						?>
          <script>
                        window.location = "myProfile.php";
						</script>
          <?php
						} else { 
						?>
          <table width="100%" border="0" cellpadding="0" cellspacing="10" id="alert" class="card">
            <tbody>
              <tr>
                <td align="center" style="font-size: 16px; font-weight: bold; color: #ffffff;">ALERTS</td>
              </tr>
              <tr>
                <td> Something went wrong, please try again.</td>
              </tr>
            </tbody>
          </table>
          <?php
						}
						} 
						?></td>
      </tr>
      <tr>
        <td align="center">Don't have an account? <a href="register.php">Register here</a></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>