<?php $temperature = shell_exec('/usr/local/bin/lm35'); ?>

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>

<html><head><title>BBB PHP Test</title></head>
 <body>
 Hello from the BeagleBone!
 <head>
 <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 <head>
 <p>Your IP address is: <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
 <p>The temperature at the BBB is: <?php echo $temperature ?> &#186C</p>
 </body>
</html>
