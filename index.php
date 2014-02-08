<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Welcome to Web-VPI</title>
    <link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
	<link href="css/vpi.css" rel="stylesheet" type="text/css">
</head>

<body>
  <div>
    <h1>Welcome to Web-VPI</h1>
  
  In this experiment, you will interact with a Virtual Partner.
  <br>
  Your goal is to synchronize the movement in-phase with it.
  Just use your mouse or trackpad to control your circle.
    <a name="entree" id="entree"></a>
      <h2>Ready? To begin, click 
      <?php
      $_SESSION['xp'] = 0;
      echo "<a class=\"here\" href=\"";
        echo "trial.php";
        echo "\">here.</a>";        
        ?>
      
      </h2>

<i>Project done by <a href="https://twitter.com/introspection">Guillaume Dumas</a> and <a href="https://plus.google.com/u/0/+JohannesDrever/about">Johannes Drever</a>.
	<br>All the source code is available on <a href="https://github.com/crowd-coordination/web-vpi">GitHub</a>!</i>
</div>
  <div id="footer">
	  <h2><u>References:</u></h2>
- <a href="http://www.scholarpedia.org/article/Haken-Kelso-Bunz_model">Haken-Kelso-Bunz model. Kelso JAS (Scholarpedia, 2008)</a>
<br><br>
- <a href="www.plosone.org/article/info:doi%2F10.1371%2Fjournal.pone.0005749">Virtual Partner Interaction (VPI): Exploring Novel Behaviors via Coordination Dynamics. Kelso JAS, de Guzman GC, Reveley C, Tognoli E (PLoS ONE, 2009)</a>
  </div>
</body>
</html>