<?php
include 'password.php';
$servername = "localhost";
$username = "brianpo3_tester";
$dbname = "brianpo3_tester";

$pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$user = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$age = $_POST['age'];
$spriteNumber = $_POST['spriteNumber'];

$sql = "INSERT INTO bme405userpass (user, pass, email, age, spriteNumber) VALUES (:user, :pass, :email, :age, :spriteNumber)";
$statement = $pdo->prepare($sql);
$statement->bindValue(':user', $user);
$statement->bindValue(':pass', $pass);
$statement->bindValue(':email', $email);
$statement->bindValue(':age', $age);
$statement->bindValue(':spriteNumber', $spriteNumber);
$statement->execute();


?>

<html>
<head>
<title>BME 405</title>
<style>
@font-face {
  font-family: "Francisco";
  src: url('/405/SF-Pro-Display-Light.otf');
}
</style>
</head>

<body>
<h1>THANK YOU FOR REGISTERING</h1>
<a href="/405/index.php">RETURN TO LOGIN</a>

</body>

<script>


</script>

<style>
body {
  background: linear-gradient(225deg, #676767, #2f2f2f);
  color: lightgrey;
  font-family: 'Francisco', sans-serif;
  font-weight: 100;
  margin: 2rem;
  text-align: center;

}

a {
  color: lightgrey;
  font-size: 2rem;
}

</style>

</html>
