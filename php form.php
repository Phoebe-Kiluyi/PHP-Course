<!DOCTYPE html>
<html>
<head><title>php form</title></head>
<body>
<?
//Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"]== "POST"){
//Retrieve the form data
$name = $_POST["name"];
$email = $_POST["email"];


//Display the submitted data
echo "<p>Name: $name</p>";
echo "<p>Email: $email</p>";

}
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
  
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>



  </form>
</body>
</html>
