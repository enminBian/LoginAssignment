<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('phpscripts/config.php');
  confirm_logged_in();
 ?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
  <h1>Welcome To The  page</h1>
  <?php echo "<p class=\"inPage\">hi ~ {$_SESSION['user_name']}</p>";
        echo "<p class=\"time\">This is Last Login Time {$_SESSION['user_date']}</p>";?>
</body>
</html>
