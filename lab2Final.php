<?php
session_start();
//var_dump ($_SESSION['color']);

if (isset($_SESSION['color'])){

print "<html>
	<head>
		<title>Lab 2 Confirmed</title>
	</head>
	
	<body>
		<h1>Confirmed</h1>";
print "Confirmed: You chose ". $_SESSION['color'];
print " that has the hex value of: " . $_SESSION['hex'] ;



print "		<br>
			<a href='lab2.php'>Click to start over</a>		
	</body>
</html>";
}

else{
	print "<html>
	<head>
		<title>Lab 2 Confirmed</title>
	</head>
	
	<body>
		<h1>Confirmed</h1>
			Error: Please return to Start!
		<br>
			<a href='lab2.php'>Click to start over</a>		
	</body>
</html>";
	
}
