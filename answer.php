<html>
<head>
	<meta charset="utf-8"/>
	<title>Report</title>
	<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
	<link href="css/vpi.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
if(isset($_POST['Answer']))
{
	
include 'db.php';
	
$A=$_GET['a'];
$k=$_GET['k'];
$mu=$_GET['mu'];
$dtv=$_GET['dtv'];
$dtm=$_GET['dtm'];
$controler=$_GET['controler'];

$remote_addr=$_SERVER['REMOTE_ADDR'];
$http_x_forwarded_for=$_SERVER['HTTP_X_FORWARDED_FOR'];

$cooperativeness=$_POST['cooperativeness'];
$humanness=$_POST['humanness'];
$sql = "INSERT INTO answers VALUES('',now(),'$A','$k','$mu','$cooperativeness','$humanness', '$dtm', '$dtv', '$remote_addr', '$http_x_forwarded_for', '$controler')";


mysql_select_db('morphome-vpi');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "<html>";
echo "<head>";
echo "	<meta charset=\"utf-8\"/>";
echo "	<title>Report</title>";
echo "	<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>";
echo "	<link href=\"css/vpi.css\" rel=\"stylesheet\" type=\"text/css\">";
echo "</head>";
echo "<body>";
echo "<div style=\"height:240px;width:280px;\">";
echo "Thanks for your participation!\n";
echo "<br>\n";
echo "<br>\n";
echo "Since we want as much data as possible, it would be great to try to do as much trials as you can.\n";
echo "<br>\n";
echo "<br>\n";
echo "You can also share this experiment with all your friends... ;)\n";
echo "<br>\n";
echo "</div>\n";
echo "<div style=\"height:8px;width:280px;\">";
echo "<a href=\"trial.php\">Replay</a> or <a href=\"index.php\">Back to Main Page.</a>\n";
echo "</div>";
mysql_close($conn);
}
else
{
?>
	<div style="height:480px;width:280px;">
	<h1> Report </h1>
<form id="radio-form" onsubmit="return validate();" method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="400">How cooperative was the partner?</td>
</tr>
<tr>
<td>	
	<input type="radio" name="cooperativeness" value="-1" style="margin-left: 50px">Very competitive
	<br><input type="radio" name="cooperativeness" value="-0.5" style="margin-left: 50px">Competitive
	<br><input type="radio" name="cooperativeness" value="0" style="margin-left: 50px">Neutral
	<br><input type="radio" name="cooperativeness" value="0.5" style="margin-left: 50px">Cooperative
	<br><input type="radio" name="cooperativeness" value="1" style="margin-left: 50px">Very Cooperative
</td>
</tr>
<td>
<tr></tr>
</td>
<tr>
<td width="400">How human-like was the partner?<br></td>
</tr>
<tr>
<td>
	<input type="radio" name="humanness" value="-1" style="margin-left: 50px">Robot like
	<br><input type="radio" name="humanness" value="-0.5" style="margin-left: 50px">Slightly robot like
	<br><input type="radio" name="humanness" value="0" style="margin-left: 50px">I don't know...
	<br><input type="radio" name="humanness" value="0.5" style="margin-left: 50px">Slightly human like
	<br><input type="radio" name="humanness" value="1" style="margin-left: 50px">Human like
</td>
</tr>
<tr>
<td width="400">What controler did you use?<br></td>
</tr>
<tr>
<td>
	<input type="radio" name="controler" value="-1" style="margin-left: 50px">Mouse
	<br><input type="radio" name="controler" value="-0.5" style="margin-left: 50px">Trackpad
	<br><input type="radio" name="controler" value="0" style="margin-left: 50px">Other
</td>
</tr>
<tr>
<td width="300">
<input name="Answer" type="submit" id="Answer" value="Answer" style="margin-left: 200px">
</td>
</tr>
</table>
</form>
<?php
}
?>
</div>

<script>
function validate() {
    // check cooperativeness input
    var r = document.getElementsByName("cooperativeness");
    var c = -1;

    for(var i=0; i < r.length; i++){
        if(r[i].checked) {
            c = i; 
        }
    }

    if (c == -1) {
        alert("Please select cooperativeness.");
        return false;
    }

    // check humanness input
    var r = document.getElementsByName("humanness");
    var c = -1;

    for(var i=0; i < r.length; i++){
        if(r[i].checked) {
            c = i; 
        }
    }

    if (c == -1) {
        alert("Please select humaness.");
        return false;
    }
	
    // check controler input
    var r = document.getElementsByName("controler");
    var c = -1;

    for(var i=0; i < r.length; i++){
        if(r[i].checked) {
            c = i; 
        }
    }

    if (c == -1) {
        alert("Please select controler.");
        return false;
    }

    return true;
}

</script>

</body>
</html>
