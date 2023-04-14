
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$conn = new mysqli("localhost", "id4818889_db", "5779Jprz", "id4818889_db");
$delete_query = "DELETE FROM post WHERE id='".$_GET['id']."'";
if(mysqli_query($conn, $delete_query)) {
echo "Post deleted Successfully. Now Redirecting you...";
?>
<script>
window.location = "profile.php";
</script>
<?php
} else echo "Did not delete";
?>
</body>
</html>