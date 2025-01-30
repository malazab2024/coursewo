<!DOCTYPE html>
<html>
    <head>
        <title>PHP Test</title>
    </head>
    <body>
    <?PHP
$GLOBALS['name'] = "Moutaz"; 
echo $GLOBALS['name'];    ?>

<style>
body {
	background-color: #5DADE2;
}
</style>

<form method="POST" action="/lab1/login.php">
  <label for="fname">Name:</label><br>
  <input type="text" id="fname" name="username"><br>
  <label for="lname">Password:</label><br>
  <input type="Password" id="lname" name="password">
  <input type="submit" value="SUBMIT">
</form>
    </body>
</html>