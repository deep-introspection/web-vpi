<?php

include "db.php";

// connect to the database
@mysql_select_db("morphome-vpi") or die( "Unable to select database");
 
header('Content-type: text/plain; charset=us-ascii');
echo 'a	k	humanness
'; 

// reads the map db

for ($stepA =0.3; $stepA  <= 3; $stepA=$stepA+0.3 )
	{
	for ($stepK =0; $stepK  <= 1; $stepK=$stepK+0.1 )
		{
			$stepA2 = $stepA + 0.3;
			$stepK2 = $stepK + 0.1;
		$query="SELECT a, k, humanness FROM answers WHERE a >= $stepA AND a < $stepA2 AND k >= $stepK AND  k < $stepK2 and mu < 0";
		$result = mysql_query($query) or die('Errant query: '.$query);
		$humannessSum=0.0;
		$humannessAverage=0.0; 
		// outputs the db as lines of text.
		while ($value = mysql_fetch_assoc($result))
		{
			$humannessSum=$humannessSum+$value['humanness'];
		}
		$humannessAverage=($humannessSum?$humannessSum/count($value):0);
	     echo $stepA*-1;
	     echo '	' .$stepK;
 	     echo '	' . $humannessAverage .'
';
	}
}

for ($stepA =0.3; $stepA  <= 3; $stepA=$stepA+0.3 )
	{
	for ($stepK =0; $stepK  <= 1; $stepK=$stepK+0.1 )
		{
			$stepA2 = $stepA + 0.3;
			$stepK2 = $stepK + 0.1;
		$query="SELECT a, k, humanness FROM answers WHERE a >= $stepA AND a < $stepA2 AND k >= $stepK AND  k < $stepK2 and mu > 0";
		$result = mysql_query($query) or die('Errant query: '.$query);
		$humannessSum=0.0;
		$humannessAverage=0.0; 
		// outputs the db as lines of text.
		while ($value = mysql_fetch_assoc($result))
		{
			$humannessSum=$humannessSum+$value['humanness'];
		}
		$humannessAverage=($humannessSum?$humannessSum/count($value):0);
	     echo $stepA;
	     echo '	' .$stepK;
 	     echo '	' . $humannessAverage .'
';
	}
}

for ($stepK =0; $stepK  <= 1; $stepK=$stepK+0.1 )
	{
		$stepA = 0;
		$stepA2 = 0.3;
		$stepK2 = $stepK + 0.1;
	$query="SELECT a, k, humanness FROM answers WHERE a >= $stepA AND a < $stepA2 AND k >= $stepK AND  k < $stepK2";
	$result = mysql_query($query) or die('Errant query: '.$query);
	$humannessSum=0.0;
	$humannessAverage=0.0; 
	// outputs the db as lines of text.
	while ($value = mysql_fetch_assoc($result))
	{
		$humannessSum=$humannessSum+$value['humanness'];
	}
	$humannessAverage=($humannessSum?$humannessSum/count($value):0);
     echo $stepA;
     echo '	' .$stepK;
     echo '	' . $humannessAverage .'
';
}

mysql_close($conn);
?>
