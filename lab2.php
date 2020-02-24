<?php

session_start();
unset($_SESSION['color']);
unset($_SESSION);


print "<html>
	<head>
		<title>Lab 2</title>
	</head>
	
	<body>
		<h1>Session Lab 2</h1>
		<form name='color' action='lab2Confirm.php' method='POST'>
		Choose a Color: 
			<select name='color'> == $0
				<option value='Red'>Red</option>
				<option value='Green'>Green</option>
				<option value='Blue'>Blue</option>
			</select>
			<input type='submit' name='submit'>
		</form>
				
	</body>
</html>";

