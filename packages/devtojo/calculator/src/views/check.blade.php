<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>
	<h1 style="text-align:center">
		Check
	</h1>
	<form action="/check"  method="POST">
		@csrf
		<label>Key</label>
		<input type="text" name="key">
		<input type="submit" name="" value="submit">
	</form>
</body>
</html>