<?php
session_start();


if (isset($_POST['color'])){
	

print "<html>
	<head>
		<title>Lab 2 Confirm</title>
	</head>
	
	<body>
		<h1>Session Lab 2 Confirm</h1>";
			$choice= array();
				$choice['Red']= ('#FF0000');
				$choice['Green']= ('#008000');
				$choice['Blue']= ('#0000FF'); 	
			
			$_SESSION['color']=$_POST['color'];	
			$_SESSION['hex'] = $choice[$_POST['color']];
			
			

			if (array_key_exists($_POST['color'], $choice)){
				print 'You chose ' . $_POST['color'] . ' which is: ' . $choice[$_POST['color']];
			}
print  "<br>
			<a href='lab2Final.php'>Click to continue</a>
		<br>
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