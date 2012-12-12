<!DOCTYPE html>

<html>
	<head>
		<title>Registered!</title>
	</head>
	<body>
		<pre><?php print_r($_GET) ?></pre>
		<h1>Hello <?php print(htmlspecialchars($_GET['name'])) ?></h1>
	</body>
</html>