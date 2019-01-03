<?php $temperature = round(shell_exec('/usr/local/bin/lm35'),2); ?>

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
?>

<html><head><title>LM35 </title>
<style>
p.a{
  margin-top: 1000px;
 }
</style>
</head>

<body>
 <head>
  <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
 <head>
<p class="a">
 <center>
  <h1 style="font-size:10vw;"> <?php echo $temperature ?> &#186C </h1>
 </center> 
</p>
</body>

</html>
