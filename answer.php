<html>
<head>
<title>Report</title>
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
<link href="css/vpi.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if(isset($_POST['Answer']))
{
  $conn = mysql_connect("db_server", "db_name", "password");
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

$A=$_GET['a'];
$k=$_GET['k'];
$mu=$_GET['mu'];

$cooperativeness=$_POST['cooperativeness'];
$humanness=$_POST['humanness'];
$sql = "INSERT INTO answers VALUES('',now(),'$A','$k','$mu','$cooperativeness','$humanness')";


mysql_select_db('table_name');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
	<div style="height:240px;width:380px;">
	<h1> Report </h1>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="350" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">How cooperative was the parner? (-5=competitive;0=neutral;5=cooperative)</td>
<td><input name="cooperativeness" type="number" value="0" min="-5" max="5" id="cooperativeness"></td>
</tr>
<td>
<tr></tr>
</td>
<tr>
<td width="100">How realistic was the interaction? (0=robot-like;10=human-like)</td>
<td><input name="humanness" type="number" value="0" min="0" max="10" id="humanness" ></td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="Answer" type="submit" id="Answer" value="Answer">
</td>
</tr>
</table>
</form>
<?php
}
?>
</div>
</body>
</html>